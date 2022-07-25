<!DOCTYPE html>
<html lang="en">
  <head>
     <title>E-learning system</title>
     <link rel="stylesheet" href="css/indexstyle.css">
  </head>
  <body>
     <div class="main">
          <div class="navbar">
             <div class="icon">
                <h2 class="logo">Infinite <br>E-learning System</h2>
             </div>

             <div class="menu">
               <ul>
                  <li><a href="index.php">HOME</a></li>
                  <li><a href="about.php">ABOUT</a></li>
                  <li><a href="contact.php">CONTACT</a></li>
               </ul>
           </div>
           <div class="search">
           <br><br>
              <form method="GET" action="http://www.google.com/search">
                  <input type="text" name="q"/  >
                  <input type="submit" value="Search">
              </form>
           </div>
         </div>  
           <div class="contents">
               <h1> <br><br><br><br>E-learning <br><span>platform</span> <br> for Students.</h1>
               <p class="par">An online learning platform that offers a student everything they 
                 need in one place:<br> lectures, resources, opportunities
                 to meet and chat with other students, teachers and more.<br>It is also an excellent way for
                 the student and the teacher to monitor student progress.
               </p>

                <div class="form">
                     <h2>Login Here</h2>
                     <div class="category">
                           <button class="butn"><a href="user_page.php">Student</a></button>
                           <button class="butn"><a href="faculty_page.php">Faculty</a></button>
                           <button class="butn"><a href="admin_page.php">Admin</a></button>
                     </div>   
                      
                      <p class="link">Don't have an account<br>
                      <a href="register_form.php">Create now</a></p>
                </div>
        
           </div>
     </div> 
  </body>
</html>