<?php

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
//     return view('frontend.index');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\frontend\frontendController::class, 'index']);
Route::get('/aboutus', [App\Http\Controllers\frontend\frontendController::class, 'aboutus'])->name('aboutus');
Route::get('/services', [App\Http\Controllers\frontend\frontendController::class, 'services'])->name('services');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

