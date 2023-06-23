<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\DoctorController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/show_doctor_list', [DoctorController::class, 'fetch_specialization']);
Route::post('/add-doctor', [DoctorController::class, 'add_doctor']);
Route::post('/add-doctor-type', [DoctorController::class, 'add_specialist_type']);
Route::get('/show_all_doctor', [DoctorController::class, 'fetch_doctor']);
Route::post('/update-doctor-type', [DoctorController::class, 'update_type']);
Route::post('/delete-doctor-type', [DoctorController::class, 'delete_type']);