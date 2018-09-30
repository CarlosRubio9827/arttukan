<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{

 public function store(Request $request)
    {

        $departamento = new Departamento;

        $departamento->nombreDepartamento = $request->nombreDepartamento;

        $departamento->save();
    }
}

   


