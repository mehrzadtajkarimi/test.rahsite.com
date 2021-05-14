<?php

// use App\Utilities\Asset;
// use App\Utilities\Url;

use App\Core\Request;

include "bootstrap/init.php";

$echo =new Request();
echo $echo->uri();


// echo Asset::css('style.css');
// echo '<hr>';
// echo'<pre>';var_dump(Url::current());die;
