<?php
    require 'includes/database.php';
    $query = "SELECT * from players";                                    
    $queryResult = mysqli_query($dbcon, $query) or die("no connection on database"); 
?>