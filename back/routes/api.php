<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/user', function (Request $request) {
    return $request->user();
});

//post
Route::post('/add', 'PostController@add');
Route::put('/{id}', 'PostController@update');
Route::delete('/{id}', 'PostController@delete');
Route::get('/', 'PostController@get');
Route::get('/{id}', 'PostController@getById');



Route::post('/register', 'UserController@addUser');
