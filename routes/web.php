<?php

use App\Http\Controllers\anggotaController;
use App\Http\Controllers\authController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;


Route::get('/', [homeController::class, 'home']);

// auth proses
Route::get('login', [authController::class, 'login']);
Route::post('login', [authController::class, 'validasi']);
// Route::get('register', [authController::class, 'registers']);
Route::post('register', [authController::class, 'register']);
Route::get('logout', [authController::class, 'logout']);


// controller anggota
Route::post('daftar', [anggotaController::class, 'daftar']);

// hanya admin
Route::group(['middleware' => ['role:admin']], function () {
    // dashboard admin
    Route::get('admin', [homeController::class, 'index']);

    //user
    Route::get('user', [userController::class, 'user']);
    Route::post('edituser/{id}', [userController::class, 'edit']);
    Route::post('adduser', [userController::class, 'create']);
    Route::delete('deleteuser/{id}', [userController::class, 'delete']);

    // anggota
    Route::get('list-daftar', [anggotaController::class, 'pendaftar']);
    Route::get('confirm/{id}', [anggotaController::class, 'confirm']);
});
