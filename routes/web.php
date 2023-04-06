<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add(['GET', 'POST'], '/listTeachers', [Controller\Employee::class, 'listTeachers']);
Route::add(['GET', 'POST'], '/listStudents', [Controller\Employee::class, 'listStudents']);
Route::add(['GET', 'POST'], '/listGroup', [Controller\Employee::class, 'listGroup']);
Route::add(['GET', 'POST'], '/listDiscipline', [Controller\Employee::class, 'listDiscipline']);
Route::add(['GET', 'POST'], '/statement', [Controller\Employee::class, 'statement']);
Route::add(['GET', 'POST'], '/list_control', [Controller\Admin::class, 'control']);
Route::add(['GET', 'POST'], '/list_employees', [Controller\Admin::class, 'User']);