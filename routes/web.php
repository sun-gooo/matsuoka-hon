<?php

use App\Http\Controllers\BuildingsController;
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

/* 建物管理 */
Route::get('/buildings', function () {
    return view('buildings');
})->middleware(['auth'])->name('buildings');
Route::get('/buildings/create',[BuildingsController::class, 'create'])->middleware(['auth'])->name("buildings.create");

// 建物検索
// Route::get('/buildings/search',[BuildingsController::class, 'search'])
//      ->middleware(['auth'])
//      ->name('buildings.search');;


/* キャンペーン管理 */
Route::get('/shops', function () {
    return view('shops');
})->middleware(['auth'])->name('shops');

/* ユーザ管理 */
Route::get('/users', function () {
    return view('users');
})->middleware(['auth'])->name('users');

require __DIR__.'/auth.php';
