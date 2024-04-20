<?php

use App\Http\Controllers\ScheduleController;
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

Route::get('/', [ScheduleController::class, 'index']);
Route::get('/schedules/create', [ScheduleController::class, 'create']);
Route::post('/schedules/create', [ScheduleController::class, 'store']);
Route::get('/schedules/create', function () {
    return view('/schedules/create');
});
