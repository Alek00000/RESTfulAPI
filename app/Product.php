<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    const AVAILABLE_PRODUCT ='available';
    const UNAVAILABLE_PRODUCT ='unvaiable';
    public $fillable = [
        'name',
        'description',
        'quantity',
        'status',
        'image',
        'seler_id',
    ];

    public function isAvialable(){
        return $this->status == Product ::AVAILABLE_PRODUCT;
    }
    public function sellers(){
        return $this->belongsTo(Seller::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class);
    }
}
