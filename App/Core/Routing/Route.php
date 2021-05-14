<?php

namespace App\Core\Routing;

class Route
{

    private  $route = [];




    private static function add($method, $url, $action)
    {
        $method = is_array($method) ? $method : [$method];
        $route = ['method' => $method, 'url' => $url, 'action' => $action];
        array_push(self::$route ,$route);
    }




    public static function get($url, $action)
    {
        self::add('get', $url, $action);
    }
    public static function post($url, $action)
    {
        self::add('post', $url, $action);
    }
    public static function put($url, $action)
    {
        self::add('put', $url, $action);
    }
    public static function patch($url, $action)
    {
        self::add('patch', $url, $action);
    }
    public static function delete($url, $action)
    {
        self::add('delete', $url, $action);
    }
    public static function options($url, $action)
    {
        self::add('options', $url, $action);
    }
}
