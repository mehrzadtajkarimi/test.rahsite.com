<?php

class model_index extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function options()
    {
        $sql = "SELECT * FROM nemonekar";
        $stmt = self::$conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;

    }

    function nemonekar_company()
    {
        $sql = "SELECT * FROM nemonekar_company";
        $stmt = self::$conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;

    }

    function nemonekar_person()
    {
        $sql = "SELECT * FROM nemonekar_person";
        $stmt = self::$conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;

    }

    function nemonekar_shop()
    {
        $sql = "SELECT * FROM nemonekar_shop";
        $stmt = self::$conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;

    }

}

?>
