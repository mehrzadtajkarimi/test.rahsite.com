<?php

class userLogin extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $userLogin = $this->model-> userLogin();
        $data = [
            'userLogin' => $userLogin
        ];
        $this->view('users/login', $data);
    }
}