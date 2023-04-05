<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add(['GET', 'POST'], '/listTeachers', [Controller\Site::class, 'listTeachers']);
Route::add(['GET', 'POST'], '/listStudents', [Controller\Site::class, 'listStudents']);
Route::add(['GET', 'POST'], '/listGroup', [Controller\Site::class, 'listGroup']);
Route::add(['GET', 'POST'], '/listDiscipline', [Controller\Site::class, 'listDiscipline']);
Route::add(['GET', 'POST'], '/statement', [Controller\Site::class, 'statement']);
Route::add(['GET', 'POST'], '/list_control', [Controller\Site::class, 'control']);