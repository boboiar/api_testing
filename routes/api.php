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


Route::namespace('API\Android')->group(function (){
    /************** Out of middleware  ***************/



    /**************  Inside  middleware ***************/
    Route::middleware('user_token_auth:user_api')->group(function (){

        Route::prefix('main_categories')->group(function (){

            Route::get('get', 'MainCategoriesController@index');
        });
    });
});




