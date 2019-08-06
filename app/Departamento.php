<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = 'departamentos';
    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillabel = [

    "id",
    "num_departamento",
    ];

    public function Municipio()
    {
        return $this->HasOne('App\Municipio','id');
    }
}
