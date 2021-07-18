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

Route::get('/austria', [App\Http\Controllers\MainController::class, 'showAustria']);
Route::get('/premier_league', [App\Http\Controllers\MainController::class, 'showPremierLeague']);

Route::get('/determineLocation', [App\Http\Controllers\MainController::class, 'determineLocation']);
