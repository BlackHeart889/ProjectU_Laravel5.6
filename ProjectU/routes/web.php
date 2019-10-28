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
    return view('inicio');
});

//Route::view('prueba','prueba');

//Usuario
Route::get('/usuarios/login', 'PagesController@Usuario');
Route::post('/usuario/VerificarLogin', 'UserController@Usuario');

Route::get('/usuario/CuposDisponibles', 'PagesController@CuposDisponibles');

Route::get('/usuario/NuevoVehiculo', 'PagesController@NuevoVehiculo');
Route::post('/usuario/InsertarNuevoVehiculo', 'DatabaseController@NuevoVehiculo');

Route::get('/usuario/logout', 'UserSession@UsuarioLogout');


//Operario
Route::get('/operarios/login', 'PagesController@Operario');
Route::post('/operario/VerificarLogin', 'UserController@Operario');

Route::get('/operario/RegistroNovedad','PagesController@RegistroNovedad');
Route::post('/operario/RegistrarNovedad', 'DatabaseController@RegistrarNovedad');
Route::get('/operario/RegistroVisitante', 'PagesController@RegistroVisitante');
Route::post('operario/RegistrarVisitante', 'DatabaseController@RegistrarVisitante');

Route::get('/operario/ConsultarVehiculo', 'PagesController@ConsultaVehiculo');
Route::post('/operario/ConsultarVehiculoR', 'PagesController@ConsultaVehiculoR');

Route::get('/operario/ConsultarIngreso', 'PagesController@ConsultaIngreso');



Route::get('/operario/logout', 'UserSession@OperarioLogout');