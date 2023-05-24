<?php

use App\Http\Controllers\GeneralController;
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

//belum login masuk ke sini
Route::middleware('guest')->group(function() {
    Route::get('/', [GeneralController::class, 'loginPage']);
    Route::post('/', [GeneralController::class, 'loginCek']);
});

//sudah login masuk ke sini
Route::middleware('auth')->group(function(){
    Route::get('/dashboard', function() {
        return "ANDA BERHASIL MASUK DASHBOARD";
    });
});
