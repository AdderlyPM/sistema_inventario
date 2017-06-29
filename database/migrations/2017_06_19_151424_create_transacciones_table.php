<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transacciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo_transaccion');
            $table->integer('id_articulo')->unsigned()->index();;
            $table->foreign('id_articulo')->references('id')->on('articulos')->onDelete('cascade');
            $table->string('fecha');
            $table->integer('cantidad');
            $table->integer('monto');

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
        Schema::dropIfExists('transacciones');
    }
}
