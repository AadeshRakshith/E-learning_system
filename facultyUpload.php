<?php
$file = $_FILES['file'];
if(!empty($file)){

    $host = "localhost";
    $dbUname = "root";
    $dbPaswrd= "";
    $dbName = "daatab";
    $conn =  new mysqli($host, $dbUname, $dbPaswrd, $dbName);
    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errorno().')'.mysqli_connect_error());
    } else{
            $name = $_FILES['file']['name'];
            $tmp_name = $_FILES['file']['tmp_name'];
            mysqli_query($conn, "INSERT INTO upload_file (name) values('$name')");
            move_uploaded_file($tmp_name, "C:/xampp/htdocs/E-learning/Uploaded_Items/".$name);
            header("Location:faculty.php");
        }
    }
else{
    echo "Please upload a file";
    die();
}
?>