<?php
namespace App\Controllers;

use App\Controllers\Contracts\Controller;

class UserController extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        // if (isset($_POST['register'])) {
        //     if (!$this->model->register($_POST)) {
        //         $this->error = ('پسورد و تکرار آن باهم برار نیستند');
        //     }
        // }
        if (isset($_POST['login'])) {
            $getPostLogin = $_POST;
            $this->model->checkuser($getPostLogin);
            Model::sessionStart();
            $check = Model::sessionGet("userid");
            if ($check == false) {
                header('Location: ' . URL . 'user');
            } else {
                header('Location: ' . URL . 'userProfile');
            }
        }

        // // $userRegister = $this->model-> userRegister();
        // // $data = [
        // //     'userRegister' => $userRegister
        // // ];
        $this->view('users/index', [], 1, 1);
    }
}
