<?php

use Illuminate\Http\Request;
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
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'indexApi']);

//Servicios


Route::resource('/services', ServiceController::class);
Route::get('/services', [App\Http\Controllers\ServiceController::class, 'indexApi']);
Route::get('/services', [App\Http\Controllers\ServiceController::class, 'listServicios']);


//Advertisment

Route::get('/advertisement/create', [App\Http\Controllers\AdvertisementController::class, 'storeApi']);
Route::get('/advertisement/show/{id}', [App\Http\Controllers\AdvertisementController::class, 'showApi']);
Route::get('/advertisement/update/{id}', [App\Http\Controllers\AdvertisementController::class, 'updateApi']);

//file
Route::get('file/store',[FileController::class, 'store']);




Route::resource('/advertisements', AdvertisementController::class);
Route::get('/user/index/{slug}', [App\Http\Controllers\UserController::class, 'index']);

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post('/storeVideo', [FileController::class, 'storeVideo'])->name('admin.files.storevideo');
});

Route::middleware(['auth', CheckAdvertisementCreated::class])->group(function () {
    Route::get('/advertisements/create',  [AdvertisementController::class, 'create'])->name('advertisements.create');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/user/panel', [App\Http\Controllers\UserController::class, 'controlPanel'])->name('user.panel');
});