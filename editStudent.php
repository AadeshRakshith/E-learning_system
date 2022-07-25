<?php

session_start();
include("rakshit/config.php");
if(!$_SESSION['admin_name']){
    header("Location:rakshit/login_form.php");
}
$id = $_GET['id'];

$query = "SELECT * from user_form where id= '$id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);


if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   // $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $update = "UPDATE user_form SET name= '$name', email = '$email', password = '$pass' where id='$id'";
         mysqli_query($conn, $update);
         header('location:manageStudent.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>edit Student</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="rakshit/css/style.css">

</head>
<body>
   
<div class="body1">
   <div class="form-container">
   
      <form action="" method="post">
         <h3>Edit Student</h3>
         <?php
         if(isset($error)){
            foreach($error as $error){
               echo '<span class="error-msg">'.$error.'</span>';
            };
         };
         ?>
         <input type="text" name="name" required placeholder="enter your name" value="<?php echo $row['name'] ?>">
         <input type="email" name="email" required placeholder="enter your email" value="<?php echo $row['email'] ?>">
         <input type="password" name="password" required placeholder="enter your password" value="<?php echo $row['password'] ?>">
         <input type="password" name="cpassword" required placeholder="confirm your password" value="<?php echo $row['password'] ?>">
   
         <input type="submit" name="submit" value="SAVE CHANGES" class="form-btn">
      </form>
   
   </div>
</div>

</body>
</html>