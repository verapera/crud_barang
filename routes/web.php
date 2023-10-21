<?php

use App\Http\Controllers\BarangController;
use App\Models\barang;
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
//     return view('welcome');
// });
Route::get('/', [BarangController::class,'index']);

Route::post('/barang', [BarangController::class, 'storeBarang']);

Route::put('/barang', [BarangController::class,'editBarang']);

Route::get('/barang/{id}', [BarangController::class, 'editPage']);

Route::delete('/barang/{id}', [BarangController::class, 'deleteBarang']);