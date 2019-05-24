<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use DB;

class DMLController extends Controller
{
    public $message 	= "";
  	public $result 		= false;
  	public $statusCode 	= 200;
    public function getOperation(Request $request)
    {
      $query = $request->input('query');
      try{
        if(strpos(strtolower($query), 'insert')!== false){
          $op=DB::insert($query);
          $this->result   = true;
          $this->message  = 'registro insertado correctamente';
        }else if(strpos(strtolower($query), 'delete')!== false){
          $op =DB::delete($query);
          $this->result   = true;
          $this->message  = 'registro eliminado correctamente';
        }else if(strpos(strtolower($query), 'update')!== false){
          $op=DB::update($query);
          $this->result   = true;
          $this->message  = 'registro actualizado correctamente';
        }
        else{
          $this->result   = false;
          $this->message  = 'operacion no admitida';
        }
      } catch(Exception $e){
        $this->result   = false;
        $this->message  = $e->errorInfo[2];
      } finally {
        $response = [
  				'message'  	=> 	$this->message,
		      'result'  	=> 	$this->result,
	      ];

	      return response()->json($response, $this->statusCode);
      }
    }

    public function getTables(){
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
    }
}
