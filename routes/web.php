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






Route::any('/operation', function (Request $request) {
  $query = $request->input('query');
  try{
    if(strpos($query, 'insert')!== false){
      $op=DB::insert($query);
      return "registro insertado correctamente";
    }else if(strpos($query, 'delete')!== false){
      $op =DB::delete($query);
      return "registro eliminado correctamente";
    }else if(strpos($query, 'update')!== false){
      $op=DB::update($query);
      return "registro actualizado correctamente";
    }
    else{
      return "operacion no admitida";
    }
  } catch(Exception $e){
    return $e->errorInfo[2];
  }

});

Route::any('/infotablas', function () {
    $op=DB::select("show tables");
    $tables=[];
    foreach ($op as $table => $value) {
      $fields=[];
      $tablename;
      foreach ($value as $key => $val) {
        $tablename = $val;
        $fields=DB::select('describe '.$val);
      }
      $op[$table]->tablename = $tablename;
      $op[$table]->fields = $fields;
    }
    return $op;
});


Route::get('recuperacion/get/databases', 'RecuperacionController@getDatabases');
Route::get('recuperacion/get/tables/{table_schema}', 'RecuperacionController@getTables');
Route::get('recuperacion/database/{table_schema}/table/{table_name}/get/columns/', 'RecuperacionController@getColumns');
Route::post('recuperacion/ejecutar-sql', 'RecuperacionController@ejecutarSQL');