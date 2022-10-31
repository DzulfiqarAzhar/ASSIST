<?php

use App\Http\Controllers\LoginController;
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

/* Route::get('/', function () {
    return redirect()->route('login.show');
}); */

Route::get('/login', [LoginController::class, 'ShowLogin'])->name('login.show');
Route::post('/login', [LoginController::class, 'ProcessLogin'])->name('login.process');
