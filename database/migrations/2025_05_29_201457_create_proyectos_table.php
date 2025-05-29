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
    Schema::create('proyectos', function (Blueprint $table) {
        $table->increments('id_proyecto');
        $table->string('titulo', 200);
        $table->text('descripcion')->nullable();
        $table->unsignedInteger('id_tipo');
        $table->foreign('id_tipo')->references('id_tipo')->on('tipos_proyecto')->onDelete('cascade');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('proyectos');
}

};
