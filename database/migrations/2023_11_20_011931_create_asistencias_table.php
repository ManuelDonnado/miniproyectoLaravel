<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('asistencias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idAlumnoCurso');
            $table->foreign('idAlumnoCurso')->references('id')->on('alumno_cursos');
            $table->unsignedBigInteger('idTipoAsistencia');
            $table->foreign('idTipoAsistencia')->references('id')->on('tipo_asistencias'); 
            $table->date('fecha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asistencias');
    }
};
