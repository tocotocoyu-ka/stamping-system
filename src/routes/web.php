<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\CreatedUserController;
use App\Http\Controllers\StampingController;
use App\Http\Controllers\RecordedController;

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

Route::post('/create', [CreatedUserController::class, 'store']);
Route::get('/login', [AuthenticatedSessionController::class, 'access']);
Route::middleware('auth')->group(function () {
    Route::get('/stamp', [StampingController::class, 'stamp']);
});
Route::get('/record', [RecordedController::class, 'index']);
Route::post('/stamp', [StampingController::class,'store']);