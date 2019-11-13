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
    return view('/Home/inicio');
});

//Route::view('prueba','prueba');

//Usuario
Route::get('/usuarios/login', 'PagesController@Usuario');
Route::post('/usuario/VerificarLogin', 'UserController@Usuario');

Route::get('/usuario/CuposDisponibles', 'PagesController@CuposDisponibles');

Route::get('/usuario/NuevoVehiculo', 'PagesController@NuevoVehiculo');
Route::post('/usuario/InsertarNuevoVehiculo', 'DatabaseController@NuevoVehiculo');

Route::get('/usuario/BuscarVehiculo', 'PagesController@BuscarVehiculo');
Route::post('/usuario/ComprobarVehiculo', 'DatabaseController@BuscarVehiculo');
Route::post('/usuario/EliminarVehiculo', 'DatabaseController@EliminarVehiculo');

Route::get('/usuario/ListarVehiculos', 'PagesController@ListarVehiculos');

Route::get('/usuario/logout', 'UserSession@UsuarioLogout');


//Operario
Route::get('/operarios/login', 'PagesController@Operario');
Route::post('/operario/VerificarLogin', 'UserController@Operario');

Route::get('/operario/RegistroNovedad','PagesController@RegistroNovedad');
Route::post('/operario/RegistrarNovedad', 'DatabaseController@RegistrarNovedad');
Route::get('/operario/RegistroVisitante', 'PagesController@RegistroVisitante');
Route::post('operario/RegistrarVisitante', 'DatabaseController@RegistrarNovedad');

Route::get('/operario/ConsultarVehiculo', 'PagesController@ConsultaVehiculo');
Route::post('/operario/ConsultarVehiculoR', 'PagesController@ConsultaVehiculoR');

Route::get('/operario/ConsultarIngreso', 'PagesController@ConsultaIngreso');
Route::post('/operario/ConsultarIngresos', 'PagesController@ConsultarIngresos');


Route::get('/operario/logout', 'UserSession@OperarioLogout');

//Administrador
Route::post('/administrador/VerificarLogin', 'UserController@Administrador');

Route::get('/administrador/agregarUsuario', 'PagesController@AgregarUsuario');
Route::post('/administrador/AgregarUsuario', 'DatabaseController@AgregarUsuario');

Route::get('/administrador/BuscarUsuario', 'PagesController@BuscarUsuario');
Route::post('/administrador/ComprobarUsuario', 'DatabaseController@BuscarUsuario');
Route::post('/administrador/ModificarUsuario', 'DatabaseController@ModificarUsuario');

Route::get('/administrador/agregarOperario', 'PagesController@AgregarOperario');
Route::post('/administrador/AgregarOperario', 'DatabaseController@AgregarOperario');

Route::get('/administrador/BuscarOperario', 'PagesController@BuscarOperario');
Route::post('/administrador/ComprobarOperario', 'DatabaseController@BuscarOperario');
Route::post('/administrador/ModificarOperario', 'DatabaseController@ModificarOperario');

Route::get('/administrador/listarOperario', 'PagesController@ListarOperario');


Route::get('/administrador/logout', 'UserSession@OperarioLogout');
