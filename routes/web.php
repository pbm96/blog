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


Auth::routes();
Route::get('/', 'HomeController@index')->name('home');

//Route::get('/home', array('as'=>'home','uses'=>'HomeController@index'))->name('home');


Route::get('/perfil-superadmin/{id}', ['as' => 'perfil_superadmin', 'uses' => 'SuperadminController@panel']);

Route::get('crear-post', ['as' => 'crear_post', 'uses' => 'SuperadminController@crear_post']);
Route::post('guardar-post', ['as' => 'guardar_post', 'uses' => 'SuperadminController@guardar_post']);
Route::get('modificar-post-vista/{id}', ['as' => 'modificar_post_vista', 'uses' => 'SuperadminController@modificar_post_vista']);
Route::put('modificar-post/{id}', ['as' => 'modificar_post', 'uses' => 'SuperadminController@modificar_post']);

Route::delete('eliminar-post/{id}', ['as' => 'eliminar_post', 'uses' => 'SuperadminController@modificar_post']);


Route::get('categoria/{categoria}', ['as' => 'categoria', 'uses' => 'HomeController@categoria']);

Route::get('buscar', ['as' => 'buscar', 'uses' => 'HomeController@buscar']);

Route::get('post/{categoria}/{slug}', ['as' => 'vista_post', 'uses' => 'HomeController@vista_post']);
Route::get('pintar-categorias', ['as' => 'pintar_categorias', 'uses' => 'HomeController@pintar_categorias_nav']);


// administrar categorias
Route::put('modificar-categoria/{id}', ['as' => 'editar_categoria', 'uses' => 'SuperadminController@editar_categoria']);
Route::post('añadir-categoria', ['as' => 'añadir_categoria', 'uses' => 'SuperadminController@nueva_categoria']);
Route::delete('eliminar-categoria/{id}', ['as' => 'eliminar_categoria', 'uses' => 'SuperadminController@eliminar_categoria']);


//administrar users
Route::delete('eliminar-usuario/{id}', ['as' => 'eliminar_usuario', 'uses' => 'SuperadminController@eliminar_usuario']);
Route::put('modificar-usuario/{id}', ['as' => 'editar_usuario_admin', 'uses' => 'SuperadminController@editar_user_admin']);

Route::put('editar-perfil/{id}', ['as' => 'editar_perfil', 'uses' => 'UsersController@editar_perfil']);
Route::put('editar-foto-perfil/{id}', ['as' => 'editar_foto_perfil', 'uses' => 'UsersController@editar_foto_perfil']);
Route::delete('eliminar-foto-perfil/{id}', ['as' => 'eliminar_foto_perfil', 'uses' => 'UsersController@eliminar_foto_perfil']);


Route::post('escribir-comentario', ['as' => 'escribir_comentario', 'uses' => 'ComentariosController@escribir_comentario']);
Route::delete('eliminar-comentario/{id}', ['as' => 'eliminar_comentario', 'uses' => 'ComentariosController@eliminar_comentario']);



Route::get('cookies', ['as' => 'cookies', 'uses' => 'HomeController@cookies']);
Route::get('licencia', ['as' => 'licencia', 'uses' => 'HomeController@licencia']);
Route::get('about', ['as' => 'about', 'uses' => 'HomeController@about']);
Route::get('mapa-web', ['as' => 'mapa_web', 'uses' => 'HomeController@mapa_web']);
Route::get('autor', ['as' => 'sobre_mi', 'uses' => 'HomeController@sobre_mi']);


//users normales
Route::get('mi-perfil/{id}', ['as' => 'perfil_user', 'uses' => 'UsersController@perfil']);



//Route::get('/ajax/products',['as'=>'post_ajax','uses'=>'SuperadminController@posts_ajax']);

