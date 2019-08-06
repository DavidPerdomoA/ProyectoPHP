<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table = 'municipios';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillabel = [
    	"id",
    	"nom_municopio",
        "departamentoid"
    ];
    
    public function Departamento()
    {
    	return $this->belongsTo('App\Departamento', 'departamentoid');
    } 
    public function Tiquete()
    {
    	return $this->belongsTo('App\tiquetes', 'municipioid');
    } 
}