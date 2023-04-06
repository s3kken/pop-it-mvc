<?php

namespace Middlewares;

use Src\Auth\Auth;
use Src\Request;

class AdminMiddleware
{
    public function handle(Request $request)
    {
        if ($_SESSION['id_role'] != 1) {
            app()->route->redirect('/hello');
        }
    }
}