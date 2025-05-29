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
    Schema::create('proyecto_asignaturas', function (Blueprint $table) {
        $table->unsignedInteger('id_proyecto');
        $table->unsignedInteger('id_asignatura');
        $table->string('grupo', 50)->nullable();
        $table->unsignedInteger('id_docente');
        $table->primary(['id_proyecto', 'id_asignatura', 'id_docente']);
        $table->foreign('id_proyecto')->references('id_proyecto')->on('proyectos')->onDelete('cascade');
        $table->foreign('id_asignatura')->references('id_asignatura')->on('asignaturas')->onDelete('cascade');
        $table->foreign('id_docente')->references('id_docente')->on('docentes')->onDelete('cascade');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('proyecto_asignaturas');
}

};
