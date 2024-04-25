<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DpfpApi\UserRestApiController; 

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

//SensorRestApi
Route::post("list_finger", [UserRestApiController::class, "index"]);
Route::post("save_finger", [UserRestApiController::class, "store"]);
Route::post("sincronizar", [UserRestApiController::class, "sincronizar"]);
