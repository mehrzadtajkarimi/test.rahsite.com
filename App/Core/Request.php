<?php

namespace App\Core;

class Request
{
    private  $params;
    private  $rout_params;
    private  $method;
    private  $ip;
    private  $agent;
    private  $uri;

    public  function __construct()
    {
        $this->params = $_REQUEST;
        $this->method = strtolower($_SERVER['REQUEST_METHOD']);
        $this->ip = $_SERVER['SERVER_ADDR'];
        $this->agent = $_SERVER['HTTP_USER_AGENT'];
        $this->uri = strtok($_SERVER['REQUEST_URI'], '?');
    }
    public function add_rout_param($key, $value)
    {
       $this->rout_params[$key]=$value;
    }
    public function get_rout_param($key)
    {
      return $this->rout_params[$key]??null;
    }
    public function get_rout_params()
    {
      return $this->rout_params;
    }

    public  function params()
    {
        return $this->params;
    }
    public  function method()
    {
        return $this->method;
    }
    public  function ip()
    {
        return $this->ip;
    }
    public  function agent()
    {
        return $this->agent;
    }
    public  function uri()
    {
        return $this->uri;
    }
}
