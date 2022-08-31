<?php 
session_start();
include 'connect.php';

if(isset($_POST['regsubmit']))
{
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    
    $insertquery="insert into tbl_admin (a_Name,a_Email,a_Pw) values ('$name','$email','$password')";
    $db -> exec($insertquery);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Arrival - Admin - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form action="" method="post">
          <div class="form-group">
            <div class="form-row">
             <div class="col-md-4"></div>
              <div class="col-md-4">
                <div class="form-label-group">
                  <input type="text" id="firstName" name="name" class="form-control" placeholder="First name" required="required" autofocus="autofocus">
                  <label for="firstName">First name</label>
                </div>
              </div>
              <div class="col-md-4"></div>
            </div>
          </div>
          <div class="form-group">
          	<div class="form-row">
          	<div class="col-md-4"></div>
              <div class="col-md-4">
                <div class="form-label-group">
                  <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required="required">
                  <label for="inputEmail">Email address</label>
                </div>
            	</div>
            <div class="col-md-4"></div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
            <div class="col-md-4"></div>
              <div class="col-md-4">
                <div class="form-label-group">
                  <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="required">
                  <label for="inputPassword">Password</label>
                </div>
              </div>
             <div class="col-md-4"></div>
            </div>
          </div>
          <div class="form-group">
          <div class="form-row">
          <div class="col-md-5"></div>
         <div class="col-md-2">
		<button type="submit" name="regsubmit" id="form_submit_button" class="btn btn-primary btn-block">Register</button><br><br><br>
		</div>
		<div class="col-md-5"></div>
		</div>
		</div>
       
<!--           <a class="btn btn-primary btn-block" href="login.php">Register</a> -->
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.php">Login Page</a>
          <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
