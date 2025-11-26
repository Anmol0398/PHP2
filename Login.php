<?php

$errors = [];
$username = $password = "";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['Login_btn'])){
        echo "Login Button Clicked";

        $username = trim( $_POST['username']);
        $password = $_POST['password'];

        if(strlen( $username ) == 0){
            echo "Username is required";
            $errors['username'] = "Username is required";
        }

        echo $username . " " . $password;
        
        
    }
}
?>

<h1>Login Form</h1>
<form method = "POST">
    Username: <input type="text" name="username" id = "username" value = "
    <?php echo $username;  ?>" id = "Username">
    <?php
    if(array_key_exists('username', $errors)){
    echo "<span style = 'color:red'>" . $errors['username'] . "</span>";
}
    ?>
    <br><br>
    Password: <input type="password" name="password" id = "password"><br><br>
    <input type = "reset" value = "Clear">
    <input type="submit" name = "Login_btn" value="Login">
</form>