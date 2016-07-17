<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLavadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lavados', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('precio')->required();
            $table->timestamp('fecha_lavado');
            $table->boolean('estado')->default(false)->change();
            $table->integer('users_id')->unsigned();
            $table->integer('vehiculos_id')->unsigned();
            $table->timestamps();
                        
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('vehiculos_id')->references('id')->on('vehiculos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('lavados');
    }
}
