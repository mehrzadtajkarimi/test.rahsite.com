<?php

class model_admin extends Model {

    function __construct() {
        parent::__construct();
    }

    function index() {
        
    }
    function articlesCategory(){
        $sql="SELECT * FROM tbl_articles_category ";
        $result=$this->doSELECT($sql);
        return $result;
    }

}
