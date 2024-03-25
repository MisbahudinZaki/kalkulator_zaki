<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\inputcontroller;

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

Route::get('home', [inputcontroller::class, 'index'])->name('home');
Route::get('/kalkulator', [inputcontroller::class, 'kalkulator'])->name('kalkulator');
Route::post('count', [inputcontroller::class, 'input'])->name('count');
Route::get('/kalkulatorjs', [inputcontroller::class, 'manual'])->name('kalkulatorjs');
