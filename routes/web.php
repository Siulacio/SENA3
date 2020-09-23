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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('auth.login');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//ruta de inicio del sistema
Route::get('/inicio', function () {
    return view('app.dashboard');
});

Route::get('/unauthorized', function () {
    return view('errors.403');
});

Route::group(['middleware' => ['adminUser']], function(){
    //rutas usuarios
    Route::get('/usuarios/listado','UsuariosController@index')->middleware('auth');
    Route::get('/usuarios/nuevo','UsuariosController@create')->middleware('auth');
    Route::post('/usuarios/guardar','UsuariosController@store')->middleware('auth');
    Route::get('/usuarios/estado/{id}','UsuariosController@estados')->middleware('auth');
    Route::get('/usuarios/editar/{id}','UsuariosController@edit')->middleware('auth');
    Route::post('/usuarios/actualizar','UsuariosController@update')->middleware('auth');    
});


//rutas programas
    Route::get('/programas/listado','ProgramasController@index')->middleware('auth');
    Route::get('/programas/nuevo','ProgramasController@create')->middleware('auth');
    Route::post('/programas/guardar','ProgramasController@store')->middleware('auth');
    Route::get('/programas/estado/{id}','ProgramasController@estados')->middleware('auth');
    Route::get('/programas/editar/{id}','ProgramasController@edit')->middleware('auth');
    Route::post('/programas/actualizar','ProgramasController@update')->middleware('auth');    

// Route::get('/usuarios/nuevo', function () {
//     return view('app.usuarios.nuevo_usuario');
// });
