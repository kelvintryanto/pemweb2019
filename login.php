<?php
session_start();
include('config.php');
error_reporting(0);
if(isset($_POST['login']))
{
  $username=$_POST['username'];
  $password=md5($_POST['password']);
  $sql ="SELECT username,password,first_name FROM users WHERE username=:username and password=:password";
  $query= $dbh -> prepare($sql);
  $query-> bindParam(':username', $username, PDO::PARAM_STR);
  $query-> bindParam(':password', $password, PDO::PARAM_STR);
  $query-> execute();
  $results=$query->fetchAll(PDO::FETCH_OBJ);
  if($query->rowCount() > 0)
  {
    $_SESSION['login']=$_POST['username'];
    $_SESSION['fname']=$results->firstname;
    $currentpage=$_SERVER['REQUEST_URI'];
    echo "<script type='text/javascript'> document.location = 'timeline.php'; </script>";
  } else{
    
    echo "<script>alert('Invalid Username or Password');</script>";

  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Twittie</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    
</head>
<body> 
    <nav class="navbar fixed-top navbar-expand-md custom-navbar navbar-dark">
       <img class="navbar-brand" src="img/twittie.png" id="logo_custom" width="10%" style="width: 3%;height: 13%" alt="logo">
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
</nav> 
<div class="container mt-lg-5">
    <div class="row">
        <div class="col-md-6">
            <img src="img/twittie.png" style="width: 5%; height: 15%"> <a href="index.php">Home</a>
            <h4><b>Log in to Twittie</b></h4>

            <form method="POST">

                <div class="form-group">
                    <input class="form-control" type="text" name="username" placeholder="Username" required />
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="Password" required />
                </div>

                <input type="submit" class="btn btn-primary" name="login" value="Submit" />
                <label><input type="checkbox"> Remember me</label>

            </form>
            <p>New to Twittie? <a href="register.php">Sign up now</a></p>   
        </div>

        <div class="col-md-6">
            <!-- isi dengan sesuatu di sini -->
        </div>

    </div>
</div>

</body>
</html>