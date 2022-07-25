<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="faculty.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <div class="insight">
            <div class="insight-1">
                <h1>FACULTY<span class="period">.</span></h1>
            </div>
            <div class="insight-2">
                <p class="para">
                    Teachers gather information from varoius sources so that this pool of information can be used to mine top notch material for students study from. Moreover, it is a part of their job to provide students with quality teaching. All the faculty members appointed sperately for the respective subjects have envisioned the path of students to have a sky rocketing career.
                    <br></br>
                    In this portal, faculty members can upload projects along with relevent files for notes. 
                    These uploaded items can be viewed aswell
                </p>
            </div>
        </div>

        <div class="options">
            <div class="upload_button">
                <form action="facultyUpload.php" method="post" enctype="multipart/form-data">
                    <div >  
                        <label for="chooseFile" class="fileLabel">
                            Select a file
                            <input type="file" name="file" id= "chooseFile">
                        </label>
                        <label for="upload" class="upload_submit">
                        <span class="upload_icon"><i class="fa-solid fa-arrow-up-from-bracket"></i></span>
                            Upload
                            <input type="submit" id="upload">
                        </label>
                    </div>
                </form>
            </div>
            <div class="view_button">
                <div>
                    <a href="Item_view.php"><button><span class="view-icon"><i class="fa-regular fa-eye"></i></span><span>  View</span></button></a>
                </div>
            </div>
        </div>
    </div>
</body>
</head>
</html>