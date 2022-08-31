<?php 
session_start();
error_reporting(0);
include 'admin/connect.php';

if(isset($_POST['regsubmit']))
{
    
    $name=$_POST['name'];
    $userimage=$_FILES['userimage']['name'];
    $nrc=$_POST['nrc'];
    $email=$_POST['email'];
    $phno=$_POST['phno'];
    $address=$_POST['address'];
    $password=md5($_POST['password']);
    
    $insertquery="insert into tbl_user (u_Name,u_Image,u_NRC,u_Email,u_Phno,u_Address,u_Pw) values ('$name','','$nrc','$email','$phno','$address','$password')";
    $db -> exec($insertquery);
    
    $i = $db->lastInsertId();
    
    $dot_pos=strpos(basename($userimage), ".");
    
    $file_extension=substr($userimage, $dot_pos);
    
    $realfilename=$i.$file_extension;
    
    $dirname="images/userimages/$realfilename";
    
    $updatequery="update tbl_user set u_Image='$realfilename' where u_ID='$i' ";
    $db->query($updatequery);
    
    move_uploaded_file($_FILES['userimage']['tmp_name'], $dirname);
    
}

if(isset($_POST['loginsubmit']))
{
    
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $sql ="select * from tbl_user where u_Email='$email' and u_Pw='$password'";
    
    
    foreach ($db->query($sql) as $row)
    {
        
        $_SESSION['login']=$_POST['email'];
        $i=$row['u_ID']; 
    }
    
    if($i==0)
    {
        
        $error="Your current password is wrong";	
        
    }
    else {
        $_SESSION['user_id']=$i;
        $_SESSION['userimg']=$_POST['userimage'];
        echo ("<script>location.href='member/index.php';</script>");
        
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Travelix</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Arrival Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" type="text/css" href="styles/header.css">


<link rel="stylesheet" href="css/style1.css">


<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.1.0/css/font-awesome.min.css" />

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"/>

<link href="vendors/bootatrap-date-time/bootstrap-datetimepicker.min.css" rel="stylesheet">
  

<style>
#form_submit_button
{
	font-size: 14px;
	font-weight: 500;
	color: #fff;
	width: 60%;
	margin-left: 20%;
	margin-right: 20%;
	padding: 9px;
	line-height: 50%;
	background: #31124b;
	-webkit-transform: translateY(15px);
	-moz-transform: translateY(15px);
	-ms-transform: translateY(15px);
	-o-transform: translateY(15px);
	transform: translateY(15px);
	border: none;
	outline: none;
	cursor: pointer;
    margin-top: 15px;
}
#form_submit_button:hover
{
	opacity: 0.8;
}
</style>

</head>

<body>


	
	<!-- Header -->

	<header class="header">

		<!-- Top Bar -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
					
						<div class="phone">+45 345 3324 56789</div>
						
						<div class="social">
							<ul class="social_list">
								<li class="social_list_item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>
						</div>
						
						<div class="user_box ml-auto">
							<div class="user_box_login user_box_link"><a href="" class="text-white" data-toggle="modal" data-target="#exampleModalCenter1" aria-haspopup="true" aria-expanded="false">Login</a></div>
							<div class="user_box_register user_box_link"><a href="" class="text-white" data-toggle="modal" data-target="#exampleModalCenter2" aria-haspopup="true" aria-expanded="false">Register</a></div>
						</div>
						
							
					</div>
				</div>
			</div>		
		</div>

		<!-- Main Navigation -->
		
		
		
		

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
						<div class="logo_container">
							<div class="logo"><a href="index.php"><img src="images/logo.png" alt="">Arrival</a></div>
						</div>
						<div class="main_nav_container ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="index.php">Home</a></li>
								<li class="main_nav_item"><a href="aboutus.php">AboutUs</a></li>
								<li class="main_nav_item"><a href="ticket.php">Ticket</a></li>
								<li class="main_nav_item"><a href="customizedtour.php">Customized Tour</a></li>
								
								<li class="main_nav_item dropdown">
								<a href="packagetour.php" class="main_nav-item dropdown-toggle" data-toggle="dropdown">Packaged Tour</a>
									<div class="dropdown-menu">
										<?php 
					
                						  $viewquery="select * from package";
                						  foreach ($db->query($viewquery) as $row)
                						  {
                						     
                						      $package_id=$row['package_id'];
                						      $package_type=$row['package_type'];
                						      echo "<a class='dropdown-item' href='packagetour.php?packagelist_id=$package_id'>$package_type</a>";
                						      
                						  }
                						?>
									
                                    </div>
								</li>			
								
								<li class="main_nav_item dropdown">
								<a href="#" class="main_nav-item dropdown-toggle" data-toggle="dropdown">
								Pages</a>
								
									<div class="dropdown-menu">
										<a class="dropdown-item" href="contact.php">ContactUs</a>
                                      	<a class="dropdown-item" href="offers.php">Service</a>
                                          <a class="dropdown-item" href="faq.php">FAQ</a>
                                          <a class="dropdown-item" href="blog.php">Blog</a>
                                    </div>
								</li>
								
								
								
							</ul>
						</div>
						<div class="content_search ml-lg-0 ml-auto">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							width="17px" height="17px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
								<g>
									<g>
										<g>
											<path class="mag_glass" fill="#FFFFFF" d="M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
											s112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
											C407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
											M119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
											c0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z"/>
										</g>
									</g>
									<g>
										<g>
											<path class="mag_glass" fill="#FFFFFF" d="M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
											c8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
											C-2.019,484.77-2.019,497.865,6.057,505.942z"/>
										</g>
									</g>
								</g>
							</svg>
						</div>

						<form id="search_form" action="search.php" class="search_form bez_1" method="GET">
							<input type="search" class="search_content_input bez_1" name="search">
						</form>

						<div class="hamburger">
							<i class="fa fa-bars trans_200"></i>
						</div>
					</div>
				</div>
			</div>	
		</nav>

	</header>

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<div class="logo menu_logo"><a href="#"><img src="images/logo.png" alt=""></a></div>
			<div class="user_box menu_item">
				<div class="user_box_login menu_item user_box_link"><a href="#" class="text-white" data-toggle="modal" data-target="#exampleModalCenter1" aria-haspopup="true" aria-expanded="false">Login</a></div>
				<div class="user_box_register menu_item user_box_link"><a href="#" class="text-white" data-toggle="modal" data-target="#exampleModalCenter2" aria-haspopup="true" aria-expanded="false">Register</a></div>
			</div>
			<ul>
				<li class="main_nav_item"><a href="index.php">Home</a></li><br><br>
				<li class="main_nav_item"><a href="aboutus.php">AboutUs</a></li><br><br>
				<li class="main_nav_item"><a href="ticket.php">Ticket</a></li><br><br>
				<li class="main_nav_item"><a href="customizedtour.php">Customized Tour</a></li><br><br>
				
				<li class="main_nav_item dropdown dropright">
					<a href="packagetour.php" class="main_nav-item dropdown-toggle" data-toggle="dropdown">Packaged Tour</a>
					<div class="dropdown-menu">
						<?php 
					
                						  $viewquery="select * from package";
                						  foreach ($db->query($viewquery) as $row)
                						  {
                						     
                						      $package_id=$row['package_id'];
                						      $package_type=$row['package_type'];
                						      echo "<a href='packagetour.php?packagelist_id=$package_id' class='dropdown-item'>$package_type</a>";
                						      
                						  }
                						?>
									

                   </div>
				</li><br><br>
				
				<li class="main_nav_item dropdown dropright">
 					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
					<div class="dropdown-menu">
					<a class="dropdown-item" href="contact.php">Contact</a>
                    <a class="dropdown-item" href="offers.php">Service</a>
                    <a class="dropdown-item" href="faq.php">FAQ</a>
                    <a class="dropdown-item" href="blog.php">Blog</a>
                    </div>
				</li><br><br>
				
			</ul>
		</div>
	</div>

<!-- END nav -->

<!-- login -->
	<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header text-center">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="login px-sm-4 mx-auto mw-100">
						<h5 class="text-center mb-4">Login Now</h5>
						<form action="#" method="post">
						<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
							<div class="form-group">
								<label class="mb-2">Email</label>
								<input type="text" class="form-control" name="email" placeholder="" required="">
							</div>
							<div class="form-group">
								<label class="mb-2">Password</label>
								<input type="password" class="form-control" name="password" placeholder="" required="">
							</div>

							<button type="submit" name="loginsubmit" id="form_submit_button" class="form_submit_button button trans_200">Login</button><br><br><br>
							<p class="text-center pb-4">
								<a href="#">Forgot your password?</a>
							</p>
							<p class="text-center pb-4 create-w3ls">
								Don't have an account?
								<a href="#" data-toggle="modal" data-target="#exampleModalCenter2">Create one now</a>
							</p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //login -->
	
	<!-- register -->

<!--Javascript for check email availabilty-->
    <script>
        function checkAvailability() {
        
        $("#loaderIcon").show();
        jQuery.ajax({
        url: "check_availability.php",
        data:'emailid='+$("#email").val(),
        type: "POST",
        success:function(data){
        $("#user-availability-status").html(data);
        $("#loaderIcon").hide();
        },
        error:function (){}
        });
        }
    </script>

	<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header text-center">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="login px-sm-4 mx-auto mw-100">
						<h5 class="text-center mb-4">Register Now</h5>
						<form action="#" method="post" enctype="multipart/form-data">
						<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
							<div class="form-group">
								<label>Your Name</label>
								<input type="text" class="form-control" name="name" autocomplete="off" placeholder="" required="">
							</div>
							<div class="form-group">
								<label>Image</label>
								<input type="file" class="form-control" name="userimage" autocomplete="off" placeholder="" required="">
							</div>
							
							<div class="form-group">
								<label>NRC</label>
								<input type="text" class="form-control" name="nrc" autocomplete="off" placeholder="" required="">
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="email" class="form-control" name="email" id="email" onBlur="checkAvailability()" autocomplete="off" placeholder="" required="">
								<span id="user-availability-status" style="font-size:12px;"></span> 
							</div>
							<div class="form-group">
								<label>PhoneNumber</label>
								<input type="number" class="form-control" name="phno" maxlength="10" autocomplete="off" placeholder="" required="">
							</div>
							<div class="form-group">
								<label>Address</label>
								<input type="text" class="form-control" name="address" autocomplete="off" placeholder="" required="">
							</div>
							<div class="form-group">
								<label class="mb-2">Password</label>
								<input type="password" class="form-control" name="password" placeholder="" required="">
							</div>
							
							<div class="form-group">
							<button type="submit" name="regsubmit" id="form_submit_button" class="form_submit_button button trans_200">Register</button><br><br><br>
							<p class="text-center pb-4">
								<a href="#">By clicking Register, I agree to your terms</a>
							</p>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //register -->
	
	
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>

<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="js/about_custom.js"></script>

<script src="js/contact_custom.js"></script>

<script src="js/offers_custom.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>

<script src="js/bootstrap-datepicker.js"></script>

<!-- From Another Vendors links -->
        <!-- Extra plugin js -->
        <script src="vendors/bootstrap-selector/bootstrap-select.js"></script>
        <script src="vendors/bootatrap-date-time/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/countdown/jquery.countdown.js"></script>
        <script src="vendors/js-calender/zabuto_calendar.min.js"></script>
        <!--gmaps Js-->

</body>

</html>