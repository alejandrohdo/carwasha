<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('placa', 15);
            $table->timestamp('fecha_registro');
            /*$table->enum('type',['Taxi, Combi, Camión, Volvo'])->default('Taxi');*/
            $table->enum('tipo', array('Taxi', 'Combi', 'Camión', 'Volvo'))->default('Taxi');
            $table->longText('descripcion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vehiculos');
    }
}
