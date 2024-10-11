<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\KaprodiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;

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
    Route::get('/admin/kaprodi/index',[AdminController::class,'index'])->middleware('userAkses:kaprodi');
    Route::get('/admin/dosen/index',[AdminController::class,'dosen'])->middleware('userAkses:dosen');
    Route::get('/admin/mahasiswa/index',[AdminController::class,'mahasiswa'])->middleware('userAkses:mahasiswa');
    
    Route::get('/logout', [SesiController::class,'logout']);
});

Route::group(['middleware' => 'kaprodi'], function () {
    Route::get('/kaprodi', [AdminController::class, 'index'])->name('kaprodi.index');

    Route::get('/kaprodi/index', [AdminController::class, 'index'])->name('kaprodi.index');
    Route::get('/dosen/edit/{id}', [DosenController::class, 'edit'])->name('dosen.edit');
    Route::post('/dosen/update/{id}', [DosenController::class, 'update'])->name('dosen.update');
    
    Route::get('/kelas/create', [KelasController::class, 'create'])->name('kelas.create');
    Route::post('/kelas', [KelasController::class, 'store'])->name('kelas.store');
    Route::delete('/kelas/{id}', [KelasController::class, 'destroy'])->name('kelas.destroy');

    Route::get('/kaprodi/index', [AdminController::class, 'index'])->name('kaprodi.index');
    Route::get('/kelas/edit/{id}', [KelasController::class, 'edit'])->name('kelas.edit');
    Route::post('/kelas/update/{id}', [KelasController::class, 'update'])->name('kelas.update');


    Route::get('/dosen/create', [DosenController::class, 'create'])->name('dosen.create');
    Route::post('/dosen/store', [DosenController::class, 'store'])->name('dosen.store');
    Route::delete('/dosen/{id}', [DosenController::class, 'destroy'])->name('dosen.destroy');
});

Route::prefix('dosen')->middleware('auth')->group(function () {
    Route::get('/dosen/index', [DosenController::class, 'index'])->name('dosen.index');
    Route::get('/dosen/mahasiswa/create', [DosenController::class, 'createMahasiswa'])->name('dosen.createMahasiswa');
    Route::post('/dosen/mahasiswa/store', [DosenController::class, 'storeMahasiswa'])->name('dosen.storeMahasiswa');
    Route::get('/dosen/mahasiswa/{id}/edit', [DosenController::class, 'editMahasiswa'])->name('dosen.editMahasiswa');
    Route::match(['put', 'post'], 'mahasiswa/update/{id}', [DosenController::class, 'updateMahasiswa'])->name('dosen.updateMahasiswa');
    Route::delete('/dosen/mahasiswa/{id}', [DosenController::class, 'destroyMahasiswa'])->name('dosen.destroyMahasiswa');
   
});


Route::get('mahasiswa/index', [MahasiswaController::class, 'index'])->name('mahasiswa.index');

// Dosen routes
Route::get('/dosen/index', [DosenController::class, 'index'])->name('dosen.index');
Route::get('/dosen/request', [DosenController::class, 'request'])->name('dosen.request');
Route::post('dosen/request/{id}/approve', [DosenController::class, 'approveRequest'])->name('dosen.request.approve');
Route::post('dosen/request/{id}/reject', [DosenController::class, 'rejectRequest'])->name('dosen.request.reject');

Route::get('/mahasiswa/request', [MahasiswaController::class, 'showRequestForm'])->name('mahasiswa.request');
Route::post('/mahasiswa/request', [MahasiswaController::class, 'sendRequest'])->name('mahasiswa.sendRequest');

Route::get('/mahasiswa/edit/{id}', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::post('/mahasiswa/update/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
