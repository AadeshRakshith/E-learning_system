<?php
include("rakshit/config.php");

$id = $_GET['id'];

$delQry = "DELETE FROM user_form  where id= '$id'";

if(mysqli_query($conn, $delQry)){
    header("Location:manageStudent.php");
}

?>