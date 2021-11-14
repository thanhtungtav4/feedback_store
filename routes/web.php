<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::prefix('/')->middleware(['web'])->namespace('App\Http\Controllers')->group(function () {
    Route::get('/', 'FeedbackController@start');

});
Route::prefix('feedback')->middleware(['web'])->namespace('App\Http\Controllers')->group(function () {
    // Comment web
    Route::get('/', 'FeedbackController@index');
    Route::post('/', 'FeedbackController@store');
});


