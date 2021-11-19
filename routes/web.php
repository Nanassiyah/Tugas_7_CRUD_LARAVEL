<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TblMhsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa',[TblMhsController::class, 'index'])->name('mahasiswa');

Route::get('/tambahmahasiswa',[TblMhsController::class, 'tambahmahasiswa'])->name('tambahmahasiswa');

Route::post('/insertdata',[TblMhsController::class, 'insertdata'])->name('insertdata');

Route::get('/tampilkandata/{id}',[TblMhsController::class, 'tampilkandata'])->name('tampilkandata');

Route::post('/updatedata/{id}',[TblMhsController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}',[TblMhsController::class, 'delete'])->name('delete');

