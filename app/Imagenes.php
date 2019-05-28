<?php

namespace imagenes;

use Illuminate\Database\Eloquent\Model;

class Imagenes extends Model
{
    public $timestamps = false;
    protected $table = "img";
    protected $fillable = [ 
             'id',
             'image',
             'nombre'
    ];
}
