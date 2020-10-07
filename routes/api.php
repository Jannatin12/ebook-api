<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('books', 'BookController@index'); //show all data
// Route::post('books', 'BookController@store'); //create data
// Route::get('books/{id}', 'BookController@show'); //read data by id / detail
// Route::put('books/{id}', 'BookController@update'); //update data
// Route::delete('books/{id}', 'BookController@destroy'); //delete data

//route book
Route::resource('books', 'BookController');

//route author
Route::resource('authors', 'AuthorController');

//route praktek jwt-auth
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router){
    Route::post('login', 'AuthController@login');
    Route::post('register', 'AuthController@register');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::get('user-profile', 'AuthController@userProfile');
});