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

.logo_container
{
	-webkit-transform: translateY(-6px);
	-moz-transform: translateY(-6px);
	-ms-transform: translateY(-6px);
	-o-transform: translateY(-6px);
	transform: translateY(-6px);
}

.contact_form_section
{
	padding-top: 105px;
}
.contact_form_container
{
	padding-top: 74px;
	padding-left: 98px;
	padding-right: 98px;
	padding-bottom: 88px;
	background: linear-gradient(to top right, #fa9e1b, #8d4fff);
}
.contact_title
{
	font-size: 30px;
	font-weight: 700;
	color: #FFFFFF;
	text-transform: uppercase;
}
.contact_form
{
	margin-top: 52px;
	font-size: 0px;
}
.input_field
{
	height: 48px;
	font-size: 12px;
	font-weight: 400;
	border: none;
	outline: none;
	background: transparent;
	color: #FFFFFF;
	border-bottom: solid 2px #e1e1e1;
}
.contact_form_name
{
 	width: calc((100% - 30px) / 3);
 	margin-right: 5px; 
}
.contact_form_email
{
    
 	width: calc((100% - 30px) / 3); 
}
.contact_form_subject
{
  	width: 100%;  
  	margin-top: 11px;  
}
.form_submit_button
{
	font-size: 13px;
	font-weight: 700;
	color: #fff;
	text-transform: uppercase;
	line-height: 53px;
	padding-left: 29px;
	padding-right: 29px;
	background: #31124b;
	-webkit-transform: translateY(15px);
	-moz-transform: translateY(15px);
	-ms-transform: translateY(15px);
	-o-transform: translateY(15px);
	transform: translateY(15px);
	border: none;
	outline: none;
	margin-top: 37px;
	cursor: pointer;
}
.form_submit_button:hover
{
	opacity: 0.8;
}
.input_field::-webkit-input-placeholder,
.text_field::-webkit-input-placeholder
{
	font-size: 12px !important;
	font-weight: 400 !important;
	color: #FFFFFF !important;
}
.input_field:-moz-placeholder,
.text_field:-moz-placeholder
{
	font-size: 12px !important;
	font-weight: 400 !important;
	color: #FFFFFF !important;
}
.input_field::-moz-placeholder,
.text_field::-moz-placeholder
{
	font-size: 12px !important;
	font-weight: 400 !important;
	color: #FFFFFF !important;
} 
.input_field:-ms-input-placeholder,
.text_field:-ms-input-placeholder
{ 
	font-size: 12px !important;
	font-weight: 400 !important;
	color: #FFFFFF !important;
}
.input_field::input-placeholder,
.text_field::input-placeholder
{
	font-size: 12px !important;
	font-weight: 400 !important;
	color: #FFFFFF !important;
}

/*********************************
6. About
*********************************/

.about
{
	padding-top: 105px;
	padding-bottom: 146px;
	z-index: 1;
}
.about_image
{
	position: absolute;
	top: -38px;
	left: 15px;
}
.about_content
{
	padding-top: 10px;
}
.about_logo
{
	position: absolute;
	left: 0;
	top: 4px;
}
.about_logo a
{
	color: #2e2e2e;
	font-weight: 800;
	text-transform: uppercase;
}
.about_text
{
	font-size: 14px;
	font-weight: 600;
	line-height: 2.29;
	color: #929191;
}
.about_social_list
{
	margin-top: 40px;
}
.about_social_item
{
	display: inline-block;
	width: 47px;
	height: 47px;
	border: solid 2px #fa9e1b;
	border-radius: 50%;
	text-align: center;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
	margin-right: 15px;
}
.about_social_item:last-child
{
	margin-right: 0px;
}
.about_social_item a
{
	display: block;
	position: relative;
	width: 100%;
	height: 100%;
}
.about_social_item a i
{
	display: block;
	position: relative;
	color: #fa9e1b;
	top: 50%;
	-webkit-transform: translateY(-50%);
	-moz-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	-o-transform: translateY(-50%);
	transform: translateY(-50%);
	font-size: 20px;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.about_social_item:hover
{
	background: #fa9e1b;
}
.about_social_item:hover a i
{
	color: #FFFFFF;
}

.about_info .contact_info_item:last-child
{
	margin-bottom: 0px;
}
.about_info .contact_info_list
{
	margin-top: 0px;
}
.about_info .contact_info_text,
.about_info .contact_info_text a
{
	color: #2e2e2e;
}

/*********************************
7. Travelix Map
*********************************/

.travelix_map
{
	width: 100%;
}
.google_map
{
	width: 100%;
	height: 581px;
}
.map_container
{
	width: 100%;
	height: 100%;
	overflow: hidden;
}
#map
{
	width: 100%;
	height: calc(100% + 30px);
}

</style>


<!-- Start Part 1 -->

	<div class="homee">
		<div class="home_slider_containerr">
			<div class="home_slider_itemm">
				<div class="home_slider_backgroundd" style="background-image:url(images/about_background.jpg)">
					<div class="home_slider_contentt text-center">
						<h1 id="headerstyle">Contact Us</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- End Part 1 -->

<!-- Start Part 2 -->
	
	<div class="container">
    	<div class="row">
				<div class="col-md-5"></div>
				<div class="col-md-2" style="text-align: center;">
				<a href="#">
					<img src="images/customizedimages/contact.png" width="80px" height="80px" class="img-responsive">
				</a>
				</div>
				<div class="col-md-5"></div>
			</div>
    </div>
    
<!-- End Part 2 -->

<!-- Start Part 3 -->

	<div class="contact_form_section">
		<div class="container">
			<div class="row">
				<div class="col">

					<!-- Contact Form -->
					<div class="contact_form_container">
						<div class="contact_title text-center"><h1 style="font-size: 5vmin;font-family: Comic Sans MS;">get in touch</h1></div>
						<form action="#" id="contact_form" class="contact_form text-center">
							<input type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="Name" required="required" data-error="Name is required.">
							<input type="text" id="contact_form_email" class="contact_form_email input_field" placeholder="E-mail" required="required" data-error="Email is required.">
							<input type="text" id="contact_form_subject" class="contact_form_subject input_field" placeholder="Subject" required="required" data-error="Subject is required.">
							<textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
							<button type="submit" id="form_submit_button" class="form_submit_button button trans_200">send message</button>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>

<!-- End Part 3 -->

<!-- Start Part 4 -->

	<div class="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">

					<div class="about_image">
						<img src="images/man.png" alt="" class="img-responsive">
					</div>

				</div>

				<div class="col-lg-4">
					<div class="about_content">
						<div class="logo_container about_logo">
							<div class="logo"><a href="#"><img src="images/logo.png" alt=""><span style="color: black;">Arrival</span></a></div>
						</div>
					<br><br><br><br>
						<div class="about_info">
						<ul class="contact_info_list" >
							<li class="contact_info_item d-flex flex-row">
								<div><div class="contact_info_icon"><img src="images/placeholder.svg" alt=""></div></div>
								<div class="contact_info_text">4127 Raoul Wallenber 45b-c Gibraltar</div>
							</li>
							<li class="contact_info_item d-flex flex-row">
								<div><div class="contact_info_icon"><img src="images/phone-call.svg" alt=""></div></div>
								<div class="contact_info_text">2556-808-8613</div>
							</li>
							<li class="contact_info_item d-flex flex-row">
								<div><div class="contact_info_icon"><img src="images/message.svg" alt=""></div></div>
								<div class="contact_info_text"><a href="mailto:contactme@gmail.com?Subject=Hello" target="_top">contactme@gmail.com</a></div>
							</li>
							<li class="contact_info_item d-flex flex-row">
								<div><div class="contact_info_icon"><img src="images/planet-earth.svg" alt=""></div></div>
								<div class="contact_info_text"><a href="https://colorlib.com">www.colorlib.com</a></div>
							</li>
						</ul>
						</div>
						
						<ul class="about_social_list">
							<li class="about_social_item"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
							<li class="about_social_item"><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li class="about_social_item"><a href="#"><i class="fa fa-instagram"></i></a></li>
						</ul>
						
					</div>

				</div>
				<div class="col-lg-3">
				</div>
				

			</div>
		</div>
	</div>

<!-- End Part 4 -->

<!-- Start Part 5 -->

	<div class="container">
		<div class="row">
			<div class="col-md-12">
          	<div style='overflow:hidden;height:440px;width:100%;'><div id='gmap_canvas' style='height:440px;width:100%;'></div><div><small><a href="http://www.googlemapsgenerator.com/">google maps gömmek</a></small></div><div><small><a href="https://ww.buywebtrafficexperts.com/">external download link one</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(16.763759458433604,96.17755924609378),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(16.763759458433604,96.17755924609378)});infowindow = new google.maps.InfoWindow({content:'<strong>Title</strong><br>Arrival Agency Yangon<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
          </div>
        </div>
    </div>
    <br><br>
<!-- End Part 5 -->



<?php 
include 'footer.php';
?>