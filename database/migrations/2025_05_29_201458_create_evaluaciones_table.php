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
    Schema::create('evaluaciones', function (Blueprint $table) {
        $table->increments('id_evaluacion');
        $table->date('fecha');
        $table->text('observaciones')->nullable();
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('evaluaciones');
}

};
