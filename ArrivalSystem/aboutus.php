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

<!-- 	<div class="home"> -->
<!-- 		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/about_background.jpg"></div> -->
<!-- 		<div class="home_content"> -->
<!-- 			<div class="home_title">about us</div> -->
<!-- 		</div> -->
<!-- 	</div> -->
	
	<div class="homee">
		<div class="home_slider_containerr">
			<div class="home_slider_itemm">
				<div class="home_slider_backgroundd" style="background-image:url(images/about_background.jpg)">
					<div class="home_slider_contentt text-center">
						<h1 id="headerstyle">About Us</h1>
					</div>
				</div>
			</div>
		</div>
	</div>


<!-- End Part 1 -->

<!-- Start Part 2 -->

	<div class="container" >
        <div class="row">

          <div class="img col-md-6">
          	<img src="images/intro.png" width="100%" height="100%" class="img-responsive" alt="view">
          </div>

          <div class="text col-md-6">
            <div class="text-inner align-self-start">
              <h3 style="font-family: Ayuthaya;margin-left: 20px;"><span style="color: black"><span style="color: black">We have the best </span></span><span style="color: #ffb400;">Tours</span> </h3><br>
              <p style="line-height: 35px;color: black;font-family:Ayuthaya;font-size: 15px;margin-left: 20px; text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;
              Arrival is a leading Travel Agent for travelers who would like to create their own unique travel experience in Myanmar. It is a 100% Myanmar citizen owned, non-government tour operator, run and managed by enthusiastic and experienced professionals. We also have skillful representatives in each main destination to provide you with the best travel operation. We work directly with you and we provide the best value for your money. Only the highest skillful guides will accompany you on your trip. Their professionalism, personality and outstanding knowledge are the reasons why they are employed by us, and they will be a memorable part of your journey. Their ability to communicate their culture clearly and in a friendly and educational manner will make the experience even more enjoyable. 
              </p>
<!--             	<div class="button"><div class="button_bcg"></div><a href="#">explore now<span></span><span></span><span></span></a></div> -->
            </div>
          </div>
          
        </div>
      </div>

<!-- End Part 2 -->

<!-- Start Part 4 -->
<br><br><br><br>
<div class="milestones">
		<div class="container">
			<div class="row">
				
				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images/milestone_6.png" height="60px" alt="" class="img-responsive"></div>
						<div class="milestone_counter" data-end-value="255">0</div>
						<div class="milestone_text">Clients</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images/milestone_5.png" height="60px" alt="" class="img-responsive"></div>
						<div class="milestone_counter" data-end-value="1176">0</div>
						<div class="milestone_text">Packages</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images/milestone_3.png" alt="" class="img-responsive"></div>
						<div class="milestone_counter" data-end-value="39">0</div>
						<div class="milestone_text">Places</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images/milestone_7.png" height="60px" alt="" class="img-responsive"></div>
						<div class="milestone_counter" data-end-value="127">0</div>
						<div class="milestone_text">Bookings</div>
					</div>
				</div>

			</div>
		</div>
	</div>
<br><br><br><br>
<!-- End Part 4 -->


<?php 
include 'footer.php';
?>