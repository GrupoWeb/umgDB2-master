<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use DB;

class DclController extends Controller
{
    public function getObjets($databases)
    {
        $sel = "SELECT * FROM INFORMATION_SCHEMA.tables WHERE TABLE_SCHEMA='$databases';";
        $db = DB::select($sel);
        return response()->json($db, 200);
    }
    public function getDatabases()
    {
        $sel = "SHOW databases;";
        $db = DB::select($sel);
        return response()->json($db, 200);
    }
    public function getUsers()
    {
        $sel = "select *,CONCAT(User,',',Host) as id from mysql.user;";
        $db = DB::select($sel);
        return response()->json($db, 200);
    }

    public function execdcl(Request $request)
    {
        $database = $request->database;
        //-------------
        $iduser = $request->user;
        $userArr = explode(",",$iduser);
        $user = "umg";
        $srv = "localhost";
        if(!empty($userArr)){
          $user = $userArr[0]; //obtiene usuario
          $srv = $userArr[1]; //obtiene servidor del usuario
        }
        //-------------
        $permission = $request->permission;
        $objet = $request->objet;
        $type = $request->type;

        if($permission == "GRANT"){
          $qry = "$permission $type ON $database.$objet TO '$user'@'$srv';";
        }else{
          $qry = "$permission $type ON $database.$objet FROM '$user'@'$srv';";
        }

        $db = DB::statement($qry);

        return array("qry"=>$qry,"premission"=>$permission);
    }
}
