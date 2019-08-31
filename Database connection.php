<?php 	

$localhost = "localhost"; //Server Name
$username = "root"; //Server User Name
$password = ""; //Server Password 
$dbname = ""; //Database Name

// db connection
$connect = new mysqli($localhost, $username, $password, $dbname); // check connection

  if($connect->connect_error) {
    die("Connection Failed : " . $connect->connect_error);
  } 
  else {
  // echo "Successfully connected";
  }

?>
