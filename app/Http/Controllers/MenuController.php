<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
        return view('master');
    }

    public function rDato(){
        return view('menu.rDatos');
    }

    public function mDato(){
        return view('menu.mDato');
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
