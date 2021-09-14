<?php

use app\Http\Controllers\HomeController;
use app\Http\Controllers\ProdiController;
use app\Http\Controllers\SaranaController;
use app\Http\Controllers\NewsController;
use app\Http\Controllers\CommentController;
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

Route::get('/home', [HomeController::class,'home']);

Route::prefix('prodi')->group(function () {
    Route::get('/mi', [ProdiController::class,'prodi']);
    Route::get('/ti', [ProdiController::class,'prodi']);
});

Route::get('/news/{id}', [NewsController::class,'news']);

Route::prefix('sarana')->group(function () {
    Route::get('/kantor', [SaranaController::class,'sarana']);
    Route::get('/lab', [SaranaController::class,'sarana']);
    Route::get('/kelas', [SaranaController::class,'sarana']);
    Route::get('/lainnya', [SaranaController::class,'sarana']);
});

Route:: get('/about/{about?}', function ($what=null){
    return 'Menampilkan about us <br>'.$about;
})


Route::get('/comment/{name}', [CommentController::class,'comment'.$name]);