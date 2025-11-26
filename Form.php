<?php
// if($_SERVER['REQUEST_METHOD'] == "GET"){
//     echo "GET method used";

//     print_r($_GET);

//     if(isset($_GET['Search Button'])){
//         $search = $_GET['search'];
//         $password = $_GET['password'];
//         echo "Form Date: " . $search . " " . $password . "<br>";
//     }

// }

// if($_SERVER['REQUEST_METHOD'] == "POST"){
//     echo "POST method used";

//     $search = $_POST['search'];
//     $password = $_POST['password'];
//     echo "Form Date: " . $search . " " . $password . "<br>";
// }

print_r($_REQUEST);

echo $_SERVER['PHP_SELF'] . "script is running";

?>
    <form method = "GET">
    <h1>Search Form</h1>
    Search: <input type = "text" name = "search" id = "search"><br>
    Password: <input type = "password" name = "password" id = "password"><br>
    
    <input type = "reset" value = "Clear">
    <input type = "submit" name = "Search Button" value = "Search">
</form>