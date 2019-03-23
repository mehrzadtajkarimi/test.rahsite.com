<?php

class model_categorizeArticles extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function category()
    {
        $sql = "select * from tbl_option where setting='limit_categorizeArticles'";
        $result=$this->doSelect($sql,[],1);
        $limit_categorizeArticles = $result['value'];
        $sql = "SELECT * FROM tbl_attribute limit ".$limit_categorizeArticles." ";
        $result=$this->doSelect($sql);
        return $result;

    }
}

?>
