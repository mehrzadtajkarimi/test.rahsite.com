<?php

class model_user extends Model
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    { }


    function register($data = [])
    {
        $register_name = $data['register_name'];
        $register_email = $data['register_email'];
        $register_password = $data['register_password'];
        $register_password_conf = $data['register_password_conf'];
        if ($register_password !== $register_password_conf) {
            return false;
        } else {
            $sql = "INSERT INTO user (name ,email ,password) VALUES (?,?,?)";
            $data = [$register_name, $register_email, $register_password];
            $this->doQuery($sql, $data);
            if ($sql) {
                return true;
            } else {
                return false;
            }
        }
    }
    function checkuser($getPostLogin = [])
    {
        $login_email = $getPostLogin['login_email'];
        $login_password = $getPostLogin['login_password'];
        $sql = "SELECT * FROM user WHERE email=? AND password=?  ";
        $params = [$login_email, $login_password];
        $result = $this->doSelect($sql, $params);

        if (sizeof($result) > 0 and !empty($login_email) and !empty($login_password)) {
            Model::sessionStart();
            Model::sessionSet('userid', $result[0]['id']);
        } else {
            return false;
        }
    }
}


    // function userRegister()
    // {
    //     $sql = "INSERT INTO `userlogin`(`display_name`, `email`, `password`, `register_data`) VALUES (?)";
    //     $stmt=self::$conn->prepare($sql)

    //     return $result;
    // }
