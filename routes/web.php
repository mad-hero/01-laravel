<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/proyectos', function () {
    return view('projectsView');
});

Route::get('/crearProyecto', function () {
    return view('createProjectView');
});

Route::get('/actualizarProjecto', function () {
    return view('updateProjectView');
});

Route::get('/borrarProjecto', function () {
    return view('deleteProjectView');
});

