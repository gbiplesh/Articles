
<!DOCTYPE html>
<html>
<head>
    <title>aaa</title>
</head>
<body>
<?php
         
  if(isset($_POST["submit"])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
	
	
require 'config.php';

	$sql = "SELECT  * FROM users";

    $query =  mysqli_query($conn , $sql ) 
    or die("Failed to query database".mysql_error());



if (mysqli_num_rows($query) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($query)) {
		
		if ($row['userName'] == $username && $row['legal'] == '1') {
		
       header('Location: userpage.php');
       exit;

		} else {

      echo "<h3 style='font-weight: bold; color: red; text-align: center;'>Invalid User Found!</h3>";
		}
    }
} else {
    
      echo "<h3 style='font-weight: bold; color: red; text-align: center;'>Invalid User Found!</h3>";
}

mysqli_close($conn);    
	
	/*
 
   $row = mysql_fetch_array($query); 

   if ($row['userName'] == $username && $row['legal'] == '1')    {   

	echo $row['userName'];

    } else {

      echo $row['password'];
    }   

	*/
    }
	
?>



</body>
</html>

