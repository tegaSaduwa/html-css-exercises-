<?php
include("db.php");

$sql = "SELECT * FROM users";

$result = mysqli_query($connect, $sql);



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>fetcting data</title>
</head>

<body>

<table>
  <thead>
    <tr>
      <th>S/N</th>
      <th>FIRST NAME</th>
      <th>LAST NAME</th>
      <th>PHONE</th>
      <th>EMAIL</th>
      <th>ACTION</th>
    </tr>
  </thead>


<tbody>

  <?php
    $no= 0;
    while ($row = mysqli_fetch_assoc($result)):
    $no++
  ?>
 
    <tr>
      <td><?php echo $no ?></td>
      <td><?php echo $row['first_name'] ?></td>
      <td><?php echo $row['last_name'] ?></td>
      <td><?php echo $row['phone'] ?></td>
      <td><?php echo $row['email'] ?></td>
      <td><a href="view_user.php?user_id=<?php echo $row['user_id'] ?>">
      view user</a></td>
    </tr>

    <?php endwhile; ?>

  </tbody>
</table>
  
</body>
</html>


  