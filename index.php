<?php

echo "Hello world";

function f(){
    $arr=func_get_args();
    $average = array_sum($arr)/count($arr);
    echo $average;
}
echo " 1st : ";
f(2,3,5,6,7);
echo " 2nd : ";
f(1,3,5);


$cookie_name = "Web";
$cookie_value = "Back";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 

echo $_COOKIE["Web"];


?>