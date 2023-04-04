<?php

namespace Controller;

use Model\ListTeachers;
use Src\View;
use Src\Request;
use Model\User;
use Src\Auth\Auth;

class Employee
{
    public function listTeachers(): string
    {
         $listTeachers = ListTeachers::all();
         return (new View())->render('site.listTeachers', ['listTeachers' => $listTeachers]);
//        return new View('site.list_teacher');
    }
    public function listStudents(): string
    {
         $listStudents = ListStudents::all();
         return (new View())->render('site.listStudents', ['listStudents' => $listStudents]);
//        return new View('site.list_teacher');
    }
}