<?php

namespace Controller;

use Src\View;
use Src\Request;
use Model\User;
use Src\Auth\Auth;
use Model\Control;

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
}