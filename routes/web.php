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

Route::get('categoria/{categoria}',['as'=>'categoria','uses'=>'HomeController@categoria']);

Route::get('buscar',['as'=>'buscar','uses'=>'HomeController@buscar']);

Route::get('{categoria}/{slug}', ['as' => 'vista_post', 'uses' => 'HomeController@vista_post']);

// administrar categorias
Route::put('modificar-categoria/{id}', ['as' => 'editar_categoria', 'uses' => 'SuperadminController@editar_categoria']);
Route::post('añadir-categoria', ['as' => 'añadir_categoria', 'uses' => 'SuperadminController@nueva_categoria']);
Route::delete('eliminar-categoria/{id}', ['as' => 'eliminar_categoria', 'uses' => 'SuperadminController@eliminar_categoria']);


//administrar users
Route::delete('eliminar-usuario/{id}', ['as' => 'eliminar_usuario', 'uses' => 'SuperadminController@eliminar_usuario']);
Route::put('modificar-usuario/{id}', ['as' => 'editar_usuario_admin', 'uses' => 'SuperadminController@editar_user_admin']);


//Route::get('/ajax/products',['as'=>'post_ajax','uses'=>'SuperadminController@posts_ajax']);

