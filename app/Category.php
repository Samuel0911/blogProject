<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //llenando datos
    protected $table = "categories"; //nombre de la tabla

    protected $fillable = ['name'];//este campo nos sirve para obtener los objetos json (el campo de nuestra tabla)

    //relaciones entre las tablas uno a muchos etc ()
    //lleva el nombre de la tabla con la q se va a relacionar en forma plural
    //una categoria tiene muchos articulos
    public function articles() 
    {
    	return $this->hasMany('App\Article');
    }
}
