<?php

class model_CategorizeArticles extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function category()
    {
        $sql = "select * from tbl_option where setting='limit_CategorizeArticles'";
        $stmt = self::$conn->prepare($sql);
        $stmt->execute();
        $result=$stmt->fetch();
        $limit_CategorizeArticles = $result['value'];
        $sql = "SELECT * FROM tbl_attribute limit ".$limit_CategorizeArticles." ";
        $stmt = self::$conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;

    }
}

?>
