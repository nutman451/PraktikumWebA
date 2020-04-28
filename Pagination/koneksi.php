<?php
    $conn = mysqli_connect("localhost","root","","db_pagination");
    if(mysqli_connect_errno()){
        echo "error".mysqli_connect_error();
        die();
    }
?>
