<?php
$data = [1=>2,2=>3,3=>5];
$a= serialize($data);
$bd= unserialize($a);
print_r($a) ;
