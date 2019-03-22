<?php
//error_reporting(0);
session_start();
include('config.php');
error_reporting(0);
if(isset($_POST['signup']))
{
  $fname=$_POST['firstname'];
  $lname=$_POST['lastname'];
  $email=$_POST['emailid']; 
  $mobile=$_POST['mobileno'];
  $username=$_POST['username'];
  $password=md5($_POST['password']); 
  $sql="INSERT INTO  users(firstname,lastname,email,mobile,username,password) VALUES(:fname,:lname,:email,:mobile,:username,:password)";
  $query = $dbh->prepare($sql);
  $query->bindParam(':fname',$fname,PDO::PARAM_STR);
  $query->bindParam(':lname',$lname,PDO::PARAM_STR);
  $query->bindParam(':email',$email,PDO::PARAM_STR);
  $query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
  $query->bindParam(':username',$username,PDO::PARAM_STR);
  $query->bindParam(':password',$password,PDO::PARAM_STR);
  $query->execute();
  $lastInsertId = $dbh->lastInsertId();
  if($lastInsertId){
    echo "<script>alert('Registration successfull. Now you can login');document.location='login.php'</script>";
  }
  else 
  {
    echo "<script>alert('Something went wrong. Please try again');</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Twittie | Register New Account</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" type="text/css" href="css/main.css"/>
  <link rel="stylesheet" type="text/css" href="css/login.css"/>
  <!-- CUSTOM CSS -->
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="font-awesome/css/all.min.css">

</head>
<body style="background-color: #fff9ae"> 
  <div class="container">
    <header style="background-color: #fff9ae">
      <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="twitter" role="navigation">
            <li class="nav-item">
              <a href="index.php" class="nav-link">
                <b>Home</b>
              </a>
            </li>
            <li class="nav-item">
              <a href="about.php" class="nav-link">
                <b>About</b>
              </a>
            </li>
            <li href="index.php" class="twitter__bird"><img style="height: 50px; width: 50px;" src="img/Twittie-Bird-icon.png"></li>
          </ul>
        </nav>
      </div>      
    </header>

    <div class="container mt-lg-12" style="margin-top: 20px;">
      <div class="row">
        <div class="col-sm-2"></div>
        <div class="card col-sm-8" style="padding: 10px;">
          <div class="container">
            <div class="formBox">

              <form method="POST" name="signup" onsubmit="return valid();">

                <div class="row">
                  <div class="col-sm-12">
                    <h1>Register</h1>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6">
                    <div class="inputBox ">
                      <div class="inputText">First Name</div>
                      <input type="text" name="firstname" class="input" required>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="inputBox">
                      <div class="inputText">Last Name</div>
                      <input type="text" name="lastname" class="input" required>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6">
                    <div class="inputBox">
                      <div class="inputText">Email</div>
                      <input type="text" name="emailid" class="input" required>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="inputBox">
                      <div class="inputText">Mobile</div>
                      <input type="text" name="mobileno" class="input" required>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-12">
                    <div class="inputBox">
                      <div class="inputText">Username</div>
                      <input type="text" name="username" class="input" required>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-12">
                    <div class="inputBox">
                      <div class="inputText">New Password</div>
                      <input type="password" name="password" class="input" required>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-12">
                    <div class="inputBox">
                      <div class="inputText">New Password</div>
                      <input type="password" name="password" class="input" required>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-1">

                   <select name=Tgl required>
                     <option name=Tgl>Tgl
                       <option name=Tgl>1
                         <option name=Tgl>2
                           <option name=Tgl>3
                             <option name=Tgl>4
                               <option name=Tgl>5
                                 <option name=Tgl>6
                                   <option name=Tgl>7
                                     <option name=Tgl>8
                                       <option name=Tgl>9
                                         <option name=Tgl>10
                                           <option name=Tgl>11
                                             <option name=Tgl>12
                                               <option name=Tgl>13
                                                 <option name=Tgl>14
                                                   <option name=Tgl>15
                                                     <option name=Tgl>16
                                                       <option name=Tgl>17
                                                         <option name=Tgl>18
                                                           <option name=Tgl>19
                                                             <option name=Tgl>20
                                                               <option name=Tgl>21
                                                                 <option name=Tgl>22
                                                                   <option name=Tgl>23
                                                                     <option name=Tgl>24
                                                                       <option name=Tgl>26
                                                                         <option name=Tgl>27
                                                                           <option name=Tgl>28
                                                                             <option name=Tgl>29
                                                                               <option name=Tgl>30
                                                                                 <option name=Tgl>31

                                                                                 </select>


                                                                               </div>
                                                                               <div class="col-sm-2">

                                                                                 <select name=Bln required>
                                                                                   <option name=Bln>Bln
                                                                                     <option name=Bln>Januari
                                                                                       <option name=Bln>Februari
                                                                                         <option name=Bln>Maret
                                                                                           <option name=Bln>April
                                                                                             <option name=Bln>Mei
                                                                                               <option name=Bln>Juni
                                                                                                 <option name=Bln>Juli
                                                                                                   <option name=Bln>Agustus
                                                                                                     <option name=Bln>September
                                                                                                       <option name=Bln>Oktober
                                                                                                         <option name=Bln>November
                                                                                                           <option name=Bln>Desember
                                                                                                           </select>

                                                                                                         </div>

                                                                                                         <div class="col-sm-2" required>
                                                                                                         </select>
                                                                                                         <select name=Thn>
                                                                                                           <option name=Thn>Thn
                                                                                                             <option name=Thn>2012
                                                                                                               <option name=Thn>2011
                                                                                                                 <option name=Thn>2010
                                                                                                                   <option name=Thn>2009
                                                                                                                     <option name=Thn>2008
                                                                                                                       <option name=Thn>1993
                                                                                                                         <option name=Thn>1992
                                                                                                                           <option name=Thn>1991
                                                                                                                             <option name=Thn>1990
                                                                                                                               <option name=Thn>1989
                                                                                                                                 <option name=Thn>1988
                                                                                                                                   <option name=Thn>1987
                                                                                                                                     <option name=Thn>1986
                                                                                                                                       <option name=Thn>1985
                                                                                                                                         <option name=Thn>1984
                                                                                                                                           <option name=Thn>1983
                                                                                                                                             <option name=Thn>1982
                                                                                                                                               <option name=Thn>1981
                                                                                                                                               </select>
                                                                                                                                             </div>

                                                                                                                                             <div class="col-sm-12">
                                                                                                                                              <tr>
                                                                                                                                                <tr>
                                                                                                                                                 <td>
                                                                                                                                                  <input style="margin-top: 20px;" type=radio name=JK value=Laki-laki>Laki-laki
                                                                                                                                                  <input style="margin-left: 20px" type=radio name=JK value=Perempuan>Perempuan</td>
                                                                                                                                                </tr>
                                                                                                                                              </tr>
                                                                                                                                            </div>
                                                                                                                                          </div>




                                                                                                                                          <div class="row">
                                                                                                                                            <div class="col-sm-12">
                                                                                                                                              <input style="margin-top: 20px;" type="submit" name="signup" id="submit" class="btn btn-outline-primary btn-block" value="Signup" required>
                                                                                                                                            </div>
                                                                                                                                          </div>
                                                                                                                                        </form>
                                                                                                                                      </div>
                                                                                                                                    </div>
                                                                                                                                  </div>
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