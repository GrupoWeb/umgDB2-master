<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use Illuminate\Http\Request;

// Route::get('/', function () {
//     return view('master');
// });

//Rutas Predeterminadas del Menu

Route::get('/','MenuController@index');
Route::get('/rDatos','MenuController@rDato');
Route::get('/mDatos','MenuController@mDato');
Route::get('/dDatos','MenuController@dDato');
Route::get('/cDatos','MenuController@cDato');
Route::get('/oDatos','MenuController@oDato');

//---------------------------------------------------


Route::any('/DDL',function(Request $request){
  $sql = $request->input('query');
  try {
    if(strpos(strtolower($sql), 'create')!== false){
      $operacion = DB::statement($sql);
      return "intruccion realizada con exito";
    }else if(strpos(strtolower($sql), 'drop')!== false){
      $operacion = DB::statement($sql);
      return "intruccion realizada con exito";
    }else if(strpos(strtolower($sql), 'alter')!== false){
      $operacion = DB::statement($sql);
      return "intruccion realizada con exito";
    }else{
      return "dato error";
    }
  } catch (Exception $e) {
    return $e->errorInfo[2];
  }
 });

//DML

Route::get('/operation', 'DMLController@getOperation');
Route::get('/infotablas', 'DMLController@getTables');


Route::get('recuperacion/get/databases', 'RecuperacionController@getDatabases');
Route::get('recuperacion/get/tables/{table_schema}', 'RecuperacionController@getTables');
Route::get('recuperacion/database/{table_schema}/table/{table_name}/get/columns/', 'RecuperacionController@getColumns');
Route::post('recuperacion/ejecutar-sql', 'RecuperacionController@ejecutarSQL');


//DCL START
//Dcl
Route::get('DclController/get/objets/{database}', 'DclController@getObjets');
Route::get('DclController/get/databases', 'DclController@getDatabases');
Route::get('DclController/get/users', 'DclController@getUsers');
Route::post('Dcl', 'DclController@execdcl');
//DCL END
