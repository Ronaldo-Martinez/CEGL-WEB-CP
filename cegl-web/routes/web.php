<?php

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

Route::get('/', 'inicioController@index')->name('inicio');
Route::get('/oferta-academica', function () {
    return view('oferta');
})->name('oferta');
Route::get('/mision-vision', 'inicioController@mision')->name('mision');
Route::get('/servicios', 'inicioController@servicios')->name('servicios');
Route::get('/descargas', 'inicioController@descargas')->name('descargas');
Route::get('/nuevo-ingreso', 'inicioController@nuevoIngreso')->name('nuevoIngreso');

Route::get('/foo', function () {
    Artisan::call('storage:link');
});
Route::get('/fooa', function () {
    Artisan::call('make:auth');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home1');
Route::get('/noticias', 'noticiaController@conNoticias')->name('noticias');
Route::post('/noticia-guardar', 'noticiaController@store')->name('guardarNoticia');
Route::post('/noticia-eliminar', 'noticiaController@destroy')->name('eliminarNoticia');
Route::post('/noticia-editar', 'noticiaController@update')->name('editarNoticia');
Route::post('/mision-editar', 'noticiaController@updateMision')->name('editarMision');

//Archivos
Route::post('/descargas-guardar', 'archivoController@store')->name('guardarDescarga');
Route::post('/descargas-editar', 'archivoController@update')->name('editarDescarga');
Route::post('/descargas-eliminar', 'archivoController@destroy')->name('eliminarDescarga');

//Servicios
Route::post('/servicios-guardar', 'HomeController@storeServicio')->name('guardarServicio');
Route::post('/servicios-editar', 'HomeController@updateServicio')->name('editarServicio');
Route::post('/servicios-eliminar', 'HomeController@destroyServicio')->name('eliminarServicio');

Route::get('/configuracion-servicios', 'HomeController@servicios')->name('conServicios');
Route::get('/configuracion-descargas', 'HomeController@descargas')->name('conDescargas');


