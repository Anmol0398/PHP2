<?php
$countries=[
    "np"=>"Nepal",
    "in"=>"India",
    "ch"=>"China",
    "jp"=>"Japan"
];
// $country='';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $country=$_POST['country'];
    if(key_exists($country, $countries)){
        echo"You selected" . $countries[$country] . "<br>";

    }
    else{
    echo"Please select a country";
    }
}

?>
<form action="" method="post">
    Select your country:
    <select name="country">
        <option value="Nepal">Select A Country</option>
        <?php
        foreach($countries as $code =>$name){
           echo"<option value='$code'>$name</option>";
        }
        ?>
        
    </select>
    <br>
    <input type="submit" value="Submit">
</form>