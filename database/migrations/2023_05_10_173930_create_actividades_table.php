<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividades', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->string('imagen');
            $table->string('nombre', 50);
            $table->foreignId('id_tipo_actividad')->constrained('tipo_actividad')->default(0);
            $table->foreignId('id_sala')->constrained('sala')->default(0);
            $table->foreignId('id_entrenador')->constrained('entrenador')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actividades');
    }
};
