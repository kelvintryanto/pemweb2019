<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Twittie</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/main.css" />
</head>
<body class="bg-light">  
    <header>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <form class="form-inline">
                         <div class="form-group">
                            <input type="text" class="form-control mb-2 mr-sm-2" name="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control mb-2 mr-sm-2" name="password" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-outline-primary mb-2">Log in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
               <img src="img/tweety.png" class="img-fluid" style="width: 20%;">
               <h1>See what’s happening in the world right now</h1>
               <p><b>Join Twitter today.</b></p>
               <a href="register.php" class="btn btn-primary">Sign Up</a> 
               <a href="login.php" class="btn btn-outline-primary">Log in</a>
           </div>
       </div>
   </div>
</section>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/javascript.util/0.12.12/javascript.util.min.js" type="text/javascript"></script>
</html>