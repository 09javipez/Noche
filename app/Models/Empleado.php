<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $fillable= [
        'nombre1',
        'nombre2',
        'apellido1',
        'apellido2',
        'fechaNac',
        'numeroIdenti',
        'numeroTel',
        'sexo',
        'dirección',
        'email',
    ];

         //Relacion muchos a muchos
         public function usuarios(){
            return $this->belongsToMany('App\Models\User');
            }
}
