<?php 
  if(isset($_POST['logout'])){
    session_unset();

    echo "<script>alert('Log Out Success!'); document.location='index.php'</script>";
  }
?>

<!-- ARKKA YANG NGERJAIN -->

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>

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
            <!-- <li><button class="btn" data-toggle="modal" data-target="#statusModal"> Tweet </button></li> -->
          </ul>
        </nav>
      </div>      
    </header>

    <div class="container-fluid">
  		<div class="row">
    		<h2>Search result</h2>
  		</div>


  		<div style="margin: 0;" class="row col-sm-12">
        	<div style="margin: 0;" class="col-sm-6 card-result">
  				<div style="padding: 10px;" class="card col-12">
				  <div class="profpic-search">
				  
            		<img style="cursor: pointer;" class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">	
          		a
				  </div>
				  </div>
        	</div>

        	<div style="padding: 10px; margin: 0;" class="card col-sm-6 card-result">
            	Container Right
        	</div>
    	</div> 
  		<!-- <div class="card col-sm-5">
  			<div class="card-body">
    			This is some text within a card body.
  			</div>
		</div>
		<div class="card col-sm-5">
  			<div class="card-body">
    			This is some text within a card body.
  			</div>
		</div> -->
	</div>



	<div style="padding-right: 0;" class="row col-9">
	
	</body>

</html>