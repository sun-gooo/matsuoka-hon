<?php

use App\Http\Controllers\UsersController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

/* ユーザ管理 */
Route::get('/users', function () {
    return view('users');
})->middleware(['auth'])->name('users');

// Route::get('test',[UsersController::class, 'test'])->middleware(['auth'])->name('users.test');

require __DIR__.'/auth.php';
