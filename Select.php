<?php
$countries=[
    "np"=>"Nepal",
    "in"=>"India",
    "ch"=>"China",
    "jp"=>"Japan"
];
$country=';';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $country=$_POST['country'];
    echo"You selected $country.<br>";
}

?>
<form action="" method="post">
    Select your country:
    <select name="country">
        <option value="Nepal"<?php if($country=='Nepal')
        echo"selected";?>>Nepal</option>
        <option value="India"<?php if($country=='India')
        echo"selected";?>>India</option>
        <option value="China"<?php if($country=='China')
        echo"selected";?>>China</option>
    </select><br>
    <input type="submit" value="Submit">
</form>