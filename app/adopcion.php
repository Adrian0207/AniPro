<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class adopcion extends Model
{
    protected $table = 'mascotas';
    protected $primaryKey = 'mascodigo';
    public $timestamps = false;
    public $incrementing = false;
    
    protected $fillable = ['mascodigo','tipcodigo','masnombre','masraza',
                            'mastipo','masgenero','masedad','masdescripcion'];
}
