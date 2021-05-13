<?php
define('BASEPATH',$_SERVER['DOCUMENT_ROOT'].'/');



include BASEPATH . "vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(BASEPATH);
$dotenv->load();

include BASEPATH . "helpers/helper.php";