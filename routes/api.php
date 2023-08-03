<?php

use App\Http\Controllers\Exercicio12Controller;
use App\Http\Controllers\Exercicio1Controller;
use App\Http\Controllers\Exercicio2Controller;
use App\Http\Controllers\Exercicio3Controller;
use App\Http\Controllers\Exercicio4Controller;
use App\Http\Controllers\Exercicio5Controller;
use App\Http\Controllers\Exercicio6Controller;
use App\Http\Controllers\Exercicio7Controller;
use App\Http\Controllers\Exercicio8Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post('exercicio/um', [Exercicio1Controller::class, 'multiplicar']);

Route::post('exercicio/dois', [Exercicio2Controller::class, 'retornarMaior']);

Route::post('exercicio/tres', [Exercicio3Controller::class, 'media']);

Route::post('exercicio/quatro', [Exercicio4Controller::class, 'verficar']);

Route::post('exercicio/cinco', [Exercicio5Controller::class, 'verificacao']);

Route::post('exercicio/seis', [Exercicio6Controller::class, 'idade']);

Route::get('exercicio/sete', [Exercicio7Controller::class, 'exibirNumeros']);

Route::post('exercicio/oito', [Exercicio8Controller::class, 'tabuada']);

Route::get('exercicio/doze', [Exercicio12Controller::class, 'decrescente']);