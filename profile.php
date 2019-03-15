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
      <li class="nav-item">
          <a class="nav-link" href="logout.php"><b>Logout</b></a>
      </li>
  </ul>
</div>  
</nav> 
<div class="container mt-lg-5">
    <div class="row">
        <div class="col-md-6">
             <br>
             <br>
             <br>

        </div>

        <div class="col-md-6">
            <!-- isi dengan sesuatu di sini -->
        </div>

    </div>
</div>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Twittie</title>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" type="text/css" href="css/profile.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="font-awesome/css/all.min.css">


</head>
<body>
  <div class="container">
    <ul class="twitter" role="navigation">
      <li>
        <a href="profile.php">
          <div class="link"><i class="fa fa-home"></i>Profile</div>
        </a>
      </li>
      <li>
        <a href="login.php">
          <div class="link"><i class="fas fa-sign-out-alt"></i>Logout</div>
        </a>
      </li>
      <!-- <li><i class="fa fa-bell"></i>Notifications</li> -->
      <!-- <li><i class="fa fa-envelope"></i>Messages</li> -->
      <li class="twitter__bird"><i class="fab fa-twitter"></i></li>
      <li><form><input placeholder=" search twitter"/> <i class="fa fa-search"></i></form></li>
      <li><i class="fa fa-user-circle"></i></li>
      <li><button class="btn"> Tweet </button></li>
    </ul>
  </div>
</body>
</html>