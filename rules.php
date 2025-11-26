<?php
declare (strict_types=1);
//enforcing data type on arguments
function hello(string $name, int $age){
    echo "Hello $name your age is $age"."<br>";
}
hello("Ram", 23);

//enforcing on return data type
function hi(string $name, int $age){
    // return "Hello $name your age is $age";
    return [$name, $age];
}
// echo hi("Shyam", 24);
print_r( hi("Shyam", 24));
?>

