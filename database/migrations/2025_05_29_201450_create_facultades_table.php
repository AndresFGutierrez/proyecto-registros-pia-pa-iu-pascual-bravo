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
    Schema::create('facultades', function (Blueprint $table) {
        $table->increments('id_facultad');
        $table->string('nombre', 100);
        $table->unsignedInteger('id_institucion');
        $table->foreign('id_institucion')->references('id_institucion')->on('instituciones')->onDelete('cascade');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('facultades');
}
};
