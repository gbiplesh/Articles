<?php
require 'config.php';

// session_start();
            
    if(isset($_POST["submit"])) {
    
      $uName = $_POST['uName'];
      
      
    //remove Data           
    $remove = mysqli_query($conn, "UPDATE admins
									SET legal = '0'
									WHERE   adminUser = '$uName' ;");    
      
      if(!$remove) {
        die(mysqli_error($conn));
      } else {
        echo '<h1>Successfully Removed!</h1>';
      }
    }
     
?>
