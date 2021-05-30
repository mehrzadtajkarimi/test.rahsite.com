<?php

namespace App\Core\Routing;

use App\Core\Request;
use App\Core\Routing\Route;

const  BASE_CONTROLLER = '\App\Controllers\\';
class Router
{
    private $request;
    private $routes;
    private $route_current;
    const BASE_CONTROLLER = '\App\Controllers\\';



    public function __construct()
    {
        $this->request       = new Request;
        $this->routes        = Route::routes();
        $this->route_current = $this->fine_route($this->request) ?? null;
        $this->run_middleware();
    }

    private function fine_route(Request $request)
    {
        foreach ($this->routes as  $route) {
            if (!in_array($request->method(), $route['method'])) {
                return false;
            }
            if ($this->regex_matched($route)) {
                return $route;
            }
        }
        return null;
    }
    private function regex_matched($route)
    {
        global $request;

        $pattern = "/^" . str_replace(['/', '{', '}'], ['\/', '(?<', '>[-%\w]+)'], $route['uri']) . "$/";
        $result = preg_match($pattern, $this->request->uri(), $matches);
        if (!$result) {
            return false;
        }

        foreach ($matches as $key => $value) {
            if (!is_int($key)) {
                $request->add_rout_param($key, $value);
            }
        }
        return true;
    }

    private function run_middleware()
    {
        $middles = $this->route_current['middleware'];
        foreach ($middles as $middle) {
            $middle = new $middle;
            $middle->handle();
        }
    }

    private function dispatch_404()
    {
        header("HTTP/1.0 404 Not Found");
        view('error.404');
        die();
    }

    private function dispatch($route)
    {
        $action = $route['action'];
        if (is_null($action) || empty($action)) {
            return;
        }
        if (is_callable($action)) {
            $action();
        }
        if (is_string($action)) {
            $action = explode('@', $action);
        }
        if (is_array($action)) {
            $class_name  = self::BASE_CONTROLLER . $action[0];
            $method_name = $action[1];
            if (!class_exists($class_name)) {
                throw new \Exception("class $class_name Not Exists");
            }
            if (!method_exists($class_name, $method_name)) {
                throw new \Exception("method  $method_name not exist in class $class_name");
            }
            $controller = new $class_name();
            return $controller->{$method_name}();
        }
    }



    public function run()
    {
        if (is_null($this->route_current)) {
            $this->dispatch_404();
        }
        $this->dispatch($this->route_current);
    }
}
