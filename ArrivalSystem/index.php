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

#welcome
{
	width: 100%;
	height: auto;
/* 	background: linear-gradient(to right, #fa9e1b, #8d4fff);  */
}

#test_content_container
{
	position: absolute;
	left: 0;
	bottom: 0;
	width: 100%;
/* 	height: 100%%; */
}
#test_item_info
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
#aa{
    font-family: Comic Sans MS;
    font-size: 35px;
	font-weight: 700;
	color: #2d2c2c;
}
#bb
{
    font-family:Ayuthaya;
    font-size: 14px;
    line-height: 40px;
}
#cc
{
    font-family:Ayuthaya;
    font-size: 25px;
    color: purple;
}
#fontstylee{
    font-family: Comic Sans MS;
    font-size: 14px;
}
#ii
{
    font-size: 14px;
    color: #eda84a;
    font-weight: 200;
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

<!-- End Part 1 -->


	<div class="container" id="welcome">
		<div class="row">
			<div class="col-md-12">
				<h3 class="intro_title text-center" style="color: black;font-family:Ayuthaya;margin-top: 70px;">Welcome to Arrival Myanmar Travel and Tour</h3><br>
				<p class="intro_text text-center" style="line-height: 30px;color: black;font-family:Ayuthaya;font-size: 15px;">Numerous travel destinations have sprung up across the world in recent years, but nowhere like Myanmar. In each of our tour packages, we cater to different tastes to satisfy your wish to enjoy every moment of your dream vacation. <br><br>
				You can get almost all information about Myanmar especially destinations, festivals, cars, flights and Hotels information on our travel website (www.arrivalmyanmar.com). <br><br>
				Whether you are looking for a peaceful and tranquil holiday vacation or you want to make it adventurous, One of the best tour operators in Myanmar( Arrival Travel and Tour ) has a boutique of tour packages to cater to your varied needs. For your holiday trips, we also offer some interesting activities such as cruises, sea diving, snorkelling, trekking and exotic local cuisines. Come to Myanmar and explore the last hidden gems of Southeast Asia with your loved one.
			</div>
		</div>
	
	</div>
<br><br><br>
<hr class="style16">


<!-- Start Part 2 -->

<!-- Intro -->
	
	<div class="intro">
		<div class="container">
			<div class="row">
				<div class="col">
					 <h3 class="intro_title text-center" style="font-family: Ayuthaya;"><span style="color: black"><span style="color: black">We have the best </span></span><span style="color: black;">Tours</span> </h3>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="intro_text text-center">
						<p style="line-height: 30px;color: black;font-family:Ayuthaya;font-size: 15px;"></p>
					</div>
				</div>
			</div>
			<div class="row intro_items">

				<!-- Intro Item -->

				<div class="col-lg-4 intro_col">
					<div class="intro_item">
						<div class="intro_item_overlay"></div>
						<!-- Image by https://unsplash.com/@dnevozhai -->
						<div class="intro_item_background" style="background-image:url(images/bagan.png)"></div>
						<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
							<div class="intro_date">May 25th - June 01st</div>
							<div class="button intro_button"><div class="button_bcg"></div><a href="#" data-toggle="modal" data-target="#exampleModalCenter1" id="fontstylee">see more<span></span><span></span><span></span></a></div>
							<div class="intro_center text-center">
								<h1>Bagan</h1>
								<div class="intro_price">From $1450</div>
								<div class="rating rating_4">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Intro Item -->

				<div class="col-lg-4 intro_col">
					<div class="intro_item">
						<div class="intro_item_overlay"></div>
						<!-- Image by https://unsplash.com/@hellolightbulb -->
						<div class="intro_item_background" style="background-image:url(images/inle.png)"></div>
						<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
							<div class="intro_date">May 25th - June 01st</div>
							<div class="button intro_button"><div class="button_bcg"></div><a href="#" data-toggle="modal" data-target="#exampleModalCenter1" id="fontstylee">see more<span></span><span></span><span></span></a></div>
							<div class="intro_center text-center">
								<h1>Inle</h1>
								<div class="intro_price">From $1450</div>
								<div class="rating rating_4">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Intro Item -->

				<div class="col-lg-4 intro_col">
					<div class="intro_item">
						<div class="intro_item_overlay"></div>
						<!-- Image by https://unsplash.com/@willianjusten -->
						<div class="intro_item_background" style="background-image:url(images/mandalayy.png)"></div>
						<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
							<div class="intro_date">May 25th - June 01st</div>
							<div class="button intro_button"><div class="button_bcg"></div><a href="#" data-toggle="modal" data-target="#exampleModalCenter1" id="fontstylee">see more<span></span><span></span><span></span></a></div>
							<div class="intro_center text-center">
								<h1>Mandalay</h1>
								<div class="intro_price">From $1450</div>
								<div class="rating rating_4">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

<!-- End Part 2 -->

<!-- Start Part 3 -->

<!-- CTA -->

	<div class="cta">
		<!-- Image by https://unsplash.com/@thanni -->
		<div class="cta_background" style="background-image:url(images/cta.jpg)"></div>
		
		<div class="container">
			<div class="row">
				<div class="col">

					<!-- CTA Slider -->

					<div class="cta_slider_container">
						<div class="owl-carousel owl-theme cta_slider">

							<!-- CTA Slider Item -->
							<div class="owl-item cta_item text-center">
								<div id="aa">Special Activites</div>
								<div class="rating_r rating_r_4">
									<i></i>
									<i></i>
									<i></i>
									<i></i>
									<i></i>
								</div>
								<p id="bb">
								<span id="cc">"</span>
								Enjoy a boat ride on Inle Lake, Ride a hot air balloon in Bagan, Journey across Goteik Viaduct via rail, Make Kawthaung your base for island-hopping adventures, Enjoy the beach life at Ngapali, Explore Kyat Cave in Loikaw
								<span id="cc">"</span>
								</p>
								<div class="button cta_button"><div class="button_bcg"></div><a href="#" data-toggle="modal" data-target="#exampleModalCenter1" id="fontstylee">book now<span></span><span></span><span></span></a></div>
							</div>

							<!-- CTA Slider Item -->
							<div class="owl-item cta_item text-center">
								<div id="aa">Travel Arrangements</div>
								<div class="rating_r rating_r_4">
									<i></i>
									<i></i>
									<i></i>
									<i></i>
									<i></i>
								</div>
								<p id="bb">
								<span id="cc">"</span>
								As Travel Arrangements packages are available. Packages according to categories and packages by custom. 
								<span id="cc">"</span>
								</p>
								<br><br>								
								<div class="button cta_button"><div class="button_bcg"></div><a href="#" data-toggle="modal" data-target="#exampleModalCenter1" id="fontstylee">book now<span></span><span></span><span></span></a></div>
							</div>

							<!-- CTA Slider Item -->
							<div class="owl-item cta_item text-center">
								<div id="aa">Private Guide</div>
								<div class="rating_r rating_r_4">
									<i></i>
									<i></i>
									<i></i>
									<i></i>
									<i></i>
								</div>
								<p id="bb">
								<span id="cc">"</span>
								If you've just arrived at the country and you still don't know where the places of interest are, then we provide a private guide.
								<span id="cc">"</span>
								</p>
								<br><br>
								<div class="button cta_button"><div class="button_bcg"></div><a href="#" data-toggle="modal" data-target="#exampleModalCenter1" id="fontstylee">book now<span></span><span></span><span></span></a></div>
							</div>
							
						</div>

						<!-- CTA Slider Nav - Prev -->
						<div class="cta_slider_nav cta_slider_prev">
							<svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
								<defs>
									<linearGradient id='cta_grad_prev'>
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
						
						<!-- CTA Slider Nav - Next -->
						<div class="cta_slider_nav cta_slider_next">
							<svg version="1.1" id="Layer_5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
								<defs>
									<linearGradient id='cta_grad_next'>
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

					</div>

				</div>
			</div>
		</div>
					
	</div>

<!-- End Part 3 -->

<!-- Start Part 4 -->

<!-- Offers -->

	<div class="offers">
		<div class="container">
			<div class="row">
				<div class="col text-center">

					 <h3 class="intro_title text-center" style="font-family: Ayuthaya;color:black;">The Best Offers With Rooms</h3>
					
				</div>
			</div>
			<div class="row offers_items">

				<!-- Offers Item -->
				<div class="col-lg-6 offers_col">
					<div class="offers_item">
						<div class="row">
							<div class="col-lg-6">
								<div class="offers_image_container">
									<!-- Image by https://unsplash.com/@kensuarez -->
									<div class="offers_image_background" style="background-image:url(images/customizedimages/shangrila.jpg)"></div>
									<div class="offer_name"><a href="#">shangarila</a></div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="offers_content">
									<div class="offers_price">$100<span>per night</span></div>
									<div class="rating_r rating_r_5 offers_rating">
										<i></i>
										<i></i>
										<i></i>
										<i></i>
										<i></i>
									</div>
									<p class="offers_text" style="text-align: justify;">
										<i class="fa fa-map-marker" aria-hidden="true" id="ii"></i>&nbsp;&nbsp;Sule Pagoda Road, Yangon
										<br>
										<i class="fa fa-phone" aria-hidden="true" id="ii"></i>&nbsp;01 242 828
									</p>
									<div class="offers_icons">
										<ul class="offers_icons_list">
											<li class="offers_icons_item"><img src="images/post.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
										</ul>
									</div>
									<div class="offers_link"><a href="hotel.php">read more</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Offers Item -->
				<div class="col-lg-6 offers_col">
					<div class="offers_item">
						<div class="row">
							<div class="col-lg-6">
								<div class="offers_image_container">
									<!-- Image by Egzon Bytyqi -->
									<div class="offers_image_background" style="background-image:url(images/customizedimages/hilton.jpg)"></div>
									<div class="offer_name"><a href="#">hilton</a></div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="offers_content">
									<div class="offers_price">$80<span>per night</span></div>
									<div class="rating_r rating_r_4 offers_rating">
										<i></i>
										<i></i>
										<i></i>
										<i></i>
										<i></i>
									</div>
									<p class="offers_text" style="text-align: justify;">
										<i class="fa fa-map-marker" aria-hidden="true" id="ii"></i>&nbsp;&nbsp;26th St, 66th St, Mandalay
										<br>
										<i class="fa fa-phone" aria-hidden="true" id="ii"></i>&nbsp;02 403 6488
									</p>
									<div class="offers_icons">
										<ul class="offers_icons_list">
											<li class="offers_icons_item"><img src="images/post.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
										</ul>
									</div>
									<div class="offers_link"><a href="hotel.php">read more</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Offers Item -->
				<div class="col-lg-6 offers_col">
					<div class="offers_item">
						<div class="row">
							<div class="col-lg-6">
								<div class="offers_image_container">
									<!-- Image by https://unsplash.com/@nevenkrcmarek -->
									<div class="offers_image_background" style="background-image:url(images/customizedimages/heritage.jpg)"></div>
									<div class="offer_name"><a href="#">heritage</a></div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="offers_content">
									<div class="offers_price">$80<span>per night</span></div>
									<div class="rating_r rating_r_4 offers_rating">
										<i></i>
										<i></i>
										<i></i>
										<i></i>
										<i></i>
									</div>
									<p class="offers_text" style="text-align: justify;">
										<i class="fa fa-map-marker" aria-hidden="true" id="ii"></i>&nbsp;&nbsp;Nyaung Oo Road, Bagan
										<br>
										<i class="fa fa-phone" aria-hidden="true" id="ii"></i>&nbsp;95 61 2461192
									</p>
									<div class="offers_icons">
										<ul class="offers_icons_list">
											<li class="offers_icons_item"><img src="images/post.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
										</ul>
									</div>
									<div class="offers_link"><a href="hotel.php">read more</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Offers Item -->
				<div class="col-lg-6 offers_col">
					<div class="offers_item">
						<div class="row">
							<div class="col-lg-6">
								<div class="offers_image_container">
									<!-- Image by https://unsplash.com/@mantashesthaven -->
									<div class="offers_image_background" style="background-image:url(images/customizedimages/anantainlayresort.jpg)"></div>
									<div class="offer_name"><a href="#">ananta</a></div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="offers_content">
									<div class="offers_price">$30<span>per night</span></div>
									<div class="rating_r rating_r_4 offers_rating">
										<i></i>
										<i></i>
										<i></i>
										<i></i>
										<i></i>
									</div>
									<p class="offers_text" style="text-align: justify;">
										<i class="fa fa-map-marker" aria-hidden="true" id="ii"></i>&nbsp;&nbsp;Maing Thauk Village, Shan
										<br>
										<i class="fa fa-phone" aria-hidden="true" id="ii"></i>&nbsp;09 258 964 991
									</p>
									<div class="offers_icons">
										<ul class="offers_icons_list">
											<li class="offers_icons_item"><img src="images/post.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
										</ul>
									</div>
									<div class="offers_link"><a href="hotel.php">read more</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

<!-- End Part 4 -->

<!-- Start Part 5 -->


<!-- End Part 5 -->


<?php 
include 'footer.php';
?>