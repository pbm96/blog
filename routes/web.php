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

Route::get('/home', array('as'=>'home','uses'=>'HomeController@index'))->name('home');


Route::get('/perfil-superadmin/{id}', ['as' => 'perfil_superadmin', 'uses' => 'SuperadminController@panel']);

Route::get('crear-post', ['as' => 'crear_post', 'uses' => 'SuperadminController@crear_post']);
Route::post('guardar-post', ['as' => 'guardar_post', 'uses' => 'SuperadminController@guardar_post']);



