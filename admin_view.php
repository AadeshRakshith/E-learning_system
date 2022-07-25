<?php

include("Database/conn.php");

$query = "SELECT * from upload_file";

$files = mysqli_query($conn, $query);

?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin View</title>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="admin_view.css">
    </head>
    <body>
        <div class="box"> 
            <header>
                <div class="title">
                    FILES
                </div>
                <div class="subtitle">
                    Here you can view and delete the uploaded files.
                </div>
            </header>

            <div class="list">
                <ul>
                    <?php
                    while($row = mysqli_fetch_assoc($files)){
                    ?>
                    <li>
                        
                        <a href="Uploaded_Items/<?php echo $row['name'] ?>"><span><?php echo $row['name'] ?></span></a>
                        <a href="file_delete.php?id=<?php echo $row['id']?>"> <button onclick="return confirm('Are you sure you want to delete this file?')">Delete file</button> </a>
                        
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </body>
</html>