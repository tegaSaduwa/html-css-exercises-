<?php

// echo $_GET [user_id] ;

include("db.php");

$user_id = $_GET['user_id'];

$sql = "SELECT * FROM school WHERE user_id = '$user_id' ";

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

<p> the following are users information </p>
<p> First name :<?php echo $row['firstName'] ?></p>
<p> Last name: <?php echo $row['lastName'] ?></p>
<p> Phone: <?php echo $row['phone'] ?></p>
<p> Email: <?php echo $row['email'] ?></p>
<p> Age: <?php echo $row['age'] ?></p>


  
</body>
</html>
