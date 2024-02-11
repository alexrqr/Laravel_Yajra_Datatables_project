<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\EstudianteController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('posts',[PostController::class,'index'])->name('posts.index');

Route::get('alumnos', [AlumnoController::class, 'index'])->name('alumnos.index');

Route::get('user/estudiantes', [EstudianteController::class, 'index'])->name('admin.estudiantes.index');
