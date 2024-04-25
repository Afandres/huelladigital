<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DpfpApi\UserRestApiController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Rutas para interactuar con el plugin
Route::get('/users', [UserRestApiController::class, 'users_list'])->name('dpfp.index');
Route::get('/users/verify_users', [UserRestApiController::class, 'verify_users'])->name('verify_users');
Route::get('/users/getdata_users/{user_id}/{fingerId}', [UserRestApiController::class, 'getDataUser'])->name('getdata_users');
Route::get("/users/{user}/finger-list", [UserRestApiController::class, "fingerList"])->name("finger-list");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
