<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\CursosController;
use Illuminate\Support\Facades\Route;
//agregamos los controladores
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\PublicacionController;
use App\Http\Controllers\TestController;
use App\Http\Livewire\MostrarCursos;
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

//RUTA DE LOS CONTROLADORES
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth']],function(){
 Route::resource('roles',RolController::class)->middleware('can:editar-rol');
 Route::resource('usuarios',UsuarioController::class)->middleware('can:editar-rol');
 Route::resource('estudiante',EstudianteController::class)->middleware('can:editar-rol');
 Route::resource('docente',DocenteController::class)->middleware('can:editar-rol');
 Route::controller(DocenteController::class)->group(function(){
    Route::get('/dashboard/docente','Docente')->middleware('can:mostrar.publicacion')->name('docente.index');
    Route::get('/mostrar/cursos/lectura','cursosDocente')->middleware('can:mostrar.publicacion')->name('docente.cursos');
    Route::get('/mostrar/cursos/escritura','cursosDocenteEscritura')->middleware('can:mostrar.publicacion')->name('docente.cursos.escritura');
 });
 Route::controller(PublicacionController::class)->group(function(){
    Route::post('publicacion/store', 'store')->middleware('can:mostrar.publicacion')->name('publicacion.store');
    Route::delete('publicacion/eliminar','destroy')->middleware('can:mostrar.publicacion')->name('publicacion.destroy');
    Route::get('/crear/publicacion','crearPublicacion')->middleware('can:mostrar.publicacion')->name('crear.publicacion');
    Route::get('/mostrar/publicacion','mostrarPublicacion')->middleware('can:mostrar.publicacion')->name('mostrar.publicacion');

 });
 Route::resource('cursos',CursosController::class);
 Route::controller(TestController::class)->group(function(){
    Route::get('test','showTest')->middleware('can:dashboard')->name('show.test');
    Route::post('test/store','store')->middleware('can:dashboard')->name('test');
 });
 Route::get('/admin',[AdminController::class,'index'])->middleware('can:editar-rol')->name('admin.home');
});

//RUTA DE DOCENTE.EDITAR
Route::get('/docente.editar', function(){
    return view('docente');
})->name('docente');

//RUTA DE ESTUDIANTE.EDITAR
Route::get('/estudiante.editar', function(){
    return view('estudiante');
})->name('estudiante');

//RUTA DE CONTACTANOS
Route::post('contactanos', [ContactanosController::class,'store'])->name('contactanos.index');

//RUTA DE VERIFICAR
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [HomeController::class,'dashboard'])->middleware('can:dashboard')->name('dashboard');


