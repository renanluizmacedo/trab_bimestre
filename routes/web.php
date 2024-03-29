<?php

use Illuminate\Support\Facades\Route;
use phpDocumentor\Reflection\Types\Resource_;
use App\Http\Controllers\CursoController;

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

Route::get('/', function () { return view('index'); })->name('index');


Route::resource('/eixos', 'EixoController');
Route::resource('/cursos', 'CursoController');
Route::resource('/disciplinas', 'DisciplinaController');
Route::resource('/professores', 'ProfessorController');
Route::resource('/docencias', 'DocenciaController');


