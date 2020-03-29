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
Route::group(["middleware" => ["auth"]] , function(){
Route::get('/home', 'HomeController@index')->name('home');

/*products routes */
Route::get('/products', 'ProductsController@index')->name('products');
Route::post('/products/store', 'ProductsController@store')->name('products.store');
Route::get('/products/delete/{id}', 'ProductsController@destroy')->name('products.delete');
Route::get('/products/edit/{id}', 'ProductsController@edit')->name('products.edit');
Route::post('/products/update/{id}', 'ProductsController@update')->name('products.update');
Route::get('/products/changestate/{id}', 'ProductsController@changestate')->name('products.changestate');


/*categories routes */
Route::get('/categories', 'CategoriesController@index')->name('categories');
Route::post('/categories/store', 'CategoriesController@store')->name('categories.store');
Route::get('/categories/delete/{id}', 'CategoriesController@destroy')->name('categories.delete');
Route::get('/categories/edit/{id}', 'CategoriesController@edit')->name('categories.edit');
Route::post('/categories/update/{id}', 'CategoriesController@update')->name('categories.update');

/*tags routes */
Route::get('/tags', 'TagsController@index')->name('tags');
Route::post('/tags/store', 'TagsController@store')->name('tags.store');
Route::get('/tags/delete/{id}', 'TagsController@destroy')->name('tags.delete');
Route::post('/tags/update/{id}', 'TagsController@update')->name('tags.update');
Route::get('/tags/edit/{id}', 'TagsController@edit')->name('tags.edit');

/*setting routes */
Route::get('/setting', 'SettingController@index')->name('setting');
Route::post('/setting/save', 'SettingController@store')->name('setting.save');
Route::post('/setting/save/changelogo', 'SettingController@storeLogo')->name('setting.save.logo');



/*profile routes */
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::post('/profile/contantchange', 'ProfileController@storeContent')->name('profile.contantchange');
Route::post('/profile/footerchange', 'ProfileController@storeFooter')->name('profile.footerchange');
Route::post('/profile/userchange/{id}', 'ProfileController@storeUserSetting')->name('profile.userchange');


/*users routes */
Route::get('/users', 'UsersAdminController@index')->name('users');



});