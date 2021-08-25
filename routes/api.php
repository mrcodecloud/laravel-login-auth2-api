<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

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

Route::namespace('Api')->group(function(){
   Route::prefix('auth')->group(function(){
       // login function in the AuthController will be called PARAM2 for post
       // whenever we will make a request to the 'login' end point PARAM1 for post 
       // similarly for the signup
    Route::post('login', [AuthController::class,'login']);

    Route::post('signup', [AuthController::class,'signup']);
   });


   // We define middleware for all other routes, and OAuth will be used for it 

   Route::group([
       'middleware' => 'auth:api'
   ], function(){
    Route::get('helloworld', [AuthController::class,'index']);
    Route::post('logout', [AuthController::class,'logout']);
   });
});