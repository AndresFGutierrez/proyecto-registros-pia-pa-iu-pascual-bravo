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
    Schema::create('tipos_proyecto', function (Blueprint $table) {
        $table->increments('id_tipo');
        $table->string('nombre', 100);
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('tipos_proyecto');
}

};
