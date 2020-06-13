<?php
    include 'database.php';

    if (isset($_GET['id'])) {

        if (!empty($_POST)) {
            $id = $_GET['id'];
            $email = $_POST['email'];
            $fname = $_POST['fname'];
            $mname = $_POST['mname'];
            $lname = $_POST['lname'];
            $sex = $_POST['sex'];
            $contact = $_POST['contact'];

            $query = "UPDATE players set email='$email', fname='$fname', mname='$mname', lname='$lname', sex='$sex', contact='$contact' WHERE id='$id'";
            if ($queryResult = mysqli_query($dbcon, $query)) {
                $success=true;
                $notification ="";
            }
            else{
                 $success=false;
            }
            header("Location:player.php?update_success=".$success);  
        }
        $id = $_GET['id'];
        $query = "Select * from players where id='$id'";                                   
        $queryResult = mysqli_query($dbcon, $query) or die("error on query"); 
    }
    else {
        $error=true;
        header("Location:../player.php?update_error=".$error);  
    }
?>

