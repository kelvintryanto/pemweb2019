<?php
session_start();
include('config.php');
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
  <title>Twittie | Login</title>
  <link id="favicon" rel="shortcut icon" href="img/Twittie-Bird-icon.png" type="image/png">

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <!-- <link rel="stylesheet" type="text/css" href="css/main.css"/> -->
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

    <div class="container mt-lg-12" style="margin-top: 20px;">
      <div class="row">
        <div class="col-sm-2"></div>
        <div class="card col-sm-8" style="padding: 10px;">
          <div class="container">
            <div class="formBox">

              <form method="POST" name="signup" onsubmit="return valid();">

                <div style="margin-bottom: 20px;" class="row">
                  <div class="col-sm-12">
                    <h4><b>Log in to Twittie</b></h4>
                  </div>
                </div>


                <div class="row">
                  <div class="col-sm-12">
                    <div class="inputBox">
                      <div class="inputText">First Name</div>
                      <input type="text" name="username" class="input" required>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-12">
                    <div class="inputBox">
                      <div class="inputText">Last Name</div>
                      <input type="password" name="password" class="input" required>
                    </div>
                  </div>
                </div>

                <input type="submit" class="btn-submit" name="login" value="Submit" />
                <label><input type="checkbox"> Remember me</label>
              </form>

              <p>New to Twittie? <a href="register.php">Sign up now</a></p>   
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    $(".input").focus(function() {
      $(this).parent().addClass("focus");
    })
  </script>
</body>
</html>