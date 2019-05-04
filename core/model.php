<?php

class Model
{

    public static $conn = '';

    function __construct()
    {
        $serverName = 'localhost';
        $userName = 'rahsitec_admin';
        $password = 'Mehrzad@1';
        $dbName = 'rahsitec_webzad';
        $attr = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
        self::$conn = new PDO('mysql:host=' . $serverName . ';dbname=' . $dbName, $userName, $password, $attr);
    }

    public static function getOption()
    {
        $sql = "select * from tbl_option ";
        $stmt = self::$conn->prepare($sql);
        $stmt->execute();
        $options = $stmt->fetchAll();
        $options_new = [];
        foreach ($options as $option) {
            $setting = $option['setting'];
            $value = $option['value'];
            $options_new[$setting] = $value;
        }
        return $options_new;
    }

    function doSelect($sql, $values = [], $fetch = '', $fetch_style = PDO::FETCH_ASSOC)
    {
        $stmt = self::$conn->prepare($sql);
        foreach ($values as $key => $value) {
            $stmt->bindValue($key + 1, $value);
        }
        $stmt->execute();
        if ($fetch == '') {
            $result = $stmt->fetchAll($fetch_style);
        } else {
            $result = $stmt->fetch($fetch_style);
        }
        return $result;
    }
    function doQuery($sql, $values = [])
    {
        $stmt = self::$conn->prepare($sql);
        foreach ($values as $key => $value) {
            $stmt->bindValue($key + 1, $value);
        }
        $stmt->execute();
    }
    public static function sessionStart()
    {
       @session_start();
    }
    public static function sessionSet($name, $value)
    {
        $_SESSION[$name] = $value;
    }
    public static function sessionGet($name)
    {
        if (isset($_SESSION[$name])) {
            return $_SESSION[$name];
        } else {
            return false;
        }
    }
}
