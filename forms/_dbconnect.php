<?php
    $server="localhost";
    $username='root';
    $password='';
    $database='Election';
    $conn=mysqli_connect($server,$username,$password,$database);
    if(!$conn){
        die ( mysqli_connect_error());
    }
    else{
        // echo "database connection established<br>";
    }
?>