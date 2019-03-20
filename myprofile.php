<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Twittie</title>

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
						<li>

						</li>
						<li class="twitter__bird">
							<!-- <i class="fab fa-twitter"></i> -->
							<img style="height: 50px; width: 50px;" src="img/Twittie-Bird-icon.png">
						</li>
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
		<div style="margin: 0;padding: 0;" class="row col-md-12">
			<div style="text-align: center; margin: 0; margin-right: 10px; " class="row col-3 center-block">
				<div style="height:165px; background: #fae85d; border-radius: 10px; padding: 0 10px 10px 10px;" class="card">
					<div class="profpic">
						<img style="cursor: pointer;" class="img-responsive user-photo center-block" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
					</div><!-- /thumbnail -->
					<h4><strong>@selectusername</strong></h4>
				</div>
			</div>

			<div style="padding: 0; margin-left: -5px;" class="col-md-8">
				<div class="card">
					<div class="card-header">
						<strong>My Profile</strong>
					</div>

					<div class="card-body">
						<div style="padding: 0;" class="row col-12">
							<div style="padding-right: 0;" class="col-md-2">
								<div style="border: 0;" class="thumbnail">
									<img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png" height="100" width="20" >
								</div><!-- /thumbnail -->
							</div><!-- /col-sm-1 -->
							<div class="col-md-10">
								<div class="card">
									<div class="card-body">
										<div class="col-md-12" style="margin-left: -20px">
											<div class="col-md-12">
												<label for="name">Name</label>
												<input type="text" name="name" id="name" style="margin-left: 5px" />
											</div>
											<div class="col-md-12">
												<label for="name">Email</label>
												<input type="text" name="name" id="name" style="margin-left: 10px" />
											</div>
											<div class="col-md-12">
												<label for="name">No.Hp</label>
												<input type="text" name="name" id="name" style="margin-left: 3px" />
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

		<div style="margin: 0;padding: 0;" class="row col-md-12">
			<div style="text-align: center; margin: 0; margin-right: 10px; " class="row col-3 center-block">
				<div style="height:100px; background: #fae85d; border-radius: 10px; padding: 0 60px 10px 60px;" class="card">
					<button class="btn" data-toggle="modal" data-target="#statusModal">
						<b>My Profile
					</button>

					<div class="dropdown-divider"></div> 

					<button class="btn" data-toggle="modal" data-target="#statusModal">
						<b>Edit Profile
					</button>
				</div>
			</div>


		</body>


		</html>