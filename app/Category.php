<?php

namespace App;

use App\Http\Controllers\Product\ProductController;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $hidden = ['pivot'];

    protected $fillable = [
        'name',
        'description'
    ];

 public function products(){
    return $this->belongsToMany(Product::class);
}
}
