<?php

use App\Http\Controllers\UkkController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/siswa', [UkkController::class, 'index'])->name('siswa');
Route::get('/tambahdata', [UkkController::class, 'tambahdata'])->name('tambahdata');
Route::post('/insertdata', [UkkController::class, 'insertdata'])->name('insertdata');

Route::get('/edit/{id}', [UkkController::class, 'editdata'])->name('editdata');
Route::post('/updatedata/{id}', [UkkController::class, 'updatedata'])->name('updatedata');
Route::get('/delete/{id}', [UkkController::class, 'delete'])->name('delete');
