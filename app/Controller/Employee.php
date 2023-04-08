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
use Model\Control;
use Model\DisciplineGroup;
use Model\Course;
use Model\Semester;

class  Employee
{
    //список учителей
    public function listTeachers(): string
    {
         $listTeachers = ListTeachers::all();
         return (new View())->render('site.lists.listTeachers', ['listTeachers' => $listTeachers]);
    }
    //список студентов
    public function listStudents(Request $request): string
    {
         $listStudents = ListStudents::all();
         if($request->method === "GET"){
         return (new View())->render('site.lists.listStudents', ['listStudents' => $listStudents]);
         }
         elseif($request->method === "POST" && $request->get("type_form") == "search_student"){
            $listStudents = ListStudents::where("surname", "=", $request->get("search"))->get();
            return (new View())->render('site.lists.listStudents', ['listStudents' => $listStudents]);
        }

    }
    //список групп
    public function listGroup(): string
    {
            $listGroup = listGroup::all();
            return (new View())->render('site.lists.listGroup', ['listGroup' => $listGroup]);
    }
    //список дисциплин
    public function listDiscipline(Request $request): string
    {
            $sem = Semester::all();
            $cour = Course::all();
            $listDiscipline = listDiscipline::all();
            if($request->method === "GET"){
            return (new View())->render('site.lists.listDiscipline', ['listDiscipline' => $listDiscipline, 'cour' => $cour, 'sem' => $sem]);
            }
            elseif($request->method === "POST" && $request->get("type_form") == "filter_disc"){
                $listDiscipline = listDiscipline::where("course", "=", $request->get("course"))->get();
                return (new View())->render('site.lists.listDiscipline', ['listDiscipline' => $listDiscipline, 'cour' => $cour, 'sem' => $sem]);
            }
            elseif($request->method === "POST" && $request->get("type_form") == "filter_sem"){
                $listDiscipline = listDiscipline::where("semester", "=", $request->get("semester"))->get();
                return (new View())->render('site.lists.listDiscipline', ['listDiscipline' => $listDiscipline, 'cour' => $cour, 'sem' => $sem]);
            }
    }
    //ведомость
    public function statement(Request $request): string
    {
            $discGr = DisciplineGroup::all();
            $statement = statement::all();
            if($request->method === "GET"){
                return (new View())->render('site.lists.statement', ['statement' => $statement, 'discGr' => $discGr]);
            }
            elseif($request->method === "POST" && $request->get("type_form") == "filter_statement"){
                $statement = statement::where("idDisciplineGroup", "=", $request->get("idDisciplineGroup"))->get();
                return (new View())->render('site.lists.statement', ['statement' => $statement, 'discGr' => $discGr]);
            }
    }
    //добавление учителя
    public function addTeacher(Request $request): string
    {
       if ($request->method === 'POST') {
    
           $validator = new Validator($request->all(), [
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

        $addCours = Course::all();
        $addSemester = Semester::all();
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
       return new View('site.edit.editAddDiscipline', ['addCours' => $addCours, 'addSemester' => $addSemester]);
    }

    //добавление ведомости
    public function addStatement(Request $request): string
    {
        $studentStatement = listStudents::all();
        $controlStatement = Control::all();
        $discGroupStatement = DisciplineGroup::all();
       if ($request->method === 'POST') {
    
           $validator = new Validator($request->all(), [
               'idStudent' => ['required'],
               'id_control' => ['required'],
               'idDisciplineGroup' => ['required'],
               'grade' => ['required'],
           ], [
               'required' => 'Поле :field пусто',
               'unique' => 'Поле :field должно быть уникально'
           ]);
    
           if($validator->fails()){
               return new View('site.edit.editAddStatement',
                   ['message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
           }
    
           if (statement::create($request->all())) {
               app()->route->redirect('/statement');
           }
       }
       return new View('site.edit.editAddStatement', ['studentStatement' => $studentStatement, 'controlStatement' => $controlStatement, 'discGroupStatement' => $discGroupStatement]);
    }

    //редактирование дисциплины
    public function editDiscipline(Request $request): string
    {
        $semesters = Semester::all();
        $courses = Course::all();
        $disciplines = listDiscipline::where('id', $request->id)->get();
        if ($request->method === 'POST') {

            $validator = new Validator($request->all(), [
                'title' => ['required'],
                'hours' => ['required'],
                'course' => ['required'],
                'semester' => ['required'],
            ], [
                'required' => 'Поле :field пусто',
            ]);

            if($validator->fails()){
                return new View('site.editDiscipline',
                ['message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
            } else {
                $disciplines[0]->title = $request->title;
                $disciplines[0]->hours = $request->hours;
                $disciplines[0]->course = $request->course;
                $disciplines[0]->semester = $request->semester;
                $disciplines[0]->save();
                app()->route->redirect('/listDiscipline');
            }
        }
        return new View('site.editDiscipline', [ 'disciplines' => $disciplines, 'courses' => $courses, 'semesters' => $semesters]);

    }

    //выбор ведомости по id дисциплины группы

}