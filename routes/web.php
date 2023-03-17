<?php

use App\Http\Controllers\AmbientesController;
use App\Http\Controllers\AreaTematicaController;
use App\Http\Controllers\CompetenciaController;
use App\Http\Controllers\FichasController;
use App\Http\Controllers\InstructoresController;
use App\Http\Controllers\ProgramasController;
use App\Http\Controllers\RedTematicaController;
use App\Http\Controllers\ResultadosController;
use App\Http\Controllers\SedesController;
use App\Http\Controllers\SemaforosController;
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
/* Rutas Welcome - Laravel */
Route::get('/', function () {
    return view('welcome');
});

/* Rutas Pagina Principal - CHIFD */
Route::get('/inicio', function () {
    return view('Pags_principales.index');
});

/* Ruta Pagina Principal 2 - CHIFD */
    
Route::get('/home2', function () {
    return view('Slider.slider_h');
});

/* Ruta Pagina Principal 2 - CHIFD */
    
Route::get('slider_h', function () {
    return view('Slider.slider_h');
});

/*Rutas Formulario - Area*/
Route::controller(AreaTematicaController::class)->group(function(){

    Route::get('Area', 'index');
    
    Route::match(['get','post'],'Area/crear', 'create')->name('crear_area');
    
    Route::match(['get','post'],'Area/guardar', 'store')->name('guardar_area');

    Route::match(['get','post'],'Area_a/actualizar', 'update')->name('actua_area');
    });

/*Rutas Formulario - Red*/
Route::controller(RedTematicaController::class)->group(function(){

    Route::get('Red', 'index');
    
    Route::match(['get','post'],'Red/crear', 'create')->name('crear_red');
    
    Route::match(['get','post'],'Red/guardar', 'store')->name('guardar_red');

    Route::match(['get','post'],'Red_a/actualizar', 'update')->name('actua_red');
    });

/*Rutas Formulario - Programa*/
Route::controller(ProgramasController::class)->group(function(){

    Route::get('Programa', 'index');
    
    Route::match(['get','post'],'Programa/crear', 'create')->name('crear_programa');
    
    Route::match(['get','post'],'Programa/guardar', 'store')->name('guardar_programa');
    
    Route::match(['get','post'],'Programa_a/actualizar', 'update')->name('actua_programa');
    });

/*Rutas Formulario - Fichas*/
Route::controller(FichasController::class)->group(function(){

    Route::get('Ficha', 'index');
    
    Route::match(['get','post'],'Ficha/crear', 'create')->name('crear_ficha');
    
    Route::match(['get','post'],'Ficha/guardar', 'store')->name('guardar_ficha');
    
    Route::match(['get','post'],'Ficha_a/actualizar', 'update')->name('actua_ficha');
    });

/*Rutas Formulario - Competencias*/
Route::controller(CompetenciaController::class)->group(function(){

    Route::get('Competencia', 'index');
    
    Route::match(['get','post'],'Competencia/crear', 'create')->name('crear_competencia');
    
    Route::match(['get','post'],'Competencia/guardar', 'store')->name('guardar_competencia');

    Route::match(['get','post'],'Competencia_a/actualizar', 'update')->name('actua_competencia');
    });

/*Rutas Formulario - Sedes*/
Route::controller(SedesController::class)->group(function(){

    Route::get('Sede', 'index');
    
    Route::match(['get','post'],'Sede/crear', 'create')->name('crear_sede');
    
    Route::match(['get','post'],'Sede/guardar', 'store')->name('guardar_sede');

    Route::match(['get','post'],'Sede_a/actualizar', 'update')->name('actua_sede');
    });

/*Rutas Formulario - Ambiente*/
Route::controller(AmbientesController::class)->group(function(){

Route::get('Ambiente', 'index');

Route::match(['get','post'],'Ambiente/crear', 'create')->name('crear_ambiente');

Route::match(['get','post'],'Ambiente/guardar', 'store')->name('guardar_ambiente');

Route::match(['get','post'],'Ambiente_a/actualizar', 'update')->name('actua_ambiente');
});

/*Rutas Formulario - Instructores*/
Route::controller(InstructoresController::class)->group(function(){

Route::get('Instructor', 'index');

Route::match(['get','post'],'Instructor/crear', 'create')->name('crear_instructor');

Route::match(['get','post'],'Instructor/guardar', 'store')->name('guardar_instructor');

Route::match(['get','post'],'Instructor_a/actualizar', 'update')->name('actua_instructor');
});

/*Rutas Formulario - Resultados*/
Route::controller(ResultadosController::class)->group(function(){

    Route::get('Resultado', 'index');
    
    Route::match(['get','post'],'Resultado/crear', 'create')->name('crear_resultado');
    
    Route::match(['get','post'],'Resultado/guardar', 'store')->name('guardar_resultado');
    });

/*Rutas Formulario - Semaforos*/
Route::controller(SemaforosController::class)->group(function(){

    Route::get('Semaforo', 'index');
    
    Route::match(['get','post'],'Semaforo/crear', 'create')->name('crear_semaforo');
    
    Route::match(['get','post'],'Semaforo/guardar', 'store')->name('guardar_semaforo');
    });

/*Rutas Formulario - Calendarios*/

/*Ruta Login - CHIFD*/

//Route::get('login', [LoginController::class, 'login'])->name('Login');
//Route::post('login/verificador', [LoginController::class, 'loginverificador'])->name('login.verificador');
Route::get('/login', function(){
    return view ('auth.login');
})->name('login');

Route::post('login/verificador', [LoginController::class, 'loginverificador'])->name('login.verificador');

Route::middleware(['auth'])->group(function(){
    Route::get('/index2',function(){
        return view('index2');
    })->name('index2');
});

/* Ruta Gestion de los Calendarios*/
Route::get('/calendario', [\App\Http\Controllers\CalendariosController::class,'index']);
