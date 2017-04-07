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

use Illuminate\Http\Request;

//customers table collection routes
Route::get('/customers', 'CustomerController@index');
Route::post('/customers', 'CustomerController@create');

//customer singular routes
Route::get('/customers/{id}', 'CustomerController@show');
Route::put('/customers/{id}', 'CustomerController@update');
Route::delete('/customers/{id}', 'CustomerController@destroy');

//Orders collection routes
Route::get('/orders', 'OrdersController@index' );
Route::post('/orders', 'OrdersController@create');

//Orders singular routes
Route::get('/orders/{id}', 'OrdersController@show');
Route::put('/orders/{id}', 'OrdersController@update');
Route::delete('/orders/{id}', 'OrdersController@destroy');

//Recipe collection routes
Route::get('/recipes', 'RecipeController@index');
Route::post('/recipes', 'RecipeController@create');

//Recipe singular routes
Route::get('/recipes/{id}', 'RecipeController@show');
Route::put('/recipes/{id}', 'RecipeController@update');
Route::delete('/recipes/{id}', 'RecipeController@destroy');


//HTML/view responses

Route::get('/', function () {
    return view('welcome');
});


Route::get('/styleguide', function(){

});
