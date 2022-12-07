<?php
require 'config.php';

session_start();
?>
<!DOCTYPE html>
<html>
<title>Biplesh B K: Designer</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 0px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<div class="w3-sidebar w3-bar-block" style="display:none" id="mySidebar">

	<button onclick="w3_close()" class="w3-bar-item w3-button w3-padding-large w3-hover-black"><span style="font-size:50px; padding:10px;">&times;</span></button>

  <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="about.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>ABOUT</p>
  </a>
  <a href="photos.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>PHOTOS</p>
  </a>
  <a href="contact.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>CONTACT</p>
  </a>
</div>

<script>
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
    <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">PHOTOS</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
  </div>
</div>

  <button class="w3-button w3-xlarge" onclick="w3_open()">&#9776;</button>
  
  <!-- Page content -->
<?php

            
        if(isset($_POST["submit"])) {
        
          $fname = $_POST['fname'];
          $username = $_POST['username'];
          $email = $_POST['email'];
          $sex = $_POST['sex'];
          $password = $_POST['password'];
          
          
        //Insert Data           
        $insert = mysqli_query($conn, "INSERT INTO users (fullName, userName, email, sex, password)
                    VALUES ('$fname', '$username', '$email', '$sex', '$password')");    
          
          if(!$insert) {
            die(mysqli_error($conn));
          } else {
            echo '';
          }
        }
      
            
            



?>


  <div class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
  
  <h1>Successfully Signed in!</h1>
  


  <form action="upload.php" method="POST">
    <fieldset>
      <legend><h3>Upload a new article: </h3></legend>
        
      
      <input type="text" name="heading" placeholder="Heading"><br><br>
      <textarea name="content" rows="5" cols="60">Article Contents  </textarea><br>
      
      <button class="w3-button w3-light-grey w3-padding-large" type="submit"  name="submit" id="insert" >
        INSERT
      </button>
    </fieldset>
  </form><br>

  
  
  <a href="edit.php">Edit article</a><br>
  <a href="delete.php">Delete article </a><br>
  <a href="index.php">Logout </a><br>
  
  
    <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  <!-- End footer -->
  </footer>

<!-- END PAGE CONTENT -->
</div>

</body>
</html>

  