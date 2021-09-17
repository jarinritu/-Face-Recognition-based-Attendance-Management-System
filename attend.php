<?php
$host = "localhost";
$dbName = "attendance";
$user="root";
$pass="";

// Create connection
$link = new mysqli('localhost','root','','attendance');

// Check connection
if ($link) {
  echo "";
}else{
echo "Connection Error";
}
?>