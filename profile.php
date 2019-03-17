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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
        <div style="padding: 0; margin: 0;" class="row col-sm-12">
            <div style="text-align: center; margin: 0; margin-right: 10px; " class="row col-3 center-block">
                <div style="height: 150px; background: #666; border-radius: 10px" class="panel panel-default">
                    <div class="profpic">
                        <img class="img-responsive user-photo center-block" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
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
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <strong>@selectusername</strong> <span class="text-muted">commented 5 days ago</span>
                            </div>
                            <div class="panel-body">
                                <form class="tweeting">
                                    <input class="col-sm-10" type="" name="" placeholder="Select comment from comment table for each user..." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Select comment from comment table for each user...'">
                                    <button class="btn col-sm-1">Tweet</button>               
                                </form>
                            </div><!-- /panel-body -->
                        </div><!-- /panel panel-default -->
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
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <strong>@selectusername</strong> <span class="text-muted">commented 5 days ago</span>
                            </div>
                            <div class="panel-body">
                                <form>
                                    <p style="padding: 0;" class="col-sm-12">Select comment from comment table for each user...Select comment from comment table for each user...Select comment from comment table for each user...Select comment from comment table for each user...</p>
                                    <div style="margin-top: 10px;" class="col-sm-12">
                                        <a href="#"><i style="text-align: center;" class="fas fa-reply col-sm-6" name="reply"> Reply</i></a>
                                        <a href=""><i style="text-align: center;" class="fas fa-trash col-sm-6" name="delete"> Delete</i></a>
                                    </div> <!-- /col-sm-12 -->
                                </form>                  
                            </div><!-- /panel-body -->
                        </div><!-- /panel panel-default -->
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
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <strong>@selectusername</strong> <span class="text-muted">commented 5 days ago</span>
                            </div>
                            <div class="panel-body">
                                <form>
                                    <p style="padding: 0;" class="col-sm-12">Select comment from comment table for each user...Select comment from comment table for each user...Select comment from comment table for each user...Select comment from comment table for each user...</p>
                                    <div style="margin-top: 10px;" class="col-sm-12">
                                        <a href="#"><i style="text-align: center;" class="fas fa-heart col-sm-2" name="like"> Like</i></a>
                                        <a href="#" role="button" data-toggle="modal" data-target="#myModal"><i style="text-align: center;" class="fas fa-reply col-sm-2" name="reply"> Reply</i></a>
                                        <a href="#"><i style="text-align: center;" class="fas fa-flag col-sm-2" name="comments">Comments(0)</i></a>
                                        <a href=""><i style="text-align: center;" class="fas fa-trash col-sm-2" name="delete"> Delete</i></a>
                                    </div> <!-- /col-sm-12 -->
                                </form>                  
                            </div><!-- /panel-body -->
                        </div><!-- /panel panel-default -->
                    </div><!-- /col-sm-10 -->

                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">

                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">                              
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Modal Header</h4>
                          </div>
                          <div class="modal-body">
                              <p>Some text in the modal.</p>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                      </div>

                  </div>
              </div>
          </div><!-- /r ow col-12-->
          <!-- END TIMELINE 2-->

          <!-- TIMELINE 3-->
          <div style="padding: 0;" class="row col-12">
            <div style="padding-left: 0;" class="col-sm-1">
                <div style="border: 0;" class="thumbnail">
                    <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                </div><!-- /thumbnail -->
            </div><!-- /col-sm-1 -->

            <div style="padding: 0; margin-left: -5px;" class="col-sm-11">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>@selectusername</strong> <span class="text-muted">commented 5 days ago</span>
                    </div>
                    <div class="panel-body">
                        <form>
                            <p style="padding: 0;" class="col-sm-12">Select comment from comment table for each user...Select comment from comment table for each user...Select comment from comment table for each user...Select comment from comment table for each user...</p>
                            <div style="margin-top: 10px;" class="col-sm-12">
                                <a href="#"><i style="text-align: center;" class="fas fa-heart col-sm-2" name="like"> Like</i></a>
                                <a href="#"><i style="text-align: center;" class="fas fa-reply col-sm-2" name="reply"> Reply</i></a>
                                <a href=""><i style="text-align: center;" class="fas fa-trash col-sm-2" name="delete"> Delete</i></a>
                            </div> <!-- /col-sm-12 -->
                        </form>                  
                    </div><!-- /panel-body -->
                </div><!-- /panel panel-default -->
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
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>@selectusername</strong> <span class="text-muted">commented 5 days ago</span>
                    </div>
                    <div class="panel-body">
                        <form>
                            <p style="padding: 0;" class="col-sm-12">Select comment from comment table for each user...Select comment from comment table for each user...Select comment from comment table for each user...Select comment from comment table for each user...</p>
                            <div style="margin-top: 10px;" class="col-sm-12">
                                <a href="#"><i style="text-align: center;" class="fas fa-reply col-sm-6" name="reply"> Reply</i></a>
                                <a href=""><i style="text-align: center;" class="fas fa-trash col-sm-6" name="delete"> Delete</i></a>
                            </div> <!-- /col-sm-12 -->
                        </form>                  
                    </div><!-- /panel-body -->
                </div><!-- /panel panel-default -->
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
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>@selectusername</strong> <span class="text-muted">commented 5 days ago</span>
                    </div>
                    <div class="panel-body">
                        <form>
                            <p style="padding: 0;" class="col-sm-12">Select comment from comment table for each user...Select comment from comment table for each user...Select comment from comment table for each user...Select comment from comment table for each user...</p>
                            <div style="margin-top: 10px;" class="col-sm-12">
                                <a href="#"><i style="text-align: center;" class="fas fa-reply col-sm-6" name="reply"> Reply</i></a>
                                <a href=""><i style="text-align: center;" class="fas fa-trash col-sm-6" name="delete"> Delete</i></a>
                            </div> <!-- /col-sm-12 -->
                        </form>                  
                    </div><!-- /panel-body -->
                </div><!-- /panel panel-default -->
            </div><!-- /col-sm-10 -->
        </div><!-- /r ow col-12-->
        <!-- END TIMELINE 5-->
    </div> <!-- /row col-sm-9 -->
</div>
</div><!-- /container -->
</body>


</html>