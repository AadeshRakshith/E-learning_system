<?php
$name = $_POST['username'];
$color = $_POST['color'];
$gender = $_POST['gender'];
$email = $_POST['email'];
if(!empty($name) || !empty($color) || !empty($gender) || !empty($email)){
    $host = "localhost";
    $dbUname = "root";
    $dbPaswrd= "";
    $dbName = "daatab";
    $conn =  new mysqli($host, $dbUname, $dbPaswrd, $dbName);
    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errorno().')'.mysqli_connect_error());
    } else{
            $SELECT = "SELECT email From form where email = ? limit 1";
            $insert = "INSERT into form (name, color, gender, email) values(?, ?, ?, ?)";
            $stmt = $conn->prepare($SELECT);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($email);
            $stmt->store_result();
            $rnum = $stmt->num_rows; 
            if ($rnum==0) {

                $stmt->close();
                
                $stmt = $conn->prepare($insert);

                $stmt->bind_param("ssss", $name, $color, $gender, $email);

                $stmt->execute();

                echo "New record inserted sucessfully";

                } else {

                echo "Someone already register using this email";

                $stmt->close();
                $conn->close();
        }
    }
}
else{
    echo "all fields are required";
    die();
}
?>



