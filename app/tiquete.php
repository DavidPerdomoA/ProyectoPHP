<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tiquete extends Model
{
    protected $table = 'tiquetes';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillabel = [
    	"id",
    	"municipioid",
        "cantidad",
        "precio"
    ];
    
    public function Municipio()
    {
        return $this->belongsTo('App\Municipio', 'municipioid');
    }
}
