<?php


use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'airports'], function () {
    Route::get('/search-db', [\App\Http\Controllers\Api\AirportController::class, 'searchDB']);
//    Route::get('/search-db', fn () => 'test search');
    Route::get('/search-es', fn () => 'test search');
});