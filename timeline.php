<?php 
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
   }else 
   {
      //checking image format                                                                                                       
       $allowed = array('jpg','jpeg','gif','png'); 
       $file_name = $_FILES['post_image']['name']; 
       $file_extn = strtolower(end(explode('.', $file_name)));
       $file_temp = $_FILES['post_image']['tmp_name'];

       if (in_array($file_extn, $allowed)===true) 
       {
          $file_parh = 'img/' . substr(md5(time()), 0, 10).'.'.$file_extn;
          move_uploaded_file($file_temp, $file_parh);
          $send->add_post($user_id,$status,$file_parh);

      }else
      {
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
  <title>Twittie</title>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" type="text/css" href="css/profile.css">
  <link rel="stylesheet" type="text/css" href="css/profile2.css">
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
                    <a href="#">
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

        <div class="wrapper">  
          <!--content -->
          <div class="content">
             <!--left-content-->
             <div class="center">
                <div class="posts">
                   <div class="create-posts">
                      <form action="" method="post" enctype="multipart/form-data">
                          <div class="c-header">
                             <div class="c-h-inner">
                                <ul> 
                                   <li style="border-right:none;"><a href="#">Update Status</a></li>
                                   <li><input type="file"  onchange="readURL(this);" style="display:none;" name="post_image" id="uploadFile"></li>
                                   <li><a href="#" id="uploadTrigger" name="post_image">Add Photos/Video</a></li>
                               </ul>
                           </div>
                       </div>
                       <div class="c-body">
                         <div class="body-left">
                            <div class="img-box">
                               <img src="<?php echo $data['profile_image'];?>"></img>

                           </div>
                       </div>
                       <div class="body-right">
                        <textarea class="text-type" name="status" placeholder="What's on your mind?"></textarea>
                    </div>
                    <div id="body-bottom">
                     <img src="#"  id="preview"/>
                 </div>
             </div>
             <div class="c-footer">
                 <div class="right-box">
                    <ul>
                       <li><input type="submit" name="submit" value="Tweet" class="btn2"/></li>
                   </ul>
               </div>

           </div>
       </div>
   </div>
   <script type="text/javascript">
       //Image Preview Function
       $("#uploadTrigger").click(function(){
         $("#uploadFile").click();
     });
       function readURL(input) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();

              reader.onload = function (e) {
                 $('#body-bottom').show();
                 $('#preview').attr('src', e.target.result);
             }

             reader.readAsDataURL(input.files[0]);
         }
     }

 </script>
 <?php foreach($post as $row){
       //fetching all posts
     $time_ago = $row['status_time'];
     echo '
     <div class="post-show">
       <div class="post-show-inner">
          <div class="post-header">
             <div class="post-left-box">
                <div class="id-img-box"><img src="'.$row['profile_image'].'"></img></div>
                <div class="id-name">
                   <ul>
                      <li><a href="#">'.$row['username'].'</a></li>
                      <li><small>'.$get->timeAgo($time_ago).'</small></li>
                  </ul>
              </div>
          </div>
          <div class="post-right-box"></div>
      </div>

      <div class="post-body">
         <div class="post-header-text">
            '.$row['status'].'
        </div>'.( ($row['status_image'] != 'NULL') ? '<div class="post-img">
            <img src="'.$row['status_image'].'"></img></div>' : '').'
        <div class="post-footer">
            <div class="post-footer-inner">
               <ul>
                  <li><a href="#">Like</a></li>
                  <li><a href="#">Comment</a></li>
              </ul> 
          </div>
      </div>
  </div>
</div>
</div><br> ';  
} 
?>
</div>
</form> 

</div>



</div>
</div><!-- /container -->
</body>


</html>