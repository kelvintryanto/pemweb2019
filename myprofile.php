<?php 
  if(isset($_POST['logout'])){
    session_unset();

    echo "<script>alert('Log Out Success!'); document.location='index.php'</script>";
  }
?>

<!-- FARIZ & DIKA YANG NGERJAIN -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Twittie | My Profile</title>
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
						<li><form><input placeholder=" search twitter"/> <i class="fa fa-search"></i></form></li>
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
										<div class="link"><i class="fas fa-edit" style="font-size: 1rem;"></i> Edit Profile</div>
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

		<!-- TEMPAT PROFIL -->
		<div style="margin: 0;padding: 0;" class="row col-md-12">
			<div style="text-align: center; margin: 0; margin-right: 10px; " class="row col-3 center-block">
				<div style="height:165px; width: 100%; background: #fae85d; border-radius: 10px; padding: 0 10px 10px 10px;" class="card">
					<div class="profpic">
						<img style="cursor: pointer;" class="img-responsive user-photo center-block" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
					</div><!-- /thumbnail -->
					<h4><strong>@selectusername</strong></h4>
				</div>

				<div style="border-radius: 10px; width: 100%; text-align: left; display: table;" class="card">
					<div class="card-body" style="vertical-align: center;">						
						<a href="myprofile.php">
							<div class="link"><i class="fas fa-user-circle" style="font-size: 1rem;"></i> Profile</div>
						</a>						
						<div class="dropdown-divider"></div> 						
						<a href="editprofile.php">
							<div class="link"><i class="fas fa-edit" style="font-size: 1rem;"></i> Edit Profile</div>
						</a>						
					</div>
				</div>
			</div>

			<!-- <div style="margin: 0;padding: 0;" class="row col-md-12">
				<div style="text-align: center; margin: 0; margin-right: 10px; " class="row col-3">

				</div>
			</div> -->

			<div style="padding: 0; margin-left: -5px;" class="col-md-8">
				<div class="card">
					<div class="card-header">
						<strong>My Profile</strong>
					</div>

					<div class="card-body">
						<div style="padding: 0;" class="row col-12">
							<div style="padding-right: 0;" class="col-md-2">
								<div class="profpic">
									<img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png" height="100" width="20" >
								</div>															
							</div><!-- /col-sm-1 -->
							<div class="col-md-10">
								<div class="card">
									<div class="card-body">
										<div class="col-md-12" style="margin-left: -20px">
											<div class="col-md-12">
												<label for="name">Name</label>
												<b><label type="text" name="name" id="name" style="margin-left: 5px">select username</label></b>
											</div>
											<div class="col-md-12">
												<label for="name">Email</label>
												<b><label type="text" name="name" id="name" style="margin-left: 10px">select email</label></b>
											</div>
											<div class="col-md-12">
												<label for="name">No.Hp</label>
												<b><label type="text" name="name" id="name" style="margin-left: 3px">select nomor hp</label></b>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div><!-- /card-body -->
			</div><!-- /card -->
		</div><!-- /col-sm-10 -->
	</div>

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
</body>


</html>