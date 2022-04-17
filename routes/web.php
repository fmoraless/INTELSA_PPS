<?php

use GuzzleHttp\Middleware;
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
    return view('auth/login');
   //return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/compras', [App\Http\Controllers\HomeController::class, 'compras'])->name('compras');
/*Route::get('/purchases/create', [App\Http\Controllers\PurchaseController::class, 'create'])->name('purchase.create');
Route::get('/purchases', [App\Http\Controllers\PurchaseController::class, 'index'])->name('purchase.index');*/
Route::resource('/compras',App\Http\Controllers\PurchaseController::class)->names('purchases')->except('edit', 'update', 'destroy');

Route::get('/ventas', [App\Http\Controllers\HomeController::class, 'ventas'])->name('ventas');

Route::get('/ncliente', [App\Http\Controllers\HomeController::class, 'ncliente'])->name('ncliente');

Route::get('/ncategoria', [App\Http\Controllers\HomeController::class, 'ncategoria'])->name('ncategoria');

Route::get('/nproveedor', [App\Http\Controllers\HomeController::class, 'nproveedor'])->name('nproveedor');

Route::get('/nproducto', [App\Http\Controllers\HomeController::class, 'nproducto'])->name('nproducto');

Route::get('/pro_almac', [App\Http\Controllers\HomeController::class, 'pro_almac'])->name('pro_almac');

Route::get('/reportes', [App\Http\Controllers\HomeController::class, 'reportes'])->name('reportes');

Route::get('/configuracion', [App\Http\Controllers\HomeController::class, 'configuracion'])->name('configuracion');

//Route::get('/categoria.index', [App\Http\Controllers\HomeController::class, 'categoria'])->name('categoria');

Route::resource('categorias', App\Http\Controllers\CategoriaController::class)->middleware('auth');

Route::resource('productos', App\Http\Controllers\ProductoController::class)->middleware('auth');

//Route::resource('ventas', App\Http\Controllers\VentaController::class)->middleware('auth');
Route::resource('providers', App\Http\Controllers\ProviderController::class)->names('providers');
