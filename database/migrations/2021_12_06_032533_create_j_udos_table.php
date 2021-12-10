<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJUdosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('j_udos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('assuntos_id')->constrained();
            $table->foreignId('comentario_id')->constrained();
            $table->date('data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('j_udos');
    }
}
