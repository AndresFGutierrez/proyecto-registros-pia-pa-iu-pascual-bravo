<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('departamentos', function (Blueprint $table) {
        $table->increments('id_departamento');
        $table->string('nombre', 100);
        $table->unsignedInteger('id_facultad');
        $table->foreign('id_facultad')->references('id_facultad')->on('facultades')->onDelete('cascade');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('departamentos');
}

};
