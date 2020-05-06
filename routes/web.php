<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*
* Buyer
*/
Route::resource('buyers', 'Buyer\BuyerController', ['only' => ['index','show']]);


/*
* Categories
*/
Route::resource('categories', 'Category\CategoryController', ['except' => ['index','show']]);


/*
* Products
*/
Route::resource('products', 'Product\ProductController', ['only' => ['index','show']]);


/*
* Sellers
*/
Route::resource('sellers', 'Seller\SellerController', ['only' => ['index','show']]);


/*
* Transactions
*/
Route::resource('transactions', 'Transaction\TransactionController', ['only' => ['index','show']]);


/*
* Users
*/
Route::resource('users', 'User\UserController', ['only' => ['index','show']]);
