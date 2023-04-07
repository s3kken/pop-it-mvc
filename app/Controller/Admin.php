<?php

namespace Controller;

use Src\View;
use Src\Request;
use Model\User;
use Src\Auth\Auth;
use Model\Control;
use Src\Validator\Validator;

class  Admin
{
    //админ
    //виды контроля
    public function control(): string
    {
            $control = Control::all();
            return (new View())->render('site.lists.list_control', ['control' => $control]);
    }
    //список сотрудников
    public function User(): string
    {
            $User = User::all();
            return (new View())->render('site.lists.list_employees', ['User' => $User]);
    }

    public function addControl(Request $request): string
    {
       if ($request->method === 'POST') {
    
           $validator = new Validator($request->all(), [
               'title' => ['required']
           ], [
               'required' => 'Поле :field пусто',
               'unique' => 'Поле :field должно быть уникально'
           ]);
    
           if($validator->fails()){
               return new View('site.edit.editAddControl',
                   ['message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
           }
    
           if (Control::create($request->all())) {
               app()->route->redirect('/list_control');
           }
       }
       return new View('site.edit.editAddControl');
    }
}