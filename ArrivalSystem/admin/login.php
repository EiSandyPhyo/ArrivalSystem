<?php
session_start();
error_reporting(0);

include 'connect.php';

if(isset($_POST['loginsubmit']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql ="SELECT a_Email,a_Pw FROM tbl_admin WHERE a_Email=:email and a_Pw=:password";
    $query= $db -> prepare($sql);
    $query-> bindParam(':email', $email, PDO::PARAM_STR);
    $query-> bindParam(':password', $password, PDO::PARAM_STR);
    $query-> execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    if($query->rowCount() > 0)
    {
        $_SESSION['login']=$_POST['email'];
        echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
    } else{
        
        echo "<script>alert('Invalid Details');</script>";
        
    }
    
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

  <title>Arrival - Admin - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header" style="text-align: center;">Login</div>
      <div class="card-body">
        <form name="login" action="" method="post" aria-hidden="true">
          <div class="form-group">
            <label class="email">Email</label>
            <input type="text" name="email" id="inputEmail" class="form-control" required="required" autofocus="autofocus">
          </div>
          <div class="form-group">
              <label class="mb-2 password-agileits">Password</label>
              <input type="password" name="password" id="inputPassword" class="form-control" required="required">
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Remember Password
              </label>
            </div>
          </div>
          <button type="submit" name="loginsubmit" class="btn btn-primary btn-block" id="loginsubmit">Login</button>
        </form>
        
        <div class="text-center">
          <a class="d-block small mt-3" href="register.php">Register an Account</a>
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
