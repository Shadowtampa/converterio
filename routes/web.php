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

use App\Http\Controllers\TemperatureController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/temperature', [TemperatureController::class, 'index']);
Route::post('/temperature', [TemperatureController::class, 'index']);