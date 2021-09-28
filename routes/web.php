<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AdvertisementController;
use App\Models\Service;
use GuzzleHttp\Middleware;
use App\Http\Middleware\CheckAdvertisementCreated;
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

Route::get('/', [HomeController::class, 'index']);

//TEST
Route::get('/home', [HomeController::class, 'index']);

Route::get('/kinesiologa/{id}', [HomeController::class, 'kinesiologaShow']);

Route::get('/anuncio', [HomeController::class, 'anuncio']);



Auth::routes();

// Route::resource('/admin/files', FileController::class)->names('admin.files');

Route::resource('/services', ServiceController::class);
Route::resource('/advertisements', AdvertisementController::class);
Route::get('/user/index/{slug}', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post('/storeVideo', [FileController::class, 'storeVideo'])->name('admin.files.storevideo');
    Route::resource('files', FileController::class)->names('admin.files');
});

Route::middleware(['auth', CheckAdvertisementCreated::class])->group(function () {
    // Route::get('/advertisements/create',  [AdvertisementController::class, 'create'])->name('advertisements.create');
});

// Route::middleware(['auth'])->group(function () {
//     Route::get('/user/panel', [App\Http\Controllers\UserController::class, 'controlPanel'])->name('user.panel');
// });

// Route::resource('/admin/files','Admin\FileController');