<?php
$conn = mysql_connect("localhost", "root",""); 
if (!$conn) {      
die($conn->connect_error);     
}     

mysql_select_db ("photographers"); 
?>