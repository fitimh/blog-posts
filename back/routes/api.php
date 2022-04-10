<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

//'middleware' => 'auth:sanctum' -




Route::get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['middleware' => 'auth:sanctum'], function(){
    // Users
    Route::get('users', 'UserController@index')->middleware('isAdmin');
    Route::get('users/{id}', 'UserController@show')->middleware('isAdminOrSelf');
});

//post

 Route::post('/add', 'BlogController@add');
    Route::put('/{id}', 'BlogController@update');
    Route::delete('/posts/{id}', 'BlogController@delete');
    Route::get('/posts', 'BlogController@get');
    Route::get('/posts/{id}', 'BlogController@getById');




    

Route::prefix('auth')->group(function(){
    Route::post('register', 'AuthController@register');
    Route::post('login', 'AuthController@login');
    Route::get('refresh', 'AuthController@refresh');


    Route::group(['middleware' => 'auth:api'], function(){
        Route::get('user', 'AuthController@user');
        Route::post('logout', 'AuthController@logout');
    });
});
