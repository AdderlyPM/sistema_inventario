<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->string('slug')->unique();
            $table->string('existencia');
            $table->integer('id_tipo_inventario')->unsigned()->index();
            $table->integer('costo_unitario');
            $table->integer('estado');

            $table->foreign('id_tipo_inventario')->references('id')->on('tipos_inventario')->onDelete('cascade');

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
        Schema::dropIfExists('articulos');
    }
}
