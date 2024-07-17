<?php


use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1'], function () {
    include 'airport.php';
});