<?php

// echo $_GET [user_id] ;

include("db.php");

$user_id = $_GET['user_id'];

$sql = "SELECT * FROM blog WHERE user_id = '$user_id' ";

$result = mysqli_query($connect, $sql); 

$row = mysqli_fetch_assoc($result);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>view user</title>
</head>
<body>

<p> First name :<?php echo $row['comments'] ?></p>

  
</body>
</html>