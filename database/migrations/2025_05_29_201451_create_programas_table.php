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
    Schema::create('programas', function (Blueprint $table) {
        $table->increments('id_programa');
        $table->string('nombre', 100);
        $table->unsignedInteger('id_departamento');
        $table->foreign('id_departamento')->references('id_departamento')->on('departamentos')->onDelete('cascade');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('programas');
}

};
