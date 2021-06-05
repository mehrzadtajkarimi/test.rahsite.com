<?php

namespace App\Controllers;

use App\Controllers\Contracts\Controller;

class HomeController extends Controller
{


    public function index()
    {
        global $request;
        return view('home.index', ['request' => $request]);
    }


}
