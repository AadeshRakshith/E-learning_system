<?php
session_start();
include("rakshit/config.php");
if(!$_SESSION['admin_name']){
    header("Location:rakshit/login_form.php");
}

$query = "SELECT * from user_form where user_type= 'user'";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html>
<head>
 <title>Admin student</title>
 <link rel="stylesheet" href="./manageStudent1.css">
 <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
 </head>
<body>
    <div class="container">

        <table>
            <tr>
            <th>SR.N0.</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th >ACTION</th>
            </tr>

            <?php
                        $counter=1;
                        while($row = mysqli_fetch_assoc($result)){
                            
                    ?>
           
            <tr>
            <td><?php echo $counter ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['password'] ?></td>
            <th  class="action-buttons" ><a href="editStudent.php?id=<?php echo $row['id'] ?>"><button class="edit">Edit</button></a>
                <a href="studentDelete.php?id=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure you want to delete this faculty record?')" ><button class="delete" >Delete</button></a></th>
            </tr>
            <?php
            $counter++;
                    } ?>
            
        </table>           

    </div>


</body>
</html>