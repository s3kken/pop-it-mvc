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
use Src\Validator\Validator;

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
    //добавление учителя
    public function addTeacher(Request $request): string
    {
       if ($request->method === 'POST') {
    
           $validator = new Validator($request->all(), [
               'name' => ['required'],
               'surname' => ['required'],
               'patronymic' => ['required']
           ], [
               'required' => 'Поле :field пусто',
               'unique' => 'Поле :field должно быть уникально'
           ]);
    
           if($validator->fails()){
               return new View('site.edit.editAddTeacher',
                   ['message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
           }
    
           if (listTeachers::create($request->all())) {
               app()->route->redirect('/listTeachers');
           }
       }
       return new View('site.edit.editAddTeacher');
    }

    //Добавление студента
    public function addStudent(Request $request): string
    {
        $groups = listGroup::all();
       if ($request->method === 'POST') {
    
           $validator = new Validator($request->all(), [
               'name' => ['required'],
               'surname' => ['required'],
               'patronymic' => ['required'],
               'gender' => ['required'],
               'dateOfBirth' => ['required'],
               'address' => ['required'],
           ], [
               'required' => 'Поле :field пусто',
               'unique' => 'Поле :field должно быть уникально'
           ]);
    
           if($validator->fails()){
               return new View('site.edit.editAddStudent',
                   ['message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
           }
    
           if (listStudents::create($request->all())) {
               app()->route->redirect('/listStudents');
           }
       }
       return new View('site.edit.editAddStudent', ['groups' => $groups]);
    }


    //Добавление дисциплины
    public function addDiscipline(Request $request): string
    {
       if ($request->method === 'POST') {
    
           $validator = new Validator($request->all(), [
               'title' => ['required'],
               'hours' => ['required']
           ], [
               'required' => 'Поле :field пусто',
               'unique' => 'Поле :field должно быть уникально'
           ]);
    
           if($validator->fails()){
               return new View('site.edit.editAddDiscipline',
                   ['message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
           }
    
           if (listDiscipline::create($request->all())) {
               app()->route->redirect('/listDiscipline');
           }
       }
       return new View('site.edit.editAddDiscipline');
    }
}