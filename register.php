<?php
//error_reporting(0);
session_start();
include('config.php');
error_reporting(0);
if(isset($_POST['signup']))
{
  $fname=$_POST['firstname'];
  $lname=$_POST['lastname'];
  $email=$_POST['emailid']; 
  $mobile=$_POST['mobileno'];
  $username=$_POST['username'];
  $password=md5($_POST['password']); 
  $sql="INSERT INTO  users(firstname,lastname,email,mobile,username,password) VALUES(:fname,:lname,:email,:mobile,:username,:password)";
  $query = $dbh->prepare($sql);
  $query->bindParam(':fname',$fname,PDO::PARAM_STR);
  $query->bindParam(':lname',$lname,PDO::PARAM_STR);
  $query->bindParam(':email',$email,PDO::PARAM_STR);
  $query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
  $query->bindParam(':username',$username,PDO::PARAM_STR);
  $query->bindParam(':password',$password,PDO::PARAM_STR);
  $query->execute();
  $lastInsertId = $dbh->lastInsertId();
  if($lastInsertId)
  {
    echo "<script>alert('Registration successfull. Now you can login');document.location='login.php'</script>";
  }
  else 
  {
    echo "<script>alert('Something went wrong. Please try again');</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Twittie | Register New Account</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" type="text/css" href="css/main.css"/>
  <link rel="stylesheet" type="text/css" href="css/login.css"/>
  <!-- CUSTOM CSS -->
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="font-awesome/css/all.min.css">

</head>
<body style="background-color: #fff9ae"> 
  <div class="container">
    <header style="background-color: #fff9ae">
      <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="twitter" role="navigation">
            <li class="nav-item">
              <a href="index.php" class="nav-link">
                  <b>Home</b>
              </a>
            </li>
            <li class="nav-item">
              <a href="about.php" class="nav-link">
                <b>About</b>
              </a>
            </li>
            <li href="index.php" class="twitter__bird"><img style="height: 50px; width: 50px;" src="img/Twittie-Bird-icon.png"></li>
          </ul>
        </nav>
      </div>      
    </header>

    <!--<nav class="navbar fixed-top navbar-expand-md custom-navbar navbar-dark">
       <img class="twitter__bird" class="navbar-brand" src="img/twittie.png" id="logo_custom" width="10%" style="width: 3%;height: 13%" alt="logo">
       <button class="navbar-toggler navbar-toggler-right custom-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon "></span>
    </button>
    <div class="collapse navbar-collapse " id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto ">
        <li class="nav-item">
          <a class="nav-link" href="index.php"><b>Home</b></a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#"><b>About</b></a>
      </li>
  </ul>
</div> 
</nav>-->


<div class="container mt-lg-12" style="margin-top: 20px;">
  <div class="row">
    <div class="col-sm-2"></div>
    <div class="card col-sm-8" style="padding: 10px;">
      <div class="container">
        <div class="formBox">
          
          <form method="POST" name="signup" onsubmit="return valid();">

            <div class="row">
              <div class="col-sm-12">
                <h1>Register</h1>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6">
                <div class="inputBox ">
                  <div class="inputText">First Name</div>
                  <input type="text" name="firstname" class="input" required>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="inputBox">
                  <div class="inputText">Last Name</div>
                  <input type="text" name="lastname" class="input" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6">
                <div class="inputBox">
                  <div class="inputText">Email</div>
                  <input type="text" name="emailid" class="input" required>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="inputBox">
                  <div class="inputText">Mobile</div>
                  <input type="text" name="mobileno" class="input" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12">
                <div class="inputBox">
                  <div class="inputText">Username</div>
                  <input type="text" name="username" class="input" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12">
                <div class="inputBox">
                  <div class="inputText">New Password</div>
                  <input type="password" name="password" class="input" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12">
                <input type="submit" name="signup" id="submit" class="btn btn-outline-primary btn-block" value="Signup" required>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/javascript.util/0.12.12/javascript.util.min.js" type="text/javascript"></script>
<script type="text/javascript">
  $(".input").focus(function() {
    $(this).parent().addClass("focus");
  })
</script>
</html>