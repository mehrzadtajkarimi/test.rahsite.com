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

    function tab()
    {
        $number = $_POST['number'];
        if ($number == 0) {
            $nemonekar = $this->model->nemonekar_company();
            $this->view('index/tab1', $nemonekar, 1, 1);
        }
        if ($number == 1) {
            $nemonekar = $this->model->nemonekar_person();
            $this->view('index/tab2', $nemonekar, 1, 1);
        }
        if ($number == 2) {
            $nemonekar = $this->model->nemonekar_shop();
            $this->view('index/tab3', $nemonekar, 1, 1);
        }
    }
}
