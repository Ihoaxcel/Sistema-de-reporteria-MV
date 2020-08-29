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

/*Route::get('/', function () {
    //return view('page.home');
    return view('welcome');
});*/

Route::get("/",'MisControlles@inicio');

Route::get("/reporte",'MisControlles@reporte');

Route::get("/encabezado",'MisControlles@encabezado');

Route::get("/menufinal",'MisControlles@menufinal');

Route::get("/prueba",'MisControlles@prueba');



/*RUTAS DE LOS CAPITULOS PARA RADAR2*/
Route::get("/financiera",'MisControlles@financiera');

Route::get("/economica",'MisControlles@economica');

Route::get("/inclusion",'MisControlles@inclusion');

Route::get("/desempenio",'MisControlles@desempenio');

Route::get("/mercado",'MisControlles@mercado');