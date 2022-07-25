<?php

include("Database/conn.php");

$query = "SELECT name from upload_file";

$files = mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viewing</title>
    <link rel="stylesheet" href="item_view11.css">
</head>
<body>
    <div class="hero">
    <div class="heading">
                <h1>Uploaded Items</h1>
            </div>
        <header>
            <h3>
                Click on items to download and view.
            </h3>
        </header>
        <div class="box">
            <!-- <div class="heading">
                <h1>Uploaded Items</h1>
            </div> -->

            <div class="list">
                <ul>
                    <?php
                    while($row = mysqli_fetch_assoc($files)){
                    ?>
                    <li>
                        
                        <a href="Uploaded_Items/<?php echo $row['name'] ?>" ><span><?php echo $row['name'] ?></span></a>
                        
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>    
        
    </div>
</body>
</head>
</html>
