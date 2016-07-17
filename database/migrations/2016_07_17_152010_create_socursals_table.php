<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocursalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socursals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 50)->unique()->required();
            $table->enum('lugar', array('Abancay', 'Aymaraes', 'Andahuaylas', 'Grau', 'Chincheros', 'Cotabambas', 'Antabamba'))->required();
            $table->string('direccion',80);
            $table->integer('users_id')->unsigned();
            $table->timestamps();

            $table->foreign('users_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('socursals');
    }
}
