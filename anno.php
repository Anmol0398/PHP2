<?php

$greet = function($name){
    return "Hello $name"."<br>";
};

$res = $greet("Ram");
echo $res;

$prefix = "Mr. ";

$formatName = function($name) use ($prefix){
    return $prefix . $name;
};

echo $formatName("Ram"); // Outputs: Mr. Ram

?>