<?php
    $conn = new mysqli('localhost','root','','finedies');
    if($conn->connect_error){
        die("connection failed" . " " . $conn->connect_error);
    }
?>