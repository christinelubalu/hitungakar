<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\ApiController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\SquareRootController;


Route::get('/', function () {
    return view('calculator');
});

Route::post('/calculate', [CalculatorController::class, 'calculate']);
