<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public $fillable = [
        'quantity',
        'buyer_id',
        'product_id'
    ];

    public function products(){
        return $this->belongsTo(Product::class);
    }

    public function buyers(){
        return $this->belongsTo(Buyer::class);
    }
}
