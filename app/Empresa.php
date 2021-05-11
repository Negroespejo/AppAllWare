<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    //mapeado con la tabla Empresas de la DB

	protected $fillable = ['nombre', 'num_empleados', 'tipo', 'token']; // la propiedad fillable seleciona que campos se pueden editar o crear


}
