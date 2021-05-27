<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'ProductController@index');


Route::resource('product','ProductController');

Route::get('product/delete/{id}', 'ProductController@destroy')->name('productDelete');
Route::get('product/edit/{id}', 'ProductController@edit')->name('productEdit');

Route::get('product/show/{id}', 'ProductController@show')->name('productShow');
Route::post('product/update/{id}', 'ProductController@update')->name('productUpdate');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::get('rename', 'RenameFilesController@getRename')->name('rename');
Route::post('rename', 'RenameFilesController@postRename')->name('renameFile');