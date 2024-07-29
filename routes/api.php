<?php
use App\Http\Controllers\ProyectosController;

Route::get('/api/proyectos', [ProyectosController::class, 'obtenerProyectos']);
Route::post('/api/proyectos', [ProyectosController::class, 'nuevoProyecto']);
Route::patch('/api/proyectos', [ProyectosController::class, 'actualizarProyecto']);
Route::delete('/api/proyectos', [ProyectosController::class, 'eliminarProyecto']);
