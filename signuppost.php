<?php
$name_error =$email_error =$password_error =$password_confirm = ' ';
$name = $email = $password = $password_confirm = ' ';
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
            echo "<br> The email is empty, it is required";
            $email_error = "<span style = 'color:red;'>* Email is required</span>";
        }else{
            echo "<br> The name is: $email";
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                 $email_error = "<span style = 'color:red;'>* Email must be in format user@gmail.com</span>";

            }
        }
        $email = $_GET['email'];
        $password= $_GET['password'];
        $password_confirm = $_GET['password_confirm'];
        if (!strlen($password)){
            $password_error = "<span style = 'color:red;'>* Password is required</span>";
        }

        else if (strlen($password) < 6){
            $password_error = "<span style = 'color:red;'>* Password must be at least 6 characters</span>";
        }else{
            if(strcmp($password, $password_confirm) != 0){
                $password_error = "<span style = 'color:red;'>* Password and Confirm Password must match</span>";
            }
        }
    }
      
    }



?>
<h2>Sign Up Form</h2>
<form action="">
    Name: <input type="text" name="name" id="name" value="<?php echo $name; ?>"> 
    <?php 
    echo  $name_error; 
    ?>
    <br><br>

    Email: <input type="text" name="email" id ="email"value="<?php echo $email; ?>">
    <?php 
    echo  $email_error; 
    ?>
    <br><br>

    Password: <input type="text" name="password" id= "password" value="<?php echo $password; ?>">
    <?php 
    echo  $password_error; 
    ?>
    <br><br>

    Confirm Password: <input type="text" name="password_confirm" id="password_confirm" value="<?php echo $password_confirm; ?>">
    <?php
    echo $password_confirm;
    ?>
    <br><br>
    
    <input type="reset" value="Clear">
    <input type="submit" name ="signup" value="Sign Up">

</form>