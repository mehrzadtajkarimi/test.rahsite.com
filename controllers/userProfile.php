<?php

class userProfile extends Controller
{
public $checkLogin='';
    function __construct()
    {
        Model::sessionStart();
        $this->checkLogin = Model::sessionGet("userid");
        if ( $this->checkLogin == false) {
            header( "Location: " . URL . "user");
        }
    }

    function index()
    {

        //     $doLogin = $_POST['login_email'];
        // print_r($doLogin);
        //     $userProfile = $this->model-> userProfile($doLogin);
        //     $data = [
        //         'userProfile' => $userProfile
        //     ];
        $this->view('users/profile/index', [], 1, 1);
    }
}
