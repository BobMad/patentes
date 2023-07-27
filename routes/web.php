<?php
declare(strict_types=1);

use App\Http\Controllers\AntecedentesInvencaoController;
use App\Http\Controllers\AnterioridadeReferenciasController;
use App\Http\Controllers\DatasEventoController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\InformacaoInventoController;
use App\Http\Controllers\InventorController;
use App\Http\Controllers\InvestimentoPesquisaController;
use App\Http\Controllers\ObjetoPIController;
use App\Http\Controllers\RepresentanteController;
use App\Http\Controllers\TitutlarController;
use App\Http\Controllers\TransferenciaTecnologiaController;
use App\Models\InformacaoInvento;
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

Route::resource('objetoPiS/{objeto}/titulares', TitutlarController::class);
Route::resource('titulares/{titular}/enderecos', EnderecoController::class);
Route::resource('objetoPiS/{objeto}/inventores', InventorController::class);
Route::resource('inventores/{inventor}/enderecos', EnderecoController::class);
Route::resource('objetoPiS/{objeto}/representantes', RepresentanteController::class)->only('create', 'edit', 'store', 'update');
Route::resource('objetoPIs', ObjetoPIController::class);
Route::resource('objetoPiS/{objeto}/inventoInformacoes', InformacaoInventoController::class);
Route::resource('objetoPiS/{objeto}/antecedentesInvencao', AntecedentesInvencaoController::class);
Route::resource('objetoPiS/{objeto}/dataEventos', DatasEventoController::class);
Route::resource('objetoPiS/{objeto}/anterioridadeReferencias', AnterioridadeReferenciasController::class);
Route::resource('objetoPiS/{objeto}/investimentoPesquisas', InvestimentoPesquisaController::class);
Route::resource('objetoPiS/{objeto}/transferenciaTecnologias', TransferenciaTecnologiaController::class);

