<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;


Route::get('/addproduct', function () {
    return view('product');
});

Route::post('/addproduct', function () {
    $product = new Product();
    $product->title = request('title');
    $product->quantity = request('quantity');
    $product->body = request('body');
    $product->save();
   
});



