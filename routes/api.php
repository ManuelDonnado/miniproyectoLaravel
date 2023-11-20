<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\AlumnoCursoController;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\DocenteCursoController;
use App\Http\Controllers\TipoAsistenciaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(AlumnoController::class)->group(function(){
    Route::get('/alumno','index');
    Route::post('/alumno','store');
    Route::put('/alumno/{id}','update');
    Route::delete('/alumno/{id}','destroy');
});

Route::controller(DocenteController::class)->group(function(){
    Route::get('/docente','index');
    Route::post('/docente','store');
    Route::put('/docente/{id}','update');
    Route::delete('/docente/{id}','destroy');
});

Route::controller(CursoController::class)->group(function(){
    Route::get('/curso','index');
    Route::post('/curso','store');
    Route::put('/curso/{id}','update');
    Route::delete('/curso/{id}','destroy');
});

Route::controller(TipoAsistenciaController::class)->group(function(){
    Route::get('/tipoAsistencia','index');
    Route::post('/tipoAsistencia','store');
    Route::put('/tipoAsistencia/{id}','update');
    Route::delete('/tipoAsistencia/{id}','destroy');
});

Route::controller(DocenteCursoController::class)->group(function(){
    Route::get('/docenteCurso','index');
    Route::post('/docenteCurso','store');
    Route::put('/docenteCurso/{id}','update');
    Route::delete('/docenteCurso/{id}','destroy');
});

Route::controller(AlumnoCursoController::class)->group(function(){
    Route::get('/alumnoCurso','index');
    Route::post('/alumnoCurso','store');
    Route::put('/alumnoCurso/{id}','update');
    Route::delete('/alumnoCurso/{id}','destroy');
});

Route::controller(AsistenciaController::class)->group(function(){
    Route::get('/asistencia','index');
    Route::post('/asistencia','store');
    Route::put('/asistencia/{id}','update');
    Route::delete('/asistencia/{id}','destroy');
});

