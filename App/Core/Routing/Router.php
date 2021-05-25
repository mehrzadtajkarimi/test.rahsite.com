<?php

namespace App\Core\Routing;

use App\Core\Request;
use App\Core\Routing\Route;

class Router
{
    private $request;
    private $routes;
    private $route_current;
    public function __construct()
    {
        $this->request = new Request;
        $this->routes = Route::routes();
        $this->route_current = $this->fine_route($this->request) ?? null;
        // echo '<hr>';
        // var_dump($this->routes);
        // echo '<pre>';
        // var_dump( Route::routes());
        // var_dump(   $this->request->uri());
        // echo '<hr>';
    }

    public function fine_route(Request $request)
    {
        foreach ($this->routes as  $route) {
            if (in_array($request->method(), $route) && $request->uri() == $route['uri']) {
                return $route;
            }
        }
        return null;
    }





    public function run()
    {
    }
}
