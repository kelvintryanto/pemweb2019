<?php 
// UNTUK LOGOUT
if(isset($_POST['logout'])){
  session_unset();

  echo "<script>alert('Log Out Success!'); document.location='index.php'</script>";
}


// UNTUK SEARCH
if(isset($_POST['search'])){
  echo "<script>document.location='searchtweet.php'</script>";
}

include 'core/main.php';
$check  = new Main;
$get    = new Main;
$send   = new Main;

@$user_id = $_SESSION['user_id'];
    //fetching user data by user_id
$data  = $get->user_data($user_id);
 // fetching posts from database
$post  = $get->posts();
 //check user submit  data
if(isset($_POST['submit'])){
  $status  = $_POST['status'];
  //checking image if isset
  if (isset($_FILES['post_image'])===true) {
   //if image is not empty 
    if (empty($_FILES['post_image']['name']) ===true) {
      if(!empty($status)===true){
       $send->add_post($user_id,$status);
     }
   }else {
      //checking image format                                                                                                       
     $allowed = array('jpg','jpeg','gif','png'); 
     $file_name = $_FILES['post_image']['name']; 
     $file_extn = strtolower(end(explode('.', $file_name)));
     $file_temp = $_FILES['post_image']['tmp_name'];

     if (in_array($file_extn, $allowed)===true) {
      $file_parh = 'img/' . substr(md5(time()), 0, 10).'.'.$file_extn;
      move_uploaded_file($file_temp, $file_parh);
      $send->add_post($user_id,$status,$file_parh);

    }else{
      echo 'incorrect File only Allowed with less then 1mb ';
      echo implode(', ', $allowed);
    }
  }

}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Twittie | Home</title>
  <link id="favicon" rel="shortcut icon" href="img/Twittie-Bird-icon.png" type="image/png">

  <!-- CUSTOM CSS -->
  <link rel="stylesheet" type="text/css" href="css/home.css">

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

<body style="background-color: #fff9ae">
  <div class="container">
    <header style="background-color: #fff9ae">
      <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="twitter" role="navigation">
            <li>
              <a href="home.php">
                <div class="link"><i class="fa fa-home"></i>Home</div>
              </a>
            </li>
            <li class="twitter__bird">
              <a href="home.php">
                <img style="height: 50px; width: 50px;" src="img/Twittie-Bird-icon.png">
              </a>
            </li>
            <li>
              <form method="post">
                <input name="search" placeholder=" search twitter"/> <i class="fa fa-search"></i>
              </form>
            </li>
            <li class="btn-group">
              <i class="fa fa-user-circle" data-toggle="dropdown"></i>
              <div class="dropdown-menu dropdown-menu-right">
                <button class="dropdown-item" type="button">
                  <a href="myprofile.php">
                    <div class="link"><i class="fas fa-user-circle" style="font-size: 1rem;"></i> Profile</div>
                  </a>
                </button>
                <button class="dropdown-item" type="button">
                  <a href="editprofile.php">
                    <div class="link"><i class="fas fa-edit" style="font-size: 1rem;"></i>Edit Profile</div>
                  </a>
                </button>
                <div class="dropdown-divider"></div>      
                <form method="post">
                  <button  class="dropdown-item" type="submit" name="logout" style="font-size: 1rem;">
                    <i class="fas fa-sign-out-alt"></i>Logout
                  </button>
                </form>
              </div>
            </li>
            <li><button class="btn" data-toggle="modal" data-target="#statusModal"> Tweet </button></li>
          </ul>
        </nav>
      </div>      
    </header>
     <form method="post" action="" enctype="multipart/form-data">
    <!-- TEMPAT PROFIL -->

    <div style="margin: 0;padding: 0;" class="row col-sm-12">
      <div style="text-align: center; margin: 0; margin-right: 10px; " class="row col-3 center-block">
        <div style="height:165px; width:100%; background: #fae85d; border-radius: 10px; padding: 0 10px 10px 10px;" class="card">
          <div class="profpic">
            <img class="img-responsive user-photo" src="'.$row['profile_image'].'">
          </div><!-- /thumbnail -->
          <h4><?php echo'<strong>'.$row['username'].'</strong>'?></h4>
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
              
            </div><!-- /thumbnail -->
          </div><!-- /col-sm-1 -->

          
          <div style="padding: 0; margin-left: -5px;" class="col-sm-11">
            <div class="card">
              <div class="card-header">
                <strong>@selectusername</strong>
              </div>
              <div class="card-body" >
                
                  <div id="addMedia">
                   <img src="#" id="preview" style="display: none;" />
                 </div>
                 <div id="buatStatus">
                  <input class="col-sm-9" name="status" placeholder="Select comment from comment table for each user..." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Select comment from comment table for each user...'" >
                  <button name="submit" type="submit" style="margin-top: auto;margin-bottom: auto;" class="btn col-sm-2">Tweet</button>
                </div>
                <div style="cursor:pointer;" class="col-2">
                  <input type="file"  onchange="readURL(this);" style="display:none;" name="post_image" id="uploadFile">
                  <i class="fas fa-images" style="font-size: 1rem;" id="uploadTrigger" name="post_image"> Media</i>

                  <!-- IMAGE PREVIEW -->
                  <script type="text/javascript">
                    $("#uploadTrigger").click(function(){
                      $("#uploadFile").click();
                    });
                    function readURL(input) {
                      if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                          $('#preview').css('display','');
                          $('#addMedia').show();
                          $('#preview').attr('src', e.target.result);
                        }

                        reader.readAsDataURL(input.files[0]);
                      }
                    }
                  </script>
                </div>
              
            </div><!-- /card-body -->
          </div><!-- /card -->
        </div><!-- /col-sm-10 -->
      </div><!-- /row col-12-->

      <!-- TIMELINE 1-->
      <?php foreach($post as $row){
       //fetching all posts
       $time_ago = $row['status_time'];
      echo '
      <div style="padding: 0;" class="row col-12">
        <div style="padding-left: 0;" class="col-sm-1">
          <div style="border: 0;" class="thumbnail">
            <img class="img-responsive user-photo" src="'.$row['profile_image'].'">
          </div><!-- /thumbnail -->
        </div><!-- /col-sm-1 -->

        <div style="padding: 0; margin-left: -5px;" class="col-sm-11">
          <div class="card">
            <div class="card-header">
              <strong>'.$row['username'].'</strong> <span class="text-muted">commented '.$get->timeAgo($time_ago).'</span>
            </div>
            <div class="card-body">
              <form>
                <p style="padding: 0; margin-bottom: 10px; border-bottom: 1px solid #ddd;" class="col-sm-12">'.$row['status'].'</p>
                '.( ($row['status_image'] != 'NULL') ? '<div class="post-img">
                  <img src="'.$row['status_image'].'"></img></div>' : '').'
                <div class="col-sm-12">
                  <i style="text-align: center; cursor: pointer;" class="fas fa-reply col-sm-2" name="reply" data-toggle="modal" data-target="#replyModal"> Reply</i>
                  <i style="text-align: center; cursor: pointer;" class="fas fa-trash col-sm-2" name="delete" data-toggle="modal" data-target="#deleteModal"> Delete</i>
                </div> <!-- /col-sm-12 -->
              </form>           
            </div><!-- /card-body -->
          </div><!-- /card -->
        </div><!-- /col-sm-10 -->
      </div><!-- /r ow col-12-->
      <!-- END TIMELINE 1--> ';  
     } 
    ?>

</div> <!-- /row col-sm-9 -->
</div>
</form>
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

<!-- MODAL DELETE-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
          <p>Are you sure want to delete your status?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" name="close">No</button>
          <button type="button" class="btn btn-danger" name="retweet" id="reply_tweet" data-dismiss="modal" name="close">Yes</button>
        </div>
      </form>
    </div>
  </div>
</div> <!-- /modal fade-->
</body>


</html>