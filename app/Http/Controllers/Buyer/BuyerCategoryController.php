<?php

namespace App\Http\Controllers\Buyer;

use App\Buyer;
use App\Product;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;

class BuyerCategoryController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Buyer $buyer)
    {
        $categories = $buyer->transactions()-> with('product.categories')
        -> get()
        -> pluck('product.categories')
        -> collapse()
        -> unique('id')
        -> values();

        return $this -> showAll($categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

}
