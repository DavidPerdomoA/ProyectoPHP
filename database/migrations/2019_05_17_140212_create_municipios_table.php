<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMunicipiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municipios', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigInteger('departamentoid')->unsigned();
            $table->foreign('departamentoid')->references('id')->on('departamentos');
            $table->bigIncrements('id');
            $table->String('nom_municipio');        
            $table->timestamps();
        });
    }
    public function Departamento()
    {
    	return $this->hasOne('2019_05_14_144023_create_departamentos_table.php', 'id_municipio');
    } 
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('municipios');
    }
}
