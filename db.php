<?php

#PROCEDURAL APPROACH TO CONNECTING DATABASE {SPECIFICALLY FOR MYSQL}

$database = "class";
$username = "root";
$password = "Mercy123";
$host = "localhost";

$connect = mysqli_connect($host, $username, $password, $database);

if(mysqli_connect_errno($connect)){

 echo "failed to connect to database: " . mysqli_connect_error();
 exit();

}else {

  // echo "connection to database successful";

}





?>


