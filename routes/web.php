<?php

use App\Http\Controllers\CursosController;
use Illuminate\Support\Facades\Route;

//agregamos los controladores
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\EstudianteController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth']],function(){
 Route::resource('roles',RolController::class);
 Route::resource('usuarios',UsuarioController::class);
 Route::resource('estudiante',EstudianteController::class);
 Route::resource('docente',DocenteController::class);
 Route::resource('cursos',CursosController::class);
});

Route::get('/docente.editar', function(){
    return view('docente');
})->name('docente');

Route::get('/estudiante.editar', function(){
    return view('estudiante');
})->name('estudiante');








Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


