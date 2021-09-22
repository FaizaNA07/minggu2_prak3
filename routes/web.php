<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\SaranaController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CommentController;
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

Route::get('/home', [HomeController::class, 'home']);

Route::prefix('prodi')->group(function () {
    Route::get('/mi', [ProdiController::class, 'prodi']);
    Route::get('/ti', [ProdiController::class, 'prodi']);
});

Route::get('/news/{id}', [NewsController::class,'news']);

Route::prefix('sarana')->group(function () {
    Route::get('/kantor', [SaranaController::class,'sarana']);
    Route::get('/lab', [SaranaController::class,'sarana']);
    Route::get('/kelas', [SaranaController::class,'sarana']);
    Route::get('/lainnya', [SaranaController::class,'sarana']);
});

Route::get('/about', [HomeController::class, 'about']);

Route::get('/comment/{id}/{pesan}', [NewsController::class,'comment']);