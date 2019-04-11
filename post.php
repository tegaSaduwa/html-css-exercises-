<?php 

include("db.php");

#isset() and empty() are inbuilt functions
#below is an example of nested if statements

if (isset($_POST['submit'])){

  $error = [];


 #google how to validate email
  if (empty($_POST['email'])) {
    $error['email'] = "Please enter your email";
  }

 
  if (empty($_POST['comments'])) {
    $error['comments'] = "enter comment";
  }

  

  if(empty($error)) {

    
    $email = $_POST['email'];
    $comment = $_POST['comments'];
    $user_id = uniqid();

    $sql = "INSERT INTO blog(user_id, comments, email ) VALUES( '$user_id', '$comment', '$email')";

    if (mysqli_query($connect, $sql)):
      echo "Application Submitted";

     $_POST['email'] = "";
     $_POST['comments'] = "";


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
  <title>blog</title>
  <link rel="stylesheet" href="bootstrap.min.css">
  <style>
  .shoe {height:378px;}
  </style>
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

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand ml-5" href="#">ShakaraBlog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <!-- <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
       -->
         
    </div>
  </nav>
  <!-- end of navbar -->


<div class="section">
  <div class="container mt-5">
    <div class="row">
    <div class="col-md-3 mt-3"><div class="card">
      <img src="model1.jpg" class="card-img-top" alt="">
      <div class="card-body">
        <h6>Chris new collection </h6>
      </div>
    </div>   
</div>
      <div class="col-md-3 mt-3"><div class="card">
            <img src="shoe1.jpg" class="card-img-top shoe" alt="">
            <div class="card-body">
              <!-- <p class="text-danger">chris bought new house</p> -->
              <h6>Nikes new release</h6>
            </div>
          </div>   
      </div>
      <div class="col-md-3 mt-3"><div class="card">
            <img src="model2.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <h6>denims now in wallmart</h6>
            </div>
          </div>   
      </div>
      <div class="col-md-3 mt-3"><div class="card">
            <img src="phone1.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <h6>iphoneX crashing market</h6>
            </div>
          </div>   
      </div>



    </div>
  </div>
</div>


<div class="section2">
  <div class="container mt-5">
  <form action="" method="post">

<div class="form-group"><label for="">Email</label>
<input type="email" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?> " class="form-control"></div>


<div class="form-group"><label for="">comment</label>
<textarea name="comments" id="" cols="30" rows="10"value="<?php if(isset($_POST['comments'])) echo $_POST['comments']; ?> "  class="form-control"></textarea>
</div>



<div class="form-group">
<input type="Submit" value="Submit" name="submit" class="btn btn-primary">
</div>

</form> 

  </div>
</div>



<p><a href="get.php?user_id=<?php echo $row['user_id'] ?>">
 view comments</a></p>

 

<script src="bootstrap.min.js"></script>
</body>
</html>






