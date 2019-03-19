<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Twittie</title>

    <!-- CUSTOM CSS -->
  <link rel="stylesheet" type="text/css" href="css/profile.css">

  <!-- CSS BOOTSTRAP -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


  <!-- JQUERY -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>


  <!-- JS BOOTSTRAP -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="font-awesome/css/all.min.css">

  <!-- POPPER.JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

  <!-- CUSTOM JS -->
  <script type="text/javascript" src="js/script.js"></script>

</head>

<body>
  <div class="container">
    <header>
      <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="twitter" role="navigation">
            <li>
              <a href="home.php">
                <div class="link"><i class="fa fa-home"></i>Home</div>
              </a>
            </li>
            <li>
              
            </li>
            <li class="twitter__bird"><i class="fab fa-twitter"></i></li>
            <li><form><input placeholder=" search twitter"/> <i class="fa fa-search"></i></form></li>
            <li class="btn-group">
              <i class="fa fa-user-circle" data-toggle="dropdown"></i>
              <div class="dropdown-menu dropdown-menu-right">
                <button class="dropdown-item" type="button">My Profile</button>
                <button class="dropdown-item" type="button">Edit Profile</button>
                <div class="dropdown-divider"></div>                
                <a href="login.php" class="dropdown-item">
                  <div class="link"><i class="fas fa-sign-out-alt"></i>Logout</div>
                </a>
              </div>
            </li>
            <li><button class="btn" data-toggle="modal" data-target="#statusModal"> Tweet </button></li>
          </ul>
        </nav>
      </div>      
    </header>

    <!-- TEMPAT PROFIL -->
    <div style="margin: 0;padding: 0;" class="row col-sm-12">
      <div style="text-align: center; margin: 0; margin-right: 10px; " class="row col-3 center-block">
        <div style="height:165px; background: #666; border-radius: 10px; padding: 0 10px 10px 10px;" class="card">
          <div class="profpic">
            <img style="cursor: pointer;" class="img-responsive user-photo center-block" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
          </div><!-- /thumbnail -->
          <h4><strong>@selectusername</strong></h4>
        </div>
      </div>


      <div style="padding-right: 0;" class="row col-9">
        <!-- TEMPAT COMMENT -->
        <div class="row">
          <div class="col-sm-12">
            <h3>Comment & Status</h3>
          </div><!-- /col-sm-12 -->
        </div><!-- /row -->

        <!-- TULIS STATUS -->
        <div style="padding: 0;" class="row col-12">
          <div style="padding-left: 0;" class="col-sm-1">
            <div style="border: 0;" class="thumbnail">
              <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
            </div><!-- /thumbnail -->
          </div><!-- /col-sm-1 -->

          <div style="padding: 0; margin-left: -5px;" class="col-sm-11">
            <div class="card">
              <div class="card-header">
                <strong>@selectusername</strong>
              </div>
              <div class="card-body">
                <form class="tweeting" method="post">
                  <input class="col-sm-9" type="" name="status" placeholder="Select comment from comment table for each user..." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Select comment from comment table for each user...'">
                  <button class="btn col-sm-2">Tweet</button>
                </form>
              </div><!-- /card-body -->
            </div><!-- /card -->
          </div><!-- /col-sm-10 -->
        </div><!-- /row col-12-->

        <!-- TIMELINE 1-->
        <div style="padding: 0;" class="row col-12">
          <div style="padding-left: 0;" class="col-sm-1">
            <div style="border: 0;" class="thumbnail">
              <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
            </div><!-- /thumbnail -->
          </div><!-- /col-sm-1 -->

          <div style="padding: 0; margin-left: -5px;" class="col-sm-11">
            <div class="card">
              <div class="card-header">
                <strong>@selectusername</strong> <span class="text-muted">commented 5 days ago</span>
              </div>
              <div class="card-body">
                <form>
                  <p style="padding: 0; margin-bottom: 10px; border-bottom: 1px solid #ddd;" class="col-sm-12">Select comment from comment table for each user...Select comment from comment table for each user...Select comment from comment table for each user...Select comment from comment table for each user...</p>
                  <div class="col-sm-12">
                    <a href="#"><i style="text-align: center;" class="fas fa-reply col-sm-2" name="reply" data-toggle="modal" data-target="#replyModal"> Reply</i></a>
                    <a href=""><i style="text-align: center;" class="fas fa-trash col-sm-2" name="delete"> Delete</i></a>
                  </div> <!-- /col-sm-12 -->
                </form>                  
              </div><!-- /card-body -->
            </div><!-- /card -->
          </div><!-- /col-sm-10 -->
        </div><!-- /r ow col-12-->
        <!-- END TIMELINE 1-->

        <!-- TIMELINE 2-->
        <div style="padding: 0;" class="row col-12">
          <div style="padding-left: 0;" class="col-sm-1">
            <div style="border: 0;" class="thumbnail">
              <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
            </div><!-- /thumbnail -->
          </div><!-- /col-sm-1 -->

          <div style="padding: 0; margin-left: -5px;" class="col-sm-11">
            <div class="card">
              <div class="card-header">
                <strong>@selectusername</strong> <span class="text-muted">commented 5 days ago</span>
              </div>
              <div class="card-body">
                <form>
                 <p style="padding: 0; margin-bottom: 10px; border-bottom: 1px solid #ddd;" class="col-sm-12">Select comment from comment table for each user...Select comment from comment table for each user...Select comment from comment table for each user...Select comment from comment table for each user...</p>
                  <div class="col-sm-12">
                    <a href="#"><i style="text-align: center;" class="fas fa-heart col-sm-2" name="like"> Like</i></a>
                    <a href="#" role="button" data-toggle="modal" data-target="#replyModal"><i style="text-align: center;" class="fas fa-reply col-sm-2" name="reply"> Reply</i></a>
                    <a href="#"><i style="text-align: center;" class="fas fa-flag col-sm-3" name="comments">Comments(0)</i></a>
                    <a href=""><i style="text-align: center;" class="fas fa-trash col-sm-2" name="delete"> Delete</i></a>
                  </div> <!-- /col-sm-12 -->
                </form>                  
              </div><!-- /card-body -->
            </div><!-- /card -->
          </div><!-- /col-sm-10 -->              
        </div><!-- /row col-12-->
        <!-- END TIMELINE 2-->

        <!-- TIMELINE 3-->
        <div style="padding: 0;" class="row col-12">
          <div style="padding-left: 0;" class="col-sm-1">
            <div style="border: 0;" class="thumbnail">
              <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
            </div><!-- /thumbnail -->
          </div><!-- /col-sm-1 -->

          <div style="padding: 0; margin-left: -5px;" class="col-sm-11">
            <div class="card">
              <div class="card-header">
                <strong>@selectusername</strong> <span class="text-muted">commented 5 days ago</span>
              </div>
              <div class="card-body">
                <form>
                 <p style="padding: 0; margin-bottom: 10px; border-bottom: 1px solid #ddd;" class="col-sm-12">Select comment from comment table for each user...Select comment from comment table for each user...Select comment from comment table for each user...Select comment from comment table for each user...</p>
                  <div class="col-sm-12">
                    <a href="#"><i style="text-align: center;" class="fas fa-heart col-sm-2" name="like"> Like</i></a>
                    <a href="#"><i style="text-align: center;" class="fas fa-reply col-sm-2" name="reply" data-toggle="modal" data-target="#replyModal"> Reply</i></a>
                    <a href=""><i style="text-align: center;" class="fas fa-trash col-sm-2" name="delete"> Delete</i></a>
                  </div> <!-- /col-sm-12 -->
                </form>                  
              </div><!-- /card-body -->
            </div><!-- /card -->
          </div><!-- /col-sm-10 -->
        </div><!-- /r ow col-12-->
        <!-- END TIMELINE 3-->

        <!-- TIMELINE 4-->
        <div style="padding: 0;" class="row col-12">
          <div style="padding-left: 0;" class="col-sm-1">
            <div style="border: 0;" class="thumbnail">
              <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
            </div><!-- /thumbnail -->
          </div><!-- /col-sm-1 -->

          <div style="padding: 0; margin-left: -5px;" class="col-sm-11">
            <div class="card">
              <div class="card-header">
                <strong>@selectusername</strong> <span class="text-muted">commented 5 days ago</span>
              </div>
              <div class="card-body">
                <form>
                 <p style="padding: 0; margin-bottom: 10px; border-bottom: 1px solid #ddd;" class="col-sm-12">Select comment from comment table for each user...Select comment from comment table for each user...Select comment from comment table for each user...Select comment from comment table for each user...</p>
                  <div class="col-sm-12">
                    <a href="#"><i style="text-align: center;" class="fas fa-reply col-sm-2" name="reply" data-toggle="modal" data-target="#replyModal"> Reply</i></a>
                    <a href=""><i style="text-align: center;" class="fas fa-trash col-sm-2" name="delete"> Delete</i></a>
                  </div> <!-- /col-sm-12 -->
                </form>                  
              </div><!-- /card-body -->
            </div><!-- /card -->
          </div><!-- /col-sm-10 -->
        </div><!-- /r ow col-12-->
        <!-- END TIMELINE 4-->

        <!-- TIMELINE 5-->
        <div style="padding: 0;" class="row col-12">
          <div style="padding-left: 0;" class="col-sm-1">
            <div style="border: 0;" class="thumbnail">
              <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
            </div><!-- /thumbnail -->
          </div><!-- /col-sm-1 -->

          <div style="padding: 0; margin-left: -5px;" class="col-sm-11">
            <div class="card">
              <div class="card-header">
                <strong>@selectusername</strong> <span class="text-muted">commented 5 days ago</span>
              </div>
              <div class="card-body">
                <form>
                 <p style="padding: 0; margin-bottom: 10px; border-bottom: 1px solid #ddd;" class="col-sm-12">Select comment from comment table for each user...Select comment from comment table for each user...Select comment from comment table for each user...Select comment from comment table for each user...</p>
                  <div class="col-sm-12">
                    <i style="text-align: center; cursor: pointer;" class="fas fa-reply col-sm-2" name="reply" data-toggle="modal" data-target="#replyModal"> Reply</i>
                    <i style="text-align: center; cursor: pointer;" class="fas fa-trash col-sm-2" name="delete"> Delete</i>
                  </div> <!-- /col-sm-12 -->
                </form>                  
              </div><!-- /card-body -->
            </div><!-- /card -->
          </div><!-- /col-sm-10 -->
        </div><!-- /r ow col-12-->
        <!-- END TIMELINE 5-->
      </div> <!-- /row col-sm-9 -->
    </div>
  </div><!-- /container -->

  <!-- MODAL TWEET-->
  <div class="modal fade" id="statusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">What's Happening Today?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="replyForm">
          <div class="modal-body">
            <input class="col-sm-12" type="" name="" placeholder="Select comment from comment table for each user..." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Select comment from comment table for each user...'">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" name="close">Close</button>
            <button type="button" class="btn btn-primary" name="retweet" id="reply_tweet">Tweet</button>
          </div>
        </form>
      </div>
    </div>
  </div> <!-- /modal fade-->

  <!-- MODAL REPLY-->
  <div class="modal fade" id="replyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Reply this Status</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="replyForm">
          <div class="modal-body">
            <input class="col-sm-12" type="" name="" placeholder="Select comment from comment table for each user..." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Select comment from comment table for each user...'">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" name="close">Close</button>
            <button type="button" class="btn btn-primary" name="retweet" id="reply_tweet">Reply</button>
          </div>
        </form>
      </div>
    </div>
  </div> <!-- /modal fade-->
</body>


</html>