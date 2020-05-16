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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('grades/{id}','HomeController@grades');
// Todas las rutas de este grupo son accesibles sólo para administradores
Route::middleware(['admin'])->group(function(){
	Route::resource('admintareas','TareaController');
});

// Creando la ruta de Post
Route::resource('posts','PostController');
// Creando la ruta de entregas
Route::resource('entrega','EntregaController');
// Para poder subir imágenes desde el editor
Route::post('ckeditor/image_upload', 'PostController@upload')->name('upload');


// Route::get('suma',function(){
// 	return 5+2;
// });

// Route::get('saludo/{id?}',function($id=null){
// 	return "Hola usuario: ".$id;
// });

// Route::get('bienvenido','EjemploController@index');