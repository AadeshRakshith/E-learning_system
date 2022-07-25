<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main-Menu</title>
    
    <link rel="stylesheet" href="./chat/chat.css" />
    <script src="./chat/response.js" defer></script>
    <script src="./chat/chat.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="menu1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans&family=Inter:wght@800&display=swap" rel="stylesheet">
</head>
<body>
    <div class="heading">
        <h1>Main-Menu</h1>
    </div>
    <ul>
        <div class="list">
        <li><a href="./Calendar.html">Calender</a> </li>
        <li><a href="./projects.html">Projects</a> </li>
            <li><a href="./myprojects.php">My project</a></li>
            <li><a href="./document.html">Documentation</a></li>
            <li><a href="#" class="open">Upload</a></li>
            <li><a href="Item_view.php"> View</a></li>
            <li><a href="./knowledge.html">Knowledge</a></li>
            <!-- <li><a href="#">Chat</a> </li> -->
        </div>
<!-- MODAL -->
      <dialog class="modal">
        <form action="student_upload.php" method="post" enctype="multipart/form-data">
                    <div>  
                        <label for="chooseFile" class="fileLabel">
                          Select a file
                        <input type="file" name="file" id= "chooseFile">
                        </label>
                        <label for="upload" class="upload_submit">
                            Upload
                            <input type="submit" id="upload">
                        </label>
                        <div id="close">
                      <button class="close"> x </button>
                    </div>
                    </div>
                    
                </form>
        <!-- <button class="close"> close </button> -->
      </dialog>

    </ul>
    <div class="container">
      <div class="chat-header">
        <div class="logo">
          <img src="./chat/chatLogo.jpeg" alt="cwt" />
        </div>
        <div class="title">Let's Chat</div>
      </div>
      <div class="chat-body"></div>
      <div class="chat-input">
        <div class="input-sec">
          <input type="text" id="txtInput" placeholder="Type here" autofocus />
        </div>
        <div class="send">
          <img src="./chat/chatSend.jpeg" alt="send" />
        </div>
      </div>
    </div>

    <script>
      const modal = document.querySelector('.modal');
      const open = document.querySelector('.open');
      const close = document.querySelector('.close');
      
      
      open.addEventListener('click', ()=>{
        modal.showModal();
      })
      
      close.addEventListener('click', ()=>{
        modal.close();
      })
    </script>

</body>
</html>