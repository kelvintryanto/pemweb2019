<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Twittie</title>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" type="text/css" href="css/profile.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="font-awesome/css/all.min.css">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
  <div class="container">
    <div class="row">
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

    <!-- TEMPAT PROFIL -->
    <div class="row col-sm-12">
      <div style="padding-right: 30px; padding-left: 30px; text-align: center;" class="col-3">
        <div style="height: 150px; background: #666; border-radius: 10px" class="panel panel-default">
         <div class="profpic">
          <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
        </div><!-- /thumbnail -->
        <h4><strong>@selectusername</strong></h4>
      </div>
    </div>


    <div class="row col-9">
      <!-- TEMPAT COMMENT -->
      <div class="row">
        <div class="col-sm-12">
          <h3>User Comment Example</h3>
        </div><!-- /col-sm-12 -->
      </div><!-- /row -->

      <!-- REPEAT SELECT COMMENT USER DI SINI -->
      <div class="row col-11">
        <div class="col-sm-2">
          <div class="thumbnail">
            <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
          </div><!-- /thumbnail -->
        </div><!-- /col-sm-1 -->

        <div style="padding: 0;" class="col-sm-10">
          <div class="panel panel-default">
            <div class="panel-heading">
              <strong>@selectusername</strong> <span class="text-muted">commented 5 days ago</span>
            </div>
            <div class="panel-body">
              Select comment from comment table for each user
            </div><!-- /panel-body -->
          </div><!-- /panel panel-default -->
        </div><!-- /col-sm-5 -->
      </div><!-- /row col-sm-10-->

      <div id="reply" class="row col-sm-1">
        <ul>
          <li><i class="fas fa-reply"></i></li>
          <li><i class="fas fa-trash"></i></li>
        </ul>
      </div>

    </div> <!-- /row col-sm-9 -->
  </div>
</div><!-- /container -->
</body>
</html>