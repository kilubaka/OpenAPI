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

Route::group([
    'as' => 'api.',
    'namespace' => 'App\Http\Controllers\Api',
    'middleware' => ['auth:api']
], function () {
    Route::apiResource('categories', 'CategoriesApiController');
});

//auth routes
Route::post('api/register', 'App\Http\Controllers\AuthController@register');
Route::post('api/login', 'App\Http\Controllers\AuthController@login');
