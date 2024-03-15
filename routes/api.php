<?php

use App\Imports\AgeImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImportQuotaController;
use App\Http\Controllers\ApiCustomerController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/import/age',[ImportQuotaController::class, 'importAge']);
Route::post('/import/bmi',[ImportQuotaController::class, 'importBMI']);
Route::post('/import/bqi',[ImportQuotaController::class, 'importBQI']);

Route::resource('customer', ApiCustomerController::class);
