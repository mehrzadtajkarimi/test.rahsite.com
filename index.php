<?php

use App\Core\Routing\Router;

include "bootstrap/init.php";


$router = new Router;
$router->run();

// echo Asset::css('style.css');
// echo '<hr>';
// echo'<pre>';var_dump(Url::current());die;
