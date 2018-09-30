<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
    
    public function contactar(){
    	return view("contacto");
    }

    public function galeria(){

        $alumnos=["sara","antonio","manuel"];
    	return view("galeria", compact("alumnos"));
    }

    }
