<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function index(){
        return view('master');
    }

    public function rDato(){
        return view('menu.rDatos');
    }

    public function mDato(){
    //   $op=DB::select("show tables");
    //   $tables=[];
    //   foreach ($op as $table => $value) {
    //     $fields=DB::select('describe '.$value->Tables_in_ejemplo);
    //     $op[$table]->fields = $fields;
    //   }
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
  
        return view('menu.mDato')->with(['op' => $op]);
    }

    public function dDato(){
        return view('menu.dDato');
    }

    public function cDato(){
        return view('menu.cDato');
    }

    public function oDato(){
        return view('menu.oDato');
    }

}
