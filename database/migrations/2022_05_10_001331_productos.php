<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('marca');
            $table->string('modelo');
            $table->Integer('precio');
            $table->Integer('stock');
            $table->bigInteger('tipoproducto_id')->unsigned();
            $table->timestamps();
            $table->foreign('tipoproducto_id')->references('id')->on('tipo_producto')->onDelete("cascade");// hace la relacion entre producto y tipo producto
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
