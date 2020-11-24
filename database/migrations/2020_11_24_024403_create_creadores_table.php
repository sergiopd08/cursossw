<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creadores', function (Blueprint $table) {
            $table->id();
            $table->text('descripcion')->nullable();
            //$table->foreignId('visitante_id')->constrained()->onDelete('cascade');
            //$table->foreignId('institucion_id')->references('id')->on('instituciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('creadors');
    }
}
