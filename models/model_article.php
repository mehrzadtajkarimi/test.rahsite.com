<?php

class model_article extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function articleInfo($id)
    {
        $sql = "select * from tbl_attribute where id=?";
        $result=$this->doSelect($sql,[$id]);
        return $result;
    }
    function categorizeArticles()
    {
        $sql="select * from tbl_option where setting='limit_articles' ";
        $result=$this->doSelect($sql,[],1);

        $limit_article=$result['value'];

        $sql = "select * from tbl_attribute limit".$limit_article." ";
        $result=$this->doSelect($sql);
        return $result;
    }

}