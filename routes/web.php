<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('product.index');
});

Route::resource('product','ProductController');