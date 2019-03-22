<?php
session_start();
include('config.php');
if(isset($_POST['login']))
{
  $username=$_POST['username'];
  $password=md5($_POST['password']);
  $sql ="SELECT firstname FROM users WHERE username=:username and password=:password";
  $query= $dbh -> prepare($sql);
  $query-> bindParam(':username', $username, PDO::PARAM_STR);
  $query-> bindParam(':password', $password, PDO::PARAM_STR);
  $query-> execute();
  $results=$query->fetchAll(PDO::FETCH_OBJ);
  if($query->rowCount())
  {
    $_SESSION['login']=$_POST['username'];
    $_SESSION['firstname']=$results->firstname;
    $currentpage=$_SERVER['REQUEST_URI'];
    echo "<script type='text/javascript'>document.location = 'home.php'; </script>";
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
  <link id="favicon" rel="shortcut icon" href="img/Twittie-Bird-icon.png" type="image/png">

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/main.css" />
</head>
<body class="bg-light">  
  <header>
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <div class="row">
          <div class="col">
            <form class="form-inline" method="POST">
              <form class="form-inline">
               <div class="form-group">
                <input type="text" class="form-control mb-2 mr-sm-2" name="username" placeholder="Username">
              </div>
              <div class="form-group">
                <input type="password" class="form-control mb-2 mr-sm-2" name="password" placeholder="Password">
              </div>
              <button type="submit" name="login" class="btn btn-outline-primary mb-2">Log in</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </header>

  <section>
    <div class="container">
      <div class="row col-md-12">
        <img src="img/tweety.png" style="text-align: right; height: 100px;">
        <!-- <p><b>Join Twitter today.</b></p> -->
        <div class="col-md-10" style="text-align: left;">
          <h1>See what’s happening in the world right now</h1>
          <p><b>Join Twittie today.</b></p>          
        </div>
      </div>
      <div class="row col-md-12">
        <a href="register.php" class="btn btn-primary col-md-6">Sign Up</a>
        <a href="login.php" class="btn btn-outline-primary col-md-6">Log in</a>
      </div>
    </div>
  </section>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/javascript.util/0.12.12/javascript.util.min.js" type="text/javascript"></script>
</html>