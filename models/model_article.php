<?php

class model_article extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function articleInfo($id)
    {
        $sql = "select * from tbl_articles where id=?";
        $data=[$id];
        $result=$this->doSelect($sql,$data);
        return $result;

    }
    function articlesCategorize()
    {
        $sql="select * from tbl_option where setting='limit_articles' ";
        $result=$this->doSelect($sql,[],1);
        $limit_article=$result['value'];
        $sql = "select * from tbl_articles limit".$limit_article." ";
        $result=$this->doSelect($sql);
        return $result;
    }
    function mostView(){
        $sql="select * from tbl_option where setting='mostView' ";
        $result=$this->doSelect($sql,[],1);
        $limit_article=$result['value'];
        $sql="select * from tbl_articles order by viewd desc limit ".$limit_article."  ";
        $result=$this->doSelect($sql);
        return $result;

    }

    function newArticle(){
        $sql="select * from tbl_option where setting='newArticle' ";
        $result=$this->doSelect($sql,[],1);
        $limit_article=$result['value'];
        $sql="select * from tbl_articles order by id desc limit ".$limit_article."  ";
        $result=$this->doSelect($sql);
        return $result;

    }
    function commentCategory($idCategory){
        $sql="select * from tbl_comment_parameter where idCategory=?";
        $data=[$idCategory];
        $result=$this->doSelect($sql,$data);
        return $result;
    }
    function comment($id){
        $sql="select * from tbl_comment where id=?";
        $data=[$id];
        $result=$this->doSelect($sql,$data);
        return $result;
    }

}
