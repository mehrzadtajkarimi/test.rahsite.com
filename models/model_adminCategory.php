<?php

class model_adminCategory extends Model {

    function __construct() {
        parent::__construct();
    }

    function index() {
        
    }
    function adminCategory(){
        $sql="SELECT * FROM tbl_articles_category WHERE parent =1 ";
        $result=$this->doSELECT($sql);
        return $result;
    }

}
