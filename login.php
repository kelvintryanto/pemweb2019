<?php
session_start();
include('config.php');
error_reporting(0);
if(isset($_POST['login']))
{
  $username=$_POST['username'];
  $password=md5($_POST['password']);
  $sql ="SELECT username,password,firstname FROM users WHERE username=:username and password=:password";
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
    echo "<script type='text/javascript'> document.location = 'home.php'; </script>";
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
  <!-- CUSTOM CSS -->
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="font-awesome/css/all.min.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


</head>
<body style="background-color: #fff9ae"> 
  <div class="container">
    <header style="background-color: #fff9ae">
      <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="twitter" role="navigation">
            <li class="nav-item">
              <a class="nav-link" href="#"><b>About</b></a>
            </li>
            <li class="twitter__bird"><i class="fab fa-twitter"></i></li>
          </ul>
        </nav>
      </div>      
    </header>

    <div class="container mt-lg-12" style="margin-top: 20px;">
      <div class="row">
        <div class="col-sm-2"></div>
        <div class="card col-sm-8" style="padding: 10px;">
          <h4><b>Log in to Twittie</b></h4>
          <form method="POST">
            <div class="form-group">
              <input class="form-control" type="text" name="username" placeholder="Username" required />
            </div>
            <div class="form-group">
              <input class="form-control" type="password" name="password" placeholder="Password" required />
            </div>
            <input type="submit" class="btn-submit" name="login" value="Submit" />
            <label><input type="checkbox"> Remember me</label>
          </form>
          <p>New to Twittie? <a href="register.php">Sign up now</a></p>   
        </div>
        
        

      </div>
    </div>
  </div>
</body>
</html>