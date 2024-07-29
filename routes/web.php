<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/proyectos', function () {
    return view('projectsView');
});

Route::post('/proyectos', function () {
    return view('createProjectView');
});

Route::patch('/proyectos', function () {
    return view('updateProjectView');
});

Route::delete('/proyectos', function () {
    return view('deleteProyectView');
});

