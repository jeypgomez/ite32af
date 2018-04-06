<!DOCTYPE html>
<html>
<?php

if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

?>
<body>

</body>
