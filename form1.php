<?php 

include("db.php");

#isset() and empty() are inbuilt functions
#below is an example of nested if statements
$states = ['kano','kaduna','kastina','delta','edo','abuja'];

if (isset($_POST['submit'])){

  $error = [];

  if (empty($_POST['fname'])) {
       $error['fname'] = "Please enter your name";
  }

  if (empty($_POST['lname'])) {
    $error['lname'] = "Please enter your name";
}


 #google how to validate email
  if (empty($_POST['email'])) {
    $error['email'] = "Please enter your email";
  }

  if (empty($_POST['state'])) {
    $error['state'] = "Please choose state";
  }



  if (empty($_POST['phone'])) {
    $error['phone'] = "Please enter your phone";
  } else if(!is_numeric($_POST['phone'])) {
    $error['phone'] = "Please enter a valid phone";
  }


  if (empty($_POST['password'])) {
    $error['password'] = "Please enter your password";
  } 

  else if ($_POST['password'] != $_POST['cpassword']) {
           $error['password'] = "Please enter same password";
  }


  if(empty($error)) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $state = $_POST['state'];
    $password = md5($_POST['password']);
    $user_id = uniqid();

    $sql = "INSERT INTO users(user_id, first_name, last_name, phone, email, state,password) VALUES('$user_id', '$fname', '$lname', '$phone', '$email', '$state','$password')";

    if (mysqli_query($connect, $sql)):
      echo "Application Submitted";
     $_POST['fname'] = "";
     $_POST['lname'] = "";
     $_POST['phone'] = "";
     $_POST['email'] = "";
     $_POST['state'] = "";
     $password ="";

    else:
      echo "Application Declined";

    endif;
  }
  

}





?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP forms</title>
</head>
<body>

<p>

  <?php
      if(!empty($error)) {
        foreach ($error as $e) {
         echo "<b style='color:red'>" . $e . " </b> <br>";

        }
      }

  ?>

</p>


<form action="" method="post">
<p><label for="">First name</label>
<input type="text" name="fname" value="<?php if(isset($_POST['fname'])) echo $_POST['fname']; ?>">
</p>

<p><label for="">Last name</label>
<input type="text" name="lname" value="<?php if(isset($_POST['lname'])) echo $_POST['lname']; ?>">
</p>


<p><label for="">Phone number</label>
<input type="number" name="phone" value="<?php
 if(isset($_POST['phone'])) echo $_POST['phone']; ?>">
</p>

<p><label for="">Email</label>
<input type="email" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?> ">
</p>

<p><label for="">Password</label>
<input type="password" name="password">
</p>

<p><label for="">Confirm Password</label>
<input type="password" name="cpassword">
</p>


<p><label for="">State</label>
<select name="state" id="">
<option>select </option>

<?php
foreach ($states as $state) {
  echo "<option>$state</option>";
}
?>

<!-- <option>ekiti </option>
<option>ondo </option>
<option>abia </option>
<option> kano</option> -->

</select>
</p>


<p>
<input type="Submit" value="Submit" name="submit">
</p>


</form> 

</body>
</html>