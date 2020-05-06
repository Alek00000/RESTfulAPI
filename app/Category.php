<?php

namespace App;

use App\Http\Controllers\Product\ProductController;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
 public $fillable = [
     'name',
     'description'
 ];

 public function products(){
    return $this->belongsToMany(Product::class);
}
}
