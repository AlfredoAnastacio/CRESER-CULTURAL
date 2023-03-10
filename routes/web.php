<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\SerieController;
use App\Http\Controllers\TemplateController;

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
    return view('auth.login');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::resource('user', UserController::class);
    Route::resource('product', ProductController::class);
    Route::resource('contract', ContractController::class);
    Route::resource('serie', SerieController::class);

    //Formatos
    Route::get('formato/carta/tarjeta/creser', [TemplateController::class, 'cartaConTarjetaCreser'])->name('cartaConTarjetaCreser');
});
