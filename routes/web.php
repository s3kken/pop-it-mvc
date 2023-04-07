<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup'])    ->middleware('admin');
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout'])    ->middleware('auth');
Route::add(['GET', 'POST'], '/listTeachers', [Controller\Employee::class, 'listTeachers'])  ->middleware('auth');
Route::add(['GET', 'POST'], '/listStudents', [Controller\Employee::class, 'listStudents'])    ->middleware('auth');
Route::add(['GET', 'POST'], '/listGroup', [Controller\Employee::class, 'listGroup'])    ->middleware('auth');
Route::add(['GET', 'POST'], '/listDiscipline', [Controller\Employee::class, 'listDiscipline'])    ->middleware('auth');
Route::add(['GET', 'POST'], '/statement', [Controller\Employee::class, 'statement'])    ->middleware('auth');
Route::add(['GET', 'POST'], '/list_control', [Controller\Admin::class, 'control'])    ->middleware('auth', 'admin');
Route::add(['GET', 'POST'], '/list_employees', [Controller\Admin::class, 'User'])    ->middleware('auth', 'admin');
Route::add(['GET', 'POST'], '/editAddTeacher', [Controller\Employee::class, 'addTeacher'])    ->middleware('auth');
Route::add(['GET', 'POST'], '/editAddStudent', [Controller\Employee::class, 'addStudent'])    ->middleware('auth');
Route::add(['GET', 'POST'], '/editAddDiscipline', [Controller\Employee::class, 'addDiscipline'])    ->middleware('auth');
Route::add(['GET', 'POST'], '/editAddStatement', [Controller\Employee::class, 'addStatement'])    ->middleware('auth');
Route::add(['GET', 'POST'], '/editAddControl', [Controller\Admin::class, 'addControl'])    ->middleware('auth', 'admin');
Route::add(['GET', 'POST'], '/editDiscipline', [Controller\Employee::class, 'editDiscipline'])->middleware('auth');