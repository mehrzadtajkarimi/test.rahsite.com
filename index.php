<?php

use App\Core\Routing\Router;
use App\Models\User;

include "bootstrap/init.php";


$router = new Router;
$router->run();

$data=[
    'name'=>'mehrzad',
    'email' => ' mehrzad@gmail.com',
    'password'=>'123456'
];
echo '<pre>';
$userModel= new User();
$result=$userModel->get(['email']);
var_dump($result);



// echo Asset::css('style.css');
// echo '<hr>';
// echo'<pre>';var_dump(Url::current());die;
