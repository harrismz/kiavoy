<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\IdentityController;
// use App\Http\Controllers\ConfigController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::post('/register', [AuthController::class, 'register']);
// Route::get('/config', [ConfigController::class, 'getAppUrl']);
Route::get('/kelurahan', [LocationController::class, 'getKelurahan']);
Route::get('/kecamatan/{id}', [LocationController::class, 'getKecamatan']);
Route::get('/provinsi/{id}', [LocationController::class, 'getProvince']);
Route::get('/pendidikan', [IdentityController::class, 'getEducation']);
Route::get('/pekerjaan', [IdentityController::class, 'getJob']);
Route::get('/blood-types', [IdentityController::class, 'getBloodType']);
Route::get('/religion', [IdentityController::class, 'getReligion']);
