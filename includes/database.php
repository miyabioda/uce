<?php
    $server = 'localhost';
    $username ='root';
    $password = '';
    $database = 'uce';
    
    $dbcon = mysqli_connect($server, $username, $password, $database) or die("database connection error"); 
?>