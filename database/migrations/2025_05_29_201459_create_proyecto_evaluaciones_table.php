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
    Schema::create('proyecto_evaluaciones', function (Blueprint $table) {
        $table->unsignedInteger('id_proyecto');
        $table->unsignedInteger('id_evaluacion');
        $table->unsignedInteger('id_evaluador');
        $table->text('resultado')->nullable();
        $table->primary(['id_proyecto', 'id_evaluacion', 'id_evaluador']);
        $table->foreign('id_proyecto')->references('id_proyecto')->on('proyectos')->onDelete('cascade');
        $table->foreign('id_evaluacion')->references('id_evaluacion')->on('evaluaciones')->onDelete('cascade');
        $table->foreign('id_evaluador')->references('id_evaluador')->on('evaluadores')->onDelete('cascade');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('proyecto_evaluaciones');
}

};
