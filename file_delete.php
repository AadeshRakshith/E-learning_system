<?php
include("Database/conn.php");

$id = $_GET['id'];

$delQry = "DELETE FROM upload_file where id= '$id'";

if(mysqli_query($conn, $delQry)){
    header("Location:admin_view.php");
}

?>
