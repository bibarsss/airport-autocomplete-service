<?php


use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'airport'], function () {
    Route::get('/search', fn () => 'test search');
});