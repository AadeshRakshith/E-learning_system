<?php
$host = "localhost";
$dbUname = "root";
$dbPaswrd= "";
$dbName = "daatab";
$conn =  new mysqli($host, $dbUname, $dbPaswrd, $dbName);

$query = "SELECT * from form";

$details = mysqli_query($conn, $query);
// print_r($details);
if($details){
    $row = mysqli_fetch_array($details);
    print_r($row);
}

?>

<html>
    <head>

    </head>
    <body>
        
    </body>
</html>