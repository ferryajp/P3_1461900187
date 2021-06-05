<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller0187;
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
Route::get('barang0187', [Controller0187::class,'barang']);
Route::get('pelanggan0187', [Controller0187::class,'pelanggan']);
Route::get('pelanggan0187/cari', [Controller0187::class,'cari']);
Route::get('transaksi0187', [Controller0187::class,'transaksi']);
Route::get('home0187', [Controller0187::class,'home']);
