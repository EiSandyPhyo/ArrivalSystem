<?php 
session_start();
include 'connect.php';
if(strlen($_SESSION['login'])==0)
{
    header('location:login.php');
}
else{
    
    $h="select * from tbl_hotel";
    $htotal=0;
    foreach($db->query($h) as $row)
    {
        $htotal++;
    }
    
    $f="select * from tbl_flight";
    $ftotal=0;
    foreach($db->query($f) as $row)
    {
        $ftotal++;
    }
    
    $pt="select * from package";
    $pttotal=0;
    foreach($db->query($pt) as $row)
    {
        $pttotal++;
    }
    
    $plt="select * from packagelist";
    $plttotal=0;
    foreach($db->query($plt) as $row)
    {
        $plttotal++;
    }
    
    $r="select * from tbl_room";
    $rtotal=0;
    foreach($db->query($r) as $row)
    {
        $rtotal++;
    }
    
    $cr="select * from customize_region";
    $crtotal=0;
    foreach($db->query($cr) as $row)
    {
        $crtotal++;
    }
    
    $ch="select * from customize_hotel";
    $chtotal=0;
    foreach($db->query($ch) as $row)
    {
        $chtotal++;
    }
    
    $faq="select * from tbl_faq";
    $faqtotal=0;
    foreach($db->query($faq) as $row)
    {
        $faqtotal++;
    }
    
    $u="select * from tbl_user";
    $utotal=0;
    foreach($db->query($u) as $row)
    {
        $utotal++;
    }
    
    $cb="select * from tbl_customizedbook";
    $cbtotal=0;
    foreach($db->query($cb) as $row)
    {
        $cbtotal++;
    }
    
    $hb="select * from tbl_hotelbooking";
    $hbtotal=0;
    foreach($db->query($hb) as $row)
    {
        $hbtotal++;
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

  <title>Arrival - Admin - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">


<style type="text/css">
details{
    display: block;
    cursor: pointer;
}
#hh
{
    font-family: Raleway;
    line-height: 2.50;
    text-align: left;
    color: black;
    margin: 0px;
}
#pp
{
    font-family: "Cinzel Decorative";
    font-size: 20px;
    text-align: left;
    color: black;
    margin: 0px;
}
</style>

</head>

<body id="page-top">

  <nav class="navbar navbar-expand static-top" style="background: linear-gradient(to right, #fa9e1b, #8d4fff);">

    <a class="navbar-brand mr-1" href="index.php">Start</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
    
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="badge badge-danger">9+</span>
          <i class="fas fa-bell fa-fw"></i>
          
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="#">Notification</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="badge badge-danger">6</span>
          <i class="fas fa-envelope fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#">Messages</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item">
          <i class="fas fa-user"></i>&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['login'];?></a> 
          <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;&nbsp;Logout</a>
        </div>
      </li>
      
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav" style="background: linear-gradient(to right, #fa9e1b, #8d4fff);">
      <li class="nav-item active">
        <a class="nav-link" href="index.php" style="color: black;">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Login Screens:</h6>
          <a class="dropdown-item" href="login.php">Login</a>
          <a class="dropdown-item" href="register.php">Register</a>
          <a class="dropdown-item" href="forgot-password.php">Forgot Password</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="charts.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tables.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="notification.php">
          <i class="fas fa-fw fa-bell"></i>
          <span>Notification</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        

        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-4 col-sm-6 mb-3">
            <div class="card text-black o-hidden h-100" style="background-color: #d9d9d9;">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-hotel"></i>
                </div>
                <div class="mr-5"><h3 id="hh">Hotel</h3></div>
                <span id="pp"><?php echo $htotal;?></span>
              </div>
              
                <details class="card-footer text-black small">
                <br>
                <a href="insert_chotel.php">
                <button type="button" class="btn btn-danger">Create</button></a>
                <a href="view_chotel.php">
				<button type="button" class="btn btn-danger">Manage</button></a>
              </details>
             
            </div>
          </div>
          
          <div class="col-xl-4 col-sm-6 mb-3">
            <div class="card text-black o-hidden h-100" style="background-color: #d9d9d9;">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-bus-alt"></i>
                </div>
                <div class="mr-5"><h3 id="hh">Bus</h3></div>
                <span id="pp"><?php echo $htotal;?></span>
              </div>
              <details class="card-footer text-black small">
                <br>
                <a href="insert_chotel.php">
                <button type="button" class="btn btn-danger">Create</button></a>
                <a href="view_chotel.php">
				<button type="button" class="btn btn-danger">Manage</button></a>
              </details>
            </div>
          </div>
          
          <div class="col-xl-4 col-sm-6 mb-3">
            <div class="card text-black o-hidden h-100" style="background-color: #d9d9d9;">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-plane"></i>
                </div>
                <div class="mr-5"><h3 id="hh">Flight</h3></div>
                <span id="pp"><?php echo $ftotal;?></span>
              </div>
             <details class="card-footer text-black small">
                <br>
                <a href="insert_chotel.php">
                <button type="button" class="btn btn-danger">Create</button></a>
                <a href="view_chotel.php">
				<button type="button" class="btn btn-danger">Manage</button></a>
              </details>
            </div>
          </div>
        </div>
        
        
        
        <div class="row">
        	
        	<div class="col-xl-4 col-sm-6 mb-3">
            <div class="card text-black o-hidden h-100" style="background-color: #d9d9d9;">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-archive"></i>
                </div>
                <div class="mr-5"><h3 id="hh">PackageType</h3></div>
                <span id="pp"><?php echo $pttotal;?></span>
              </div>
             <details class="card-footer text-black small">
                <br>
                <a href="insert_package.php">
                <button type="button" class="btn btn-danger">Create</button></a>
                <a href="view_package.php">
				<button type="button" class="btn btn-danger">Manage</button></a>
              </details>
            </div>
          </div>
          
          <div class="col-xl-4 col-sm-6 mb-3">
            <div class="card text-black o-hidden h-100" style="background-color: #d9d9d9;">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-list-ol"></i>
                </div>
                <div class="mr-5"><h3 id="hh">PackagelistType</h3></div>
                <span id="pp"><?php echo $plttotal;?></span>
              </div>
              <details class="card-footer text-black small">
                <br>
                <a href="insert_packagelist.php">
                <button type="button" class="btn btn-danger">Create</button></a>
                <a href="view_packagelist.php">
				<button type="button" class="btn btn-danger">Manage</button></a>
              </details>
            </div>
          </div>
          
          <div class="col-xl-4 col-sm-6 mb-3">
            <div class="card text-black o-hidden h-100" style="background-color: #d9d9d9;">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-person-booth"></i>
                </div>
                <div class="mr-5"><h3 id="hh">Room</h3></div>
                <span id="pp"><?php echo $rtotal;?></span>
              </div>
              <details class="card-footer text-black small">
                <br>
                <a href="insert_room.php">
                <button type="button" class="btn btn-danger">Create</button></a>
                <a href="view_room.php">
				<button type="button" class="btn btn-danger">Manage</button></a>
              </details>
            </div>
          </div>
        </div>
        
        
        <div class="row">
        
        	<div class="col-xl-4 col-sm-6 mb-3">
            <div class="card text-black o-hidden h-100" style="background-color: #d9d9d9;">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-list"></i>
                </div>
                <div class="mr-5"><h3 id="hh">CustomizedRegion</h3></div>
                <span id="pp"><?php echo $crtotal;?></span>
              </div>
              <details class="card-footer text-black small">
                <br>
                <a href="insert_cregion.php">
                <button type="button" class="btn btn-danger">Create</button></a>
               	<a href="view_cregion.php">
				<button type="button" class="btn btn-danger">Manage</button></a>
              </details>
            </div>
          </div>
          
          <div class="col-xl-4 col-sm-6 mb-3">
            <div class="card text-black o-hidden h-100" style="background-color: #d9d9d9;">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-list"></i>
                </div>
                <div class="mr-5"><h3 id="hh">CustomizedHotel</h3></div>
                <span id="pp"><?php echo $chtotal;?></span>
              </div>
              <details class="card-footer text-black small">
                <br>
                <a href="insert_chotel.php">
                <button type="button" class="btn btn-danger">Create</button></a>
                <a href="view_chotel.php">
				<button type="button" class="btn btn-danger">Manage</button></a>
              </details>
            </div>
          </div>
          
          <div class="col-xl-4 col-sm-6 mb-3">
            <div class="card text-black o-hidden h-100" style="background-color: #d9d9d9;">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-list"></i>
                </div>
                <div class="mr-5"><h3 id="hh">FAQ</h3></div>
                <span id="pp"><?php echo $faqtotal;?></span>
              </div>
              <details class="card-footer text-black small">
                <br>
                <a href="insert_faq.php">
                <button type="button" class="btn btn-danger">Create</button></a>
                <a href="view_faq.php">
				<button type="button" class="btn btn-danger">Manage</button></a>
              </details>
            </div>
          </div>
        </div>
        
        
        <div class="row">
        
          <div class="col-xl-4 col-sm-6 mb-3">
            <div class="card text-black o-hidden h-100" style="background-color: #d9d9d9;">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-list-ul"></i>
                </div>
                <div class="mr-5"><h3 id="hh">RegisteredUsers</h3></div>
                <span id="pp"><?php echo $utotal;?></span>
              </div>
              <details class="card-footer text-black small">
                <br>
                <a href="viewalluser.php">
                <button type="button" class="btn btn-danger">View</button></a>
              </details>
            </div>
          </div>
          
          <div class="col-xl-4 col-sm-6 mb-3">
            <div class="card text-black o-hidden h-100" style="background-color: #d9d9d9;">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-list-ul"></i>
                </div>
                <div class="mr-5"><h3 id="hh">CustomizedBooking</h3></div>
                <span id="pp"><?php echo $cbtotal;?></span>
              </div>
              <details class="card-footer text-black small">
                <br>
                <a href="../member/customizedbooingprint.php">
                <button type="button" class="btn btn-danger">View</button></a>
              </details>
            </div>
          </div>
          
          <div class="col-xl-4 col-sm-6 mb-3">
            <div class="card text-black o-hidden h-100" style="background-color: #d9d9d9;">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-list-ul"></i>
                </div>
                <div class="mr-5"><h3 id="hh">HotelBooking</h3></div>
                <span id="pp"><?php echo $hbtotal;?></span>
              </div>
              <details class="card-footer text-black small">
                <br>
                <a href="../member/hotelbooingprint.php">
                <button type="button" class="btn btn-danger">View</button></a>
              </details>
            </div>
          </div>
        </div>
        
      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Made By Group 4, in 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>



<?php } ?>


