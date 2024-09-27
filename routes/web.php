<?php

use App\Http\Controllers\KaprodiController;
use App\Http\Controllers\SesiController;
use Illuminate\Routing\Router;
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
Route::middleware(['guest'])->group(function () {
    Route::get('/',[SesiController::class,'index'])->name('login');
    Route::post('/',[SesiController::class,'login']);
});

Route::get('/home', function(){
    return redirect('/kaprodi');
});


Route::middleware(['auth'])->group(function(){
    Route::get('/kaprodi/kaprodi',[KaprodiController::class,'index'])->middleware('userAkses:kaprodi');
    Route::get('/kaprodi/dosen',[KaprodiController::class,'dosen'])->middleware('userAkses:dosen');
    Route::get('/kaprodi/mahasiswa',[KaprodiController::class,'mahasiswa'])->middleware('userAkses:mahasiswa');
    Route::get('/logout', [SesiController::class,'logout']);
});
