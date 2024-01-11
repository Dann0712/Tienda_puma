<?php

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
    return view('login');
});


// routes/web.php

use App\Http\Controllers\NavegacionController;

Route::get('/inicio', [NavegacionController::class, 'inicio'])->name('inicio');
Route::get('/producto', [NavegacionController::class, 'producto'])->name('producto');
Route::get('/cliente', [NavegacionController::class, 'cliente'])->name('cliente');
Route::get('/vendedor', [NavegacionController::class, 'vendedor'])->name('vendedor');
Route::get('/venta', [NavegacionController::class, 'venta'])->name('venta');
Route::get('/detventa', [NavegacionController::class, 'detventa'])->name('detventa');
Route::get('/factura', [NavegacionController::class, 'factura'])->name('factura');
Route::get('/nota', [NavegacionController::class, 'nota'])->name('nota');





use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/password-reset', [AuthController::class, 'showPasswordResetForm'])->name('password.request');
Route::post('/password-reset', [AuthController::class, 'sendPasswordResetLink']);
