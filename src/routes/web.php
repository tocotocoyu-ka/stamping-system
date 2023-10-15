<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticatedSessionController;

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

Route::get('/login', [AuthenticatedSessionController::class, 'login']);
Route::post('/stamp', [AuthenticatedSessionController::class, 'store']);
/*以下後で消す！*/
Route::get('/stamping/stamp', [StampingController::class, 'stamp']);
Route::post('/stamping/stamp', [StampingController::class, 'stamp']);