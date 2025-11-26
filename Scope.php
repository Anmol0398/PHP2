<?php
$name="Ram";
$age =10;
function hello(){
    $GLOBALS['name'] ="Hari";//changing value of $name defined in global scope 
    global $name;//making $ name defined in global accessible in local scope

    $address ="Biratnagar";//creating local variable
    $GLOBALS['address']=$address;//creating global variables in local
    echo"Hello $name you live in $address"."<br>";
}
hello();
echo"Hello $name";
?>