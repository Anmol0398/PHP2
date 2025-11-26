<?php
print_r($_GET);

if(isset($_GET['btn_search'])){
    echo "Search Button Clicked";
}

if(isset($_GET['btn_search'])){
    echo "Search Country Button Clicked";
}

?>
<h2>Search Users</h2>
<form action="search.php" method = "GET">
    Search: <input type="text" name="search" id = "q"><br>
    <input type = "reset" value = "Clear">
    <input type = "submit" name = "btn_search" value = "Search">
</form>

<form>

</form>


<h2>Search Vehicles</h2>
<form>
    Search: <input type="text" name="search" id = "q"><br>
    <input type = "reset" value = "Clear">
    <input type = "submit" name = "btn_search" value = "Search">
</form>