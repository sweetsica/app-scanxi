<?php

use App\Http\Controllers\DirectController;
use App\Http\Controllers\Api\PredictController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[DirectController::class,'index']);
Route::post('/result',[PredictController::class,'predictResult'])->name('predictResult');
