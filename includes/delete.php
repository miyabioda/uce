<?php
    include 'database.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "DELETE FROM players where id=$id";
        if ($queryResult = mysqli_query($dbcon, $query)) {
            $success=true;
        }
        else{
            $success=false;
        }
        header("Location:../player.php?delete_success=".$success);  
    }   
    else {
        $error=true;
        header("Location:../player.php?delete_error=".$error);  
    }
?>

