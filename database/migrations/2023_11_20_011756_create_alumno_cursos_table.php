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
        Schema::create('alumno_cursos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idAlumno');
            $table->foreign('idAlumno')->references('id')->on('alumnos');
            $table->unsignedBigInteger('idDocenteCurso');
            $table->foreign('idDocenteCurso')->references('id')->on('docente_cursos');  
            $table->integer('alumnosInscriptos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumno_cursos');
    }
};
