<?php

namespace App\Http\Controllers\Product;

use App\Seller;
use App\Http\Controllers\ApiController;
use App\Product;
use App\Transaction;
use App\User;
use Illuminate\Http\Request;

class ProductBuyerTransactionController extends ApiController
{

    public function store(Request $request, Product $product, User $buyer)
    {

        $rules = [
            'quantity' => 'required|integer|min:1'
        ];
    $this -> validate($request, $rules);

        if($buyer->id == $product->seller_id){
            return $this->errorResponse('The buyer must be different from the seller',409);
        }
        if(!$buyer->isVerified()){
            return $this->errorResponse('The buyer must be verified user',409);
        }
        if(!$product->seller->isVerified()){
            return $this->errorResponse('The seller must be verified user',409);
        }
        if(!$product->isVerified()){
            return $this->errorResponse('The product is not be available',409);
        }
        if($product->quantity < $request->quantity){
            return $this->errorResponse('The product does not have enough units for this transaction',409);
        }

        return DB::transaction(function () use ($request, $product, $buyer) {
            $product->quantity -= $request->quantity;
            $product->save();

            $transaction = Transaction::create([
            'quantity'=>$request->quantity,
            'buyer_id'=>$buyer->id,
            'product_id'=>$product->id,
            ]);

            return $this->showOne($transaction, 201);
        });


    }

}
