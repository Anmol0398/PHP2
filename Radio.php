<?php
if($_SERVER['REQUEST_METHOD']='POST'){
    print_r($_POST);
    $gender=$_POST['gender'];
    if(strcmp($gender,"M")==0){
        $selected="Male";
     }
     elseif(strcmp($gender,"F"
     )==0){
        $selected="Female";
     }else{
        $selected="Other";
     }
    echo"You selected $selected";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <h1>FORM</h1>
        Name:
        <input type="text">
        <br>
        Phone:
        <input type="text">
        <br>
        Address:
        <input type="text">
        <br>
        Gender:
        <input type="radio" name="gender" value="M"<?php
        if($gender=='M')
            echo"checked";
            ?>>Male

      
       
        <input type="radio" name="gender" value="F"
        <?php
        if($gender=='F')
            echo"checked";
            ?>>Female
        <input type="radio" name="gender" value="O"<?php
        if($gender=='O')
            echo"checked";
            ?>>Other
        <br>
        <input type="submit" value="Find Gender">
    </form>
    
</body>
</html>