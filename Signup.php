<?php
$name_error = ' ';
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    // echo "GET";
    if(isset($_GET['signup'])){
        // echo "Sign Up Form Submitted";
        $name = $_GET['name'];

        //echo strlen($name);
        $name = trim($name);
        $strlen = strlen($name);
        //echo "$strlen";
        if(!$strlen){
            echo "<br> The name is empty, it is required";
            $name_error = "<span style = 'color:red;'>* Name is required</span>";
        }else{
            echo "<br> The name is: $name";
        }
        echo "<br> The name is: $name";
    }
      
    }



?>
<h2>Sign Up Form</h2>
<form action="">
    Name: <input type="text" name="name"> 
    <?php 
    echo  $name_error; 
    ?>
    <br>
    
    <input type="reset" value="Clear">
    <input type="submit" name ="signup" value="Sign Up">

</form>