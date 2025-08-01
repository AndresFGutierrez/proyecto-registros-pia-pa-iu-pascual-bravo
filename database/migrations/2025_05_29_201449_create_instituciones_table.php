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
    Schema::create('instituciones', function (Blueprint $table) {
        $table->increments('id_institucion');
        $table->string('nombre', 100);
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('instituciones');
}
};
