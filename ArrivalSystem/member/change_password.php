<?php
session_start();
error_reporting(0);
include 'header.php';
include 'admin/connect.php';


    if(isset($_POST['changepassword']))
    {
        
        $password=md5($_POST['password']);
        $newpassword=md5($_POST['newpassword']);
        $email=$_SESSION['login'];
        
        $sql ="SELECT u_Pw FROM tbl_user WHERE u_Email=:email and u_Pw=:password";
        $query= $db -> prepare($sql);
        $query-> bindParam(':email', $email, PDO::PARAM_STR);
        $query-> bindParam(':password', $password, PDO::PARAM_STR);
        $query-> execute();
        $results = $query -> fetchAll(PDO::FETCH_OBJ);
        if($query -> rowCount() > 0)
        {
            
            $con="update tbl_user set u_Pw=:newpassword where u_Email=:email";
            $chngpwd1 = $db->prepare($con);
            $chngpwd1-> bindParam(':email', $email, PDO::PARAM_STR);
            $chngpwd1-> bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
            $chngpwd1->execute();
            
            header("Location:change_password.php");
                $msg="Successfully Password Changes";
                

//             echo "<div class='row'>";
//             echo "<div class='col-md-12' style='height: 40px;'>";
//             echo "<div class='wow fadeInDown animated animated' data-wow-delay='.5s' style='visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;'>";
//             echo "<div class='alert alert-success'>";
//             echo "<strong style='font-size: 20px;'>Successfully Password Changing Updated!</strong>";
//             echo "</div>";
//             echo "</div>";
//             echo "</div>";
//             echo "</div>"; 
        }
        else {
            $error="Your current password is wrong";
        }
        

    }    
?>

<style>

hr.style16 {
	border-top: 4px solid #8c8b8b;
	text-align: center;
	width: 100%;
}

hr.style16:after {
	content: '\002665';
	display: inline-block;
	position: relative;
	top: -15px;
	padding: 0 10px;
	background: white;
	color: #ffb400;
	font-size: 20px;
}
h1.style15 {
	text-align: center;
}

h1.style15:after {
	content: '\002665';
	display: inline-block;
	position: relative;
	top: -50px;
	padding: 0 10px;
	margin-left: -20px;
 	color: #ffb400; 
	font-size: 70px;
/* 	writing-mode: vertical-r1; */
	transform: rotate (-180deg);
	
}

ul.tp-hd-lft{
    float: left;
}
ul.tp-hd-lft li {
    display: inline-block;
}

li.hm,li.prnt {
    margin-left: 50px;
    color: #ffb400;
    font-size: 20px;
    
}

li.hm,li.prntt {
    margin-left: 10px;
    color: #ffb400;
    font-size: 30px;
}

ul.tp-hd-lft a {
    font-family:Ayuthaya;
    font-size: 20px;
    font-weight: 500;
/* 	color: #fff0cc; */
    color: black;
	line-height: 50px;
}

ul.tp-hd-lft a:hover {
/*     color: #ffb400; */
    color: red; 
}
#fontstyle{
    font-family:Ayuthaya;
    font-size: 20px;
    color: black;
}
#fontstyle:hover{
    font-family:Ayuthaya;
    font-size: 25px;
    color: #ffb400;
}
#fontstyleee{
    font-family:Ayuthaya;
    font-size: 20px;
    color: black;
    float: left;
    margin-left: 5px;
}
#fontstylee{
    font-family: "Indie Flower", cursive;
    font-size: 40px;
    color: black;
    padding-left: 15%;
    font-weight: 1000;
	line-height: 86.4px;
}

 </style> 

<!-- Start Part 1 -->
<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->

		<div class="home_slider_container">
			
			<div class="owl-carousel owl-theme home_slider">

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<!-- Image by https://unsplash.com/@anikindimitry -->
					<div class="home_slider_background" style="background-image:url(images/home_slider.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>discover</h1>
							<h1 class="style15">Myanmar</h1>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(images/home_slider.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h2 style="color: white;font-family: Indie Flower, cursive;font-size:60px;font-weight: 600;line-height: 80px;">Travel Myanmar with One of the best Myanmar tour operators, Arrival Travel & Tour Co.,ltd</h2>
							<div class="button home_slider_button"><div class="button_bcg"></div><a href="#">explore now<span></span><span></span><span></span></a></div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(images/home_slider.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>discover</h1>
							<h1 class="style15">Myanmar</h1>
							<div class="button home_slider_button"><div class="button_bcg"></div><a href="#">explore now<span></span><span></span><span></span></a></div>
						</div>
					</div>
				</div>

			</div>
			
			<!-- Home Slider Nav - Prev -->
			<div class="home_slider_nav home_slider_prev">
				<svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
						<linearGradient id='home_grad_prev'>
							<stop offset='0%' stop-color='#fa9e1b'/>
							<stop offset='100%' stop-color='#8d4fff'/>
						</linearGradient>
					</defs>
					<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
					M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
					C22.545,2,26,5.541,26,9.909V23.091z"/>
					<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
					11.042,18.219 "/>
				</svg>
			</div>
			
			<!-- Home Slider Nav - Next -->
			<div class="home_slider_nav home_slider_next">
				<svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
						<linearGradient id='home_grad_next'>
							<stop offset='0%' stop-color='#fa9e1b'/>
							<stop offset='100%' stop-color='#8d4fff'/>
						</linearGradient>
					</defs>
				<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
				M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
				C22.545,2,26,5.541,26,9.909V23.091z"/>
				<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
				17.046,15.554 "/>
				</svg>
			</div>

			<!-- Home Slider Dots -->

			<div class="home_slider_dots">
				<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
					<li class="home_slider_custom_dot active"><div></div>01.</li>
					<li class="home_slider_custom_dot"><div></div>02.</li>
					<li class="home_slider_custom_dot"><div></div>03.</li>
				</ul>
			</div>
			
		</div>

	</div>

	<!-- Search -->

	<div class="search" style="height: auto;">
	
		<div class="container fill_height">
			<div class="row fill_height">
				<div class="col fill_height">
                		<div class="row">
                			<div class="col-md-6" style="padding: 35px;">
                				<h2 id="fontstylee" class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Change Password</h2>
		<form name="chngpwd" method="post">
		 <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>

	<?php 
$useremail=$_SESSION['login'];
$sql = "SELECT * from tbl_user where u_Email=:useremail";
$query = $db -> prepare($sql);
$query -> bindParam(':useremail',$useremail, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>	
	
	<p style="width: 350px;">
    	<span id="fontstyleee">Email</span> 
    	<input type="email" class="form-control" name="email" value="<?php echo htmlentities($result->u_Email);?>" id="email" readonly>
    </p>
<?php }} ?>    
	<p style="width: 350px;">
		<span id="fontstyleee">Current Password</span>  
		<input type="password" name="password" class="form-control" id="cupassword" required="">
	</p> 
	
	<p style="width: 350px;">
		<span id="fontstyleee">New Password</span> 
		<input type="password" name="newpassword" class="form-control" id="nwpassword" required="">
	</p> 
	
	<p style="width: 350px;">
		<span id="fontstyleee">Comfirm Password</span> 
		<input type="password" name="confirmpassword" class="form-control" id="cmpassword" required="">
	</p> 
<br>
	
	<p style="width: 350px;">
		<button type="submit" name="changepassword" class="btn-primary btn">Update</button>
	</p>
	
	</form>
    </div>
                			
    <div class="col-md-6" style="padding: 30px;">
		<a href="#">
			<img src="images/password2.png" width="100%" height="500px" class="img-responsive ftco-animate">
		</a>
	</div>
                			
              </div>
              </div>
              </div>
              </div>
		
		
	</div>
	
	
	
<!-- End Part 1 -->

<?php 
include 'footer.php';
?>