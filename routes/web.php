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
});

Auth::routes();


Route::get('/','nuevoController@inde');
//Route::get('/uno','nuevoController@uno');
//Route::get('/dos','nuevocontroller@dos');
Route::get('/tres','nuevoController@tres');
//Route::get('/cuatro','nuevocontroller@cuatro');

Route::resource('registro','RgistroController');

Route::resource('menu','MenuController');

Route::resource('pedir','PedidoController');

Route::resource('index','PedidoController');


//Route::resource('inde','usuarioController');

//Route::post('usuario','usuarioController@store');

//Route::get('/home', 'HomeController@index')->name('home');


//Route::get('/redire','socialController');
//Route::get('/callback','socialController');