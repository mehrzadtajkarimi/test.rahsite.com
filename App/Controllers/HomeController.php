<?php

namespace App\Controllers;

class HomeController
{


    public function index()
    {
        global $request;
        return view('home.index',['request'=>$request]);
    }
}
