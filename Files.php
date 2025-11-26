<?php
echo "<pre>";
print_r($_FILES);
echo "</pre>";
?>

<form method = "POST" enctype="multipart/form-data">
    File: <input type = "file" name = "profile_pic" id = ""><br>
     File: <input type = "file" name = "profile_pic1" id = ""><br>
      File: <input type = "file" name = "profile_pic2" id = ""><br>
    <input type = "submit" value = "Upload">
</form>