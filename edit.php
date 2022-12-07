<?php
require 'config.php';

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
  
  <div class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
  
  <?php

      if(isset($_POST["submit"])) {
      
        $oHeading = $_POST['oHeading'];
        $nHeading = $_POST['nHeading'];
        $nArticle = $_POST['nArticle'];
        
      //Update Data           
      $update = mysqli_query($conn, "UPDATE articles 
                  SET heading = '$nHeading', content = '$nArticle'
                  WHERE heading = '$oHeading'; ");   
        
        if(!$update) {
          die(mysql_error($conn));
        } else {
          echo '<h2 align= "center" style="color:green;">Article Updated Successfully!</h2>';
        }
      }
  ?>



    
 <a href="index.php" target="_blank">View Articles</a><br>


  <form action="" method="POST" target="_self"">
    <fieldset>
      
    <legend><h3>Update information:</h3></legend> 
    <table width="100%" cellpadding="5px">
      <tr>
        <th>Update article from: </th>
        <td><input type="text" name="oHeading" placeholder=" Current Heading"></td>
      </tr>
      <tr>
        <th>New Heading: </th>
        <td><input type="text" name="nHeading" placeholder=" New Heading"></td>
      </tr>
      <tr>
        <th>New Article: </th>
        <td><textarea name="nArticle" rows="5" cols="40">Article Contents  </textarea></td>
      </tr>
       <tr>
        <th></th>
        <td>
        <button class="w3-button w3-light-grey w3-padding-large" type="submit"  name="submit">
          UPDATE
        </button>
      </td>
      </tr>
    </table>
    </fieldset>
  </form><br>
    
    <a href="loginpage.php">Go back</a>


	
  </div>



  
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

  