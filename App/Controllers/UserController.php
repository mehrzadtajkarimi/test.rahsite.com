<?php

namespace App\Controllers;

use App\Controllers\Contracts\Controller;

class UserController extends Controller
{


    function index()
    {

        view('users/index');
    }
}
