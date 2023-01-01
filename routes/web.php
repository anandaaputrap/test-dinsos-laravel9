<?php

use App\Http\Controllers\BelanjaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PendapatanController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/admin', function () {
//     return view('admin/home');
// });

Route::controller(LoginController::class)->group(function(){
    Route::get('/', 'index')->name('login');
    Route::post('login/proses', 'proses');
    Route::get('logout', 'logout')->name('logout');
});

Route::group(['middleware' => ['auth']],function(){
    Route::group(['middleware' => ['cekUserLogin:1']],function(){
        Route::resource('home', HomeController::class);
        Route::resource('pendapatan', PendapatanController::class);
        Route::get('pendapatan/list', [PendapatanController::class, 'getPendapatan'])->name('pendapatan.list');
        Route::resource('belanja', BelanjaController::class);
    });
});
