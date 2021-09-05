<?php

use App\Http\Controllers\AnnounceController;
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

Route::get('/create', [AnnounceController::class, 'create'])->name('announce.create');
Route::post('/store', [AnnounceController::class, 'store'])->name('announce.store');

require __DIR__.'/auth.php';
