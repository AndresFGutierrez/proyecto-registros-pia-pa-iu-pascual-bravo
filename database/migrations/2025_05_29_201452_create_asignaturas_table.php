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
    Schema::create('asignaturas', function (Blueprint $table) {
        $table->increments('id_asignatura');
        $table->string('nombre', 100);
        $table->unsignedInteger('id_programa');
        $table->foreign('id_programa')->references('id_programa')->on('programas')->onDelete('cascade');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('asignaturas');
}

};
