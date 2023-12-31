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
        Schema::create('perros', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->string("url_foto");
            $table->string("descripcion");
            $table->timestamps();
        });    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perros');
    }
};
