<?php
declare(strict_types=1);

use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\InventorController;
use App\Http\Controllers\TitutlarController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::resource('titulares', TitutlarController::class);
Route::resource('titulares/{titular}/enderecos', EnderecoController::class);
Route::resource('inventores', InventorController::class);
Route::resource('inventores/{inventor}/enderecos', EnderecoController::class);
