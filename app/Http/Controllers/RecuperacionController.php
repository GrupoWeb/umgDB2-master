<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RecuperacionController extends Controller
{
    public function getDatabases()
    {
    	$db = DB::table('schemata')
    	->where('schema_name', '!=', 'information_schema')
    	->where('schema_name', '!=', 'mysql')
    	->where('schema_name', '!=', 'performance_schema')
    	->where('schema_name', '!=', 'sys')
    	->select('schema_name')
    	->get();
    	return response()->json($db, 200);
    }


    public function getTables($table_schema)
    {
        $db = DB::table('tables')
        ->where('table_schema', $table_schema)
        ->select('table_name')
        ->get();
        return response()->json($db, 200);
    }

    public function getColumns($table_schema, $table_name)
    {
        $db = DB::table('columns')
        ->where('table_schema', $table_schema)
        ->where('table_name', $table_name)
        ->select('column_name')
        ->get();
        return response()->json($db, 200);
    }
}
