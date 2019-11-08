<?php

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
})->name('welcome');

Route::get('/contacto',function () {
	return view('contacto');
})->name("contacto");

Route::get('/form',function(){
	return view('formularioValidacion');
})->name("validacion");

Route::get('/form2',function(){
	return view('nuevoFormulario');
})->name("validacion2");

Route::get('/blog/{id}', function($id){
	return view('blog',['id'=>$id]);
})->name('blog');

Route::get('/blog1/{id}/{nombre}', function($id,$nombre){
	return view('blog1',['id'=>$id,'nombre'=>$nombre]);
})->where(['id'=>'[0-9]+','nombre'=>'[a-zA-Z]+'])->name('blog1');

Route::get('/saludo','SaludoController@saludo')->name('saludo');
Route::get('/saludo/{nombre}','SaludoController@saludo1')->name('saludo1');
Route::get('/saludo/{color}/{nombre?}','SaludoController@saludoColor')->name('saludoColor');
Route::post('/validacion','SaludoController@store')->name('store');
Route::post('/validar','SaludoController@store2')->name('store2');


