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
        Schema::create('docente_cursos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idDocente');
            $table->foreign('idDocente')->references('id')->on('docentes');
            $table->unsignedBigInteger('idCurso');
            $table->foreign('idCurso')->references('id')->on('cursos');    
            $table->string('dia');
            $table->time('hora');
            $table->timestamps();        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docente_cursos');
    }
};
