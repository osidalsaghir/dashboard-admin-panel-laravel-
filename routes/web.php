<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*products routes */
Route::get('/products', 'ProductsController@index')->name('products');
Route::post('/products/store', 'ProductsController@store')->name('products.store');
Route::get('/products/delete/{id}', 'ProductsController@destroy')->name('products.delete');
Route::get('/products/edit/{id}', 'ProductsController@edit')->name('products.edit');
Route::post('/products/update/{id}', 'ProductsController@update')->name('products.update');


/*categories routes */
Route::get('/categories', 'CategoriesController@index')->name('categories');
Route::post('/categories/store', 'CategoriesController@store')->name('categories.store');
Route::get('/categories/delete/{id}', 'CategoriesController@destroy')->name('categories.delete');


/*tags routes */
Route::get('/tags', 'TagsController@index')->name('tags');
Route::post('/tags/store', 'TagsController@store')->name('tags.store');
Route::get('/tags/delete/{id}', 'TagsController@destroy')->name('tags.delete');


