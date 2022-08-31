<?php 
include 'header.php';
include 'admin/connect.php';
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
#searchh
{
	width: 100%;
	height: auto;
	z-index: 10;
/* 	background-color: #FA9E1B; */
}
#welcome
{
	width: 100%;
	height: auto;
/* 	background: linear-gradient(to right, #fa9e1b, #8d4fff);  */
}

#test_content_containerr
{
	position: absolute;
	left: 0;
	bottom: 0;
	width: 100%;
/* 	height: 100%%; */
}
#test_item_infoo
{
	position: absolute;
    left: 40%;
	bottom: calc(100% - 18px);
    padding: 20px;
	z-index: 10;
/* 	background-color: #FA9E1B; */
	background: linear-gradient(to right, #fa9e1b, #8d4fff);
	border-radius: 27px;
	
	
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

	<div id="searchh">
		

		<!-- Search Contents -->
		
		<div class="container fill_height">
			<div class="row fill_height">
				<div class="col fill_height">

					<!-- Search Tabs -->

					<div class="search_tabs_container">
						<div class="search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							
							<div class="search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/suitcase.png" alt=""><span>hotels</span></div>
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/departure.png" alt="">flights</div>
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/bus.png" alt="">Bus</div>
						
						</div>		
					</div>

					<!-- Search Panel -->

					<div class="search_panel active">
						<div class="container">
						<div class="row">
							<div class="col-md-1">
							</div>
							<div class="col-md-10" style="padding: 30px;">
            					
            					<div class="test_item">
									<div class="test_image"><img src="images/mainhotel.jpg" style="width: 100%; height:550px;"></div>
									<div class="test_icon"><img src="images/hotel3.png" alt="" style="width: 30px; height: 35px;"></div>
									<div id="test_content_containerr">
										<div class="test_content">
			
											<div id="test_item_infoo">
												<div class="test_name"><a href="hotel.php"><span style="color: black;">Search Hotels</span>&nbsp;&nbsp;&nbsp;<img src="images/moredetail.png" width="30px" height="25px" class="img-responsive wow fadeInLeft animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;"></a></div>
											</div>							
												
										</div>
									</div>
								</div>
            					
							</div>
							<div class="col-md-1">
							</div>
						</div>
						</div>
					</div>

					<!-- Search Panel -->

					<div class="search_panel">
						<div class="container">
						<div class="row">
							<div class="col-md-1">
							</div>
							<div class="col-md-10" style="padding: 30px;">
            					
            					<div class="test_item">
									<div class="test_image"><img src="images/mainairplane.jpg" style="width: 100%; height:550px;"></div>
									<div class="test_icon"><img src="images/plane.png" alt="" style="width: 30px; height: 35px;"></div>
									<div id="test_content_containerr">
										<div class="test_content">
			
											<div id="test_item_infoo">
												<div class="test_name"><a href="flight.php"><span style="color: black;">Search Airlines</span>&nbsp;&nbsp;&nbsp;<img src="images/moredetail.png" width="30px" height="25px" class="img-responsive wow fadeInLeft animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;"></a></div>
											</div>							
												
										</div>
									</div>
								</div>
            					
							</div>
							<div class="col-md-1">
							</div>
						</div>
						</div>
					</div>

					<!-- Search Panel -->

					<div class="search_panel">
						<div class="container">
						<div class="row">
							<div class="col-md-1">
							</div>
							<div class="col-md-10" style="padding: 30px;">
            					
            					<div class="test_item">
									<div class="test_image"><img src="images/mainbus.jpg" style="width: 100%; height:550px;"></div>
									<div class="test_icon"><img src="images/buss.png" alt="" style="width: 30px; height: 35px;"></div>
									<div id="test_content_containerr">
										<div class="test_content">
			
											<div id="test_item_infoo">
												<div class="test_name"><a href="bus.php"><span style="color: black;">Search Bus</span>&nbsp;&nbsp;&nbsp;<img src="images/moredetail.png" width="30px" height="25px" class="img-responsive wow fadeInLeft animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;"></a></div>
											</div>							
												
										</div>
									</div>
								</div>
            					
							</div>
							<div class="col-md-1">
							</div>
						</div>
						</div>
					</div>

					<!-- Search Panel -->

				</div>
			</div>
		</div>		
	</div>

<br>


<?php 
include 'footer.php';
?>