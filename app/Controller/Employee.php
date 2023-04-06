<?php

namespace Controller;

use Model\ListTeachers;
use Src\View;
use Src\Request;
use Model\User;
use Src\Auth\Auth;
use Model\ListStudents;
use Model\listGroup;
use Model\listDiscipline;
use Model\statement;

class  Employee
{
    //список учителей
    public function listTeachers(): string
    {
         $listTeachers = ListTeachers::all();
         return (new View())->render('site.lists.listTeachers', ['listTeachers' => $listTeachers]);
    }
    //список студентов
    public function listStudents(): string
    {
         $listStudents = ListStudents::all();
         return (new View())->render('site.lists.listStudents', ['listStudents' => $listStudents]);
    }
    //список групп
    public function listGroup(): string
    {
            $listGroup = listGroup::all();
            return (new View())->render('site.lists.listGroup', ['listGroup' => $listGroup]);
    }
    //список дисциплин
    public function listDiscipline(): string
    {
            $listDiscipline = listDiscipline::all();
            return (new View())->render('site.lists.listDiscipline', ['listDiscipline' => $listDiscipline]);
    }
    //ведомость
    public function statement(): string
    {
            $statement = statement::all();
            return (new View())->render('site.lists.statement', ['statement' => $statement]);
    }

}