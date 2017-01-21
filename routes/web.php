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

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/admin', 'HomeController@index');

    //Empleados
    Route::resource('home/empleado', 'EmpleadoController');
    Route::get('home/empleadosreporte/{tipo}', 'EmpleadoController@generaReporte');
    
    //Personal
    Route::resource('home/personal', 'PersonalController');
    Route::get('home/personalreporte/{tipo}', 'PersonalController@generaReporte');
    //Route::get('home/descargareporte', 'PersonalController@descargaReporte');

    //Automóviles
    Route::resource('home/automovil', 'AutomovilController');
    Route::get('home/autosreporte/{tipo}', 'AutomovilController@generaReporte');
    
    Route::get('home/ordenes', 'HomeController@ordenes');
    Route::get('home/almacen', 'HomeController@almacen');
});

//Route::get('/proyecto', 'InicioController@index'); //View Proyecto Telmex