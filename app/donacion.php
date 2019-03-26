<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class donacion extends Model
{
    protected $table = 'centros';
    public $timestamps = false;


    protected $fillable = ['cencodigo','inscodigo','cenruc','cennombre',
                            'cendireccion','centelefono','cencorreo','cencodigo2','inscodigo2'];
}
