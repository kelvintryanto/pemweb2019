<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Twittie</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <link rel="stylesheet" type="text/css" href="css/login.css"/>
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


<div class="container-fluid">
    <div class="container">
        <div class="formBox">
            <form>
                <div class="row">
                    <div class="col-sm-12">
                        <h1>Register</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="inputBox ">
                            <div class="inputText">First Name</div>
                            <input type="text" name="" class="input">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="inputBox">
                            <div class="inputText">Last Name</div>
                            <input type="text" name="" class="input">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="inputBox">
                            <div class="inputText">Email</div>
                            <input type="text" name="" class="input">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="inputBox">
                            <div class="inputText">Mobile</div>
                            <input type="text" name="" class="input">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="inputBox">
                            <div class="inputText">Username</div>
                            <input type="text" name="" class="input">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="inputBox">
                            <div class="inputText">New Password</div>
                            <input type="password" name="" class="input">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <input type="submit" name="" class="btn btn-outline-primary btn-block" value="Log in">
                    </div>
                </div>
            </form>
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