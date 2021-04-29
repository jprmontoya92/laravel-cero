<?php

use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
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

Route::get('/', HomeController::class)->name('home');

/* Route::get('cursos',[CursoController::class,'index'])->name('cursos.index');
Route::get('cursos/create',[CursoController::class,'create'])->name('cursos.create');
Route::post('cursos',[CursoController::class,'store'])->name('cursos.store');
Route::get('cursos/{curso}',[CursoController::class,'show'])->name('cursos.show');
Route::get('cursos/{curso}/edit',[CursoController::class,'edit'])->name('cursos.edit');
Route::put('cursos/{curso}',[CursoController::class,'update'])->name('cursos.update');
Route::delete('cursos/{curso}',[CursoController::class,'destroy'])->name('curso.destroy');
 */

 //es importante tener en cuenta la convencion, ya que el metodo resource lo que hace es tomar el parametro cursos y lo define como url identificativa
 //y para las url que permiten el ingreso de parametros este los identifica con la palabra singular de la misma y para defenir el nombre de cada url 
 //laravel tomas toma la url identificativa cursos + los metodos de CursoController
 Route::resource('cursos', CursoController::class);

 // y para modificar los nombres en ingles que aparecen en las url, debemos indicarlo en el AppServiceProviders

 //esta forma solo se utiliza para mostrar contenido estatico.
 Route::view('nosotros', 'nosotros')->name('nosotros');

 Route::get('contactanos',[ContactanosController::class, 'index'])->name('contactanos.index');

 Route::post('contactanos',[ContactanosController::class,'store'])->name('contactanos.store');
