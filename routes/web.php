<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pegawaiController;
use App\Http\Controllers\ProfileController;

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
Route::resource('pegawai', pegawaiController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

route::get('/logout',[ProfileController::class, 'logout']);

route::get('/pegawai',[pegawaiController::class, 'index'])->name('pegawai');

route::get('/tambahdata',[pegawaiController::class, 'tambahdata']) ->name('tambahdata');
route::post('/insertdata',[pegawaiController::class, 'insertdata']) ->name('insertdata');

route::get('/tampilkandata/{id}',[pegawaiController::class, 'tampilkandata']) ->name('tampilkandata');
route::post('/updatedata/{id}',[pegawaiController::class, 'updatedata']) ->name('updatedata');

route::get('/delete/{id}',[pegawaiController::class, 'delete']) ->name('delete');


