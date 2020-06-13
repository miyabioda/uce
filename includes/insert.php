<?php
    require 'database.php';

    $email = $_POST['email'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $sex = $_POST['sex'];
    $contact = $_POST['contact'];

    $query = "INSERT INTO players (email, fname, mname, lname, sex, contact) VALUES ('$email', '$fname', '$mname', '$lname', '$sex', '$contact')";
    
    if ($queryResult = mysqli_query($dbcon, $query)) {
        $success=true;
    }
    else{
         $success=false;
         echo"<script>console.log('.$query')</script>";
    } 
    header("Location:../home.php?success=".$success); 
?>
