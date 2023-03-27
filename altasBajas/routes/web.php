<?php

use App\Http\Controllers\AltasBajas;
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

Route::get('/', [AltasBajas::class, 'index']);
Route::get('/create', [AltasBajas::class, 'create']);
Route::get('/tabla', [AltasBajas::class, 'tabla']);
Route::post('/store', [AltasBajas::class, 'store']);
Route::get('/edit/{id}' , [AltasBajas::class, 'edit']) ->name('edit');
Route::put('/update/{id}' , [AltasBajas::class, 'update']) ->name('update');
Route::get('/show/{id}', [AltasBajas::class, 'show']) ->name('show');
Route::delete('/destroy/{id}', [AltasBajas::class, 'destroy']) ->name('destroy');