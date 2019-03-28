<?php

class model_index extends Model
{
    function __construct()
    {
        parent::__construct();
    }


    function nemonekar_company()
    {
        $sql = "SELECT * FROM nemonekar_company";
        $result = $this->doSelect($sql);
        return $result;

    }

    function nemonekar_person()
    {
        $sql = "SELECT * FROM nemonekar_person";
        $result = $this->doSelect($sql);
        return $result;

    }

    function nemonekar_shop()
    {
        $sql = "SELECT * FROM nemonekar_shop";
        $result = $this->doSelect($sql);
        return $result;

    }

}

?>
