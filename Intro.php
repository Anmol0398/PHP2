<?php

$name1 = "ram";
$name2 = "shyam";

var_dump($name1);
var_dump($name2);

print_r($name2);

echo "<br>" . $name1 . "<br>";
echo "<br>" . $name1[2] . "<br>";

$first_name = "Ram";
$last_name = "Pokharel";

//String Concatination
$full_name = $first_name . " " . $last_name;
echo $full_name;

//String Interpolation
echo "<br>Hello $full_name";

//Finding Length
echo strlen($full_name);
echo "<br>";

$random = "   Hello World    ";
$random_rt = rtrim($random);
echo strlen($random_rt);
echo "<br>";

$random_lt = ltrim($random);
echo strlen($random_lt);
echo "<br>";

$random_t = trim($random);
echo strlen($random_t);
echo "<br>";

$fruit = "Dragon aple";
$char = 'a';
// $pos = strpos($fruit, $char);
$pos = strpos($fruit, $char,4);
echo "The Character $char is at index: $pos";
// echo "The Character is at: " . strpos($fruit, 'a')
echo "<br>";


//Finding q exists in apple or not
if(strpos('apple', 'q')){
    echo "q exists in apple";
}else{
    echo "q does not exist in apple";
}


//reverse

$string = "orange";
$str1 = strrev($string);
echo "<br>" . $str1;

// Checking whether the string is palendrom or not
$string = "madam";
$mad_rev = strrev($string);

//checking
//strcmp($str1, $str2); returns -,0,+

if(strcmp($string,$mad_rev)==0){
    echo "$string is a palendrom";
}
else{
    echo "$string is not a palendrom";
}

$users = "ram,shyam,hari,sita,gita";
//$users = "ram shyam hari sita gita";

print_r(explode('a',$users));

$message = ["Hello","Students","How","are","you"];

$message_string = implode(" ",$message);
echo $message_string;



?>