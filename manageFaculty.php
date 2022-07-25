<?php
session_start();
include("rakshit/config.php");
if(!$_SESSION['admin_name']){
    header("Location:rakshit/login_form.php");
}

$query = "SELECT * from user_form where user_type= 'faculty'";
$result = mysqli_query($conn, $query);

?>
<html>
    <head>
        <title>Faculty Record</title>
        <link rel="stylesheet" href="manageFaculty1.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">

    </head>
    <body>
        <main>
            
                <section class="top">
                    <div class="hero_heading">
                        Faculty members
                    </div>
                    <div class="subheading">
                            Here you can view, edit, and delete faculty members' records.
                    </div>
                </section>

            <div class="faculty_list">
                <table class="table is-striped is-fullwidth">
                    <tr class="th tableh">
                        <th >ID</th>
                        <th>Faculty Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th style=" text-align:center; " >Action</th>
                    </tr>
                    <?php
                        $counter=1;
                        while($row = mysqli_fetch_assoc($result)){
                            
                    ?>
                    <tr>
                        <td class="cell" ><?php echo $counter ?></td>
                        <td class="cell" ><?php echo $row['name'] ?></td>
                        <td class="cell" ><?php echo $row['email'] ?></td>
                        <td class="cell" ><?php echo $row['password'] ?></td>
                        <td class="action-buttons cell"><a href="editFaculty.php?id=<?php echo $row['id'] ?>"><button class="button is-primary is-small">Edit</button></a>
                        <a href="faculty_delete.php?id=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure you want to delete this faculty record?')" ><button class="button is-danger is-small" >delete</button></a></td>
                    </tr>
                      <?php  
                    $counter++;
                    } ?>
                  </table>
            </div>
        </main>
    </body>
</html>