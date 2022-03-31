<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
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
