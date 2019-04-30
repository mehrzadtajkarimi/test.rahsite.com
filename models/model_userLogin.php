<?php

class model_userLogin extends Model
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    { }
    function userLogin()
    {
        $sql = "SELECT * FROM tbl_userLogin ";
        $result = $this->doSELECT($sql);
        return $result;
    }
}