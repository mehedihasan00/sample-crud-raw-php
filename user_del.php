<?php require_once("includes/db_connection.php"); ?>
<?php require_once("includes/function.php"); ?>
<?php 
    $id = $_GET["id"];
    $delete_user = del_user_by_id($id);
    redirect_to("index.php");
?>
<?php
    // Close the database connection
    if(isset($connection)) {
        mysqli_close($connection);
    }
?>