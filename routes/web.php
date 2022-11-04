<?php

use App\Http\Controllers\controladorGitHub;
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

Route::get('/',[controladorGitHub::class,'showTabla'])->name('apodoTabla');  
Route::get('registrar',[controladorGitHub::class,'showFormulario'])->name('apodoFormulario');


Route::post('guardarPelicula',[controladorGitHub::class,'confirmarFormulario']);
