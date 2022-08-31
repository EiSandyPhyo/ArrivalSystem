<?php
include 'header.php';
?>

<style>

.homee
{
	width: 100%;
	height: 80vh;
}
.home_slider_containerr
{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	z-index: 10;
}

.home_slider_itemm
{
	width: 100%;
	height: 80%;
}
.home_slider_backgroundd
{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background-position: center;
	background-attachment: scroll;
	background-repeat: no-repeat;
	background-size: cover;
}
.home_slider_contentt
{
	position: absolute;
	top: 60%;
	left: 50%;
	-webkit-transform: translate(-50%, -50%);
	-moz-transform: translate(-50%, -50%);
	-ms-transform: translate(-50%, -50%);
	-o-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%);
	z-index: 11;
}

#headerstyle{
	color: rgb(255, 255, 255);
	font-family: "Indie Flower", cursive;
	font-size: 72px;
	font-weight: 400;
	line-height: 86.4px;
	margin-bottom: 16px;
	margin-top: 0px;
	text-align: center;
	visibility: visible;
}

.intro_contentt{
	padding-left: 60px;
}

</style>


<!-- Start Part 1 -->

	<div class="homee">
		<div class="home_slider_containerr">
			<div class="home_slider_itemm">
				<div class="home_slider_backgroundd" style="background-image:url(images/about_background.jpg)">
					<div class="home_slider_contentt text-center">
						<h1 id="headerstyle">Services</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- End Part 1 -->

<!-- Start Part 2 -->

	<div class="container">
		<div class="row">
		
			<div class="col-md-6" style="margin-top: 200px;">
				<div class="">
              	<h3 style="font-family: Ayuthaya;margin-left: 20px;font-size: 35px;"><span style="color: black"><span style="color: black">Our </span></span><span style="color: #ffb400;">Services</span> </h3>
              	<br>
              	<p style="line-height: 30px;color: black;font-family:Ayuthaya;font-size: 15px;margin-left: 20px; text-align: justify;">
                  
                    <img src="images/specialactivities.png" width="30px" height="30px" class="img-responsive">
                    <span>Special Activities</span>
                    <br><br>
                    <img src="images/travelarrangement.png" width="30px" height="30px" class="img-responsive">
                    <span>Travel Arrangements</span>
                    <br><br>
                    <img src="images/privateguide.png" width="30px" height="30px" class="img-responsive">
                    <span>Private Guide</span>
                    <br><br>
                    <img src="images/locationmanager.png" width="30px" height="30px" class="img-responsive">
                    <span>Location Manager</span>
                      	
                </p>
            </div>
			</div>
			
			<div class="col-md-6">
				<img src="images/trip.png" width="100%" height="100%" class="img-responsive" alt="service">
			</div>
		</div>
	</div>
<br><br>
<!-- End Part 2 -->

<!-- Start Part 3 -->



<!-- End Part 3 -->

<!-- Start Part 4 -->



<!-- End Part 4 -->

<?php
include 'footer.php';
?>