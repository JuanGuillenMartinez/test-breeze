<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibroVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libro_venta', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('libro_sucursal_id');

            $table->foreign('libro_sucursal_id')->references('id')->on('libro_sucursal');
            $table->foreignId('venta_id')->constrained();
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
        Schema::dropIfExists('libro_venta');
    }
}
