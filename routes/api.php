<?php

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
], function () {
    Route::apiResource('categories', 'CategoriesApiController');
    Route::apiResource('leaders', 'LeadersApiController');
    Route::apiResource('programs', 'ProgramsApiController');
    Route::apiResource('schedules', 'SchedulesApiController');
});
