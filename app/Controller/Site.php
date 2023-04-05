<?php

namespace Controller;

use Model\ListTeachers;
use Model\Post;
use Src\View;
use Src\Request;
use Model\User;
use Src\Auth\Auth;
use Model\ListStudents;
use Model\listGroup;
use Model\listDiscipline;
use Model\statement;
use Model\Control;

class  Site
{
    public function index(Request $request): string
    {
        $posts = Post::where('id', $request->id)->get();
        return (new View())->render('site.post', ['posts' => $posts]);
    }

    public function hello(): string
    {
        return new View('site.hello', ['message' => 'hello working']);
    }

    public function signup(Request $request): string
    {
        if ($request->method==='POST' && User::create($request->all())){
            app()->route->redirect('/hello');
        }
        return new View('site.signup');
    }
    public function login(Request $request): string
    {
        //Если просто обращение к странице, то отобразить форму
        if ($request->method === 'GET') {
            return new View('site.login');
        }
        //Если удалось аутентифицировать пользователя, то редирект
        if (Auth::attempt($request->all())) {
            app()->route->redirect('/hello');
        }
        //Если аутентификация не удалась, то сообщение об ошибке
        return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }

    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/hello');
    }
    //список учителей
    public function listTeachers(): string
    {
         $listTeachers = ListTeachers::all();
         return (new View())->render('site.listTeachers', ['listTeachers' => $listTeachers]);
    }
    //список студентов
    public function listStudents(): string
    {
         $listStudents = ListStudents::all();
         return (new View())->render('site.listStudents', ['listStudents' => $listStudents]);
    }
    //список групп
    public function listGroup(): string
    {
            $listGroup = listGroup::all();
            return (new View())->render('site.listGroup', ['listGroup' => $listGroup]);
    }
    //список дисциплин
    public function listDiscipline(): string
    {
            $listDiscipline = listDiscipline::all();
            return (new View())->render('site.listDiscipline', ['listDiscipline' => $listDiscipline]);
    }
    //ведомость
    public function statement(): string
    {
            $statement = statement::all();
            return (new View())->render('site.statement', ['statement' => $statement]);
    }

    //админ
    //виды контроля
    public function control(): string
    {
            $control = Control::all();
            return (new View())->render('site.list_control', ['control' => $control]);
    }
    //список сотрудников

}
