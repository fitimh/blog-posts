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
//'middleware' => 'auth:sanctum' - qikjo tash
//pe r qeta sum bajke
//ama laura sot tha qa je tu perdor per token thash Jwt edhe sanctum
//tani ma bani tha nese perdoor jwt ti gjeneron creditinals vet edhe ski nevoj me ba function login hiq
// sanctum veq jem tu perdor edhe vllaqko qikjo osht mos ma zgat ma shum ktu laura qlarura
//hahahahahahh po a the met kallxu diqak
//ta kallxova lauren ahahahha
//se ato market sja ke lyp numrin hahaha
// AHHAHAHAH e nanen qa o ky middleware is admin
//nese osht admin e shtin qat route nese jo i thot shkko qi nasjen tjt hahahaha



Route::get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['middleware' => 'auth:sanctum'], function(){
    // Users
    Route::get('users', 'UserController@index')->middleware('isAdmin');
    Route::get('users/{id}', 'UserController@show')->middleware('isAdminOrSelf');
});

//post
Route::post('/add', 'PostController@add');
Route::put('/{id}', 'PostController@update');
Route::delete('/{id}', 'PostController@delete');
Route::get('/', 'PostController@get');
Route::get('/{id}', 'PostController@getById');


Route::prefix('auth')->group(function(){
    Route::post('register', 'AuthController@register');
    Route::post('login', 'AuthController@login');
    Route::get('refresh', 'AuthController@refresh');


    Route::group(['middleware' => 'auth:api'], function(){
            Route::get('user', 'AuthController@user');
        Route::post('logout', 'AuthController@logout');
    });
});
