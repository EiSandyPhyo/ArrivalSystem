<?php
session_start();
include 'header.php';
include 'admin/connect.php';

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
/* 	background: #31124b; */
}
.home_slider_backgroundd
{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background-position: center center;
	background-attachment: scroll;
	background-repeat: no-repeat;
	background-size: cover;
	opacity: 2.0;
	
}
.home_slider_contentt
{
	position: absolute;
	top: 60%;
	left: 50%;
	width: auto;
	height: auto;
	-webkit-transform: translate(-50%, -50%);
	-moz-transform: translate(-50%, -50%);
	-ms-transform: translate(-50%, -50%);
	-o-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%);
	z-index: 11;
}

#headerstyle{
	color: white;
	font-family: "Indie Flower", cursive;
	font-size: 72px;
	font-weight: 1000;
	line-height: 86.4px;
	margin-bottom: 16px;
	margin-top: 0px;
	text-align: center;
	visibility: visible;
}

.intro_contentt{
	padding-left: 60px;
}
#icoon{
    color: #ffb400;
}
#fontstyle{
    font-family:Ayuthaya;
    font-size: 15px;
    color: black;
}
#fontstylee{
font-family: Comic Sans MS;
    font-size: 15px;
}
#daystyle{
    color: #FA9E1B;
    font-family:Ayuthaya;
    font-size: 15px;
    font-weight: bold;
}
.btn {
  flex: 1 1 auto;
  margin: 10px;
  padding: 30px;
  text-align: center;
  text-transform: uppercase;
  transition: 0.5s;
  background-size: 200% auto;
  color: black;
 /* text-shadow: 0px 0px 10px rgba(0,0,0,0.2);*/
  box-shadow: 0 0 20px #eee;
  border-radius: 10px;
 }

/* Demo Stuff End -> */

/* <- Magic Stuff Start */

.btn:hover {
  background-position: right center; /* change the direction of the change here */
  color: #5C0116;
  
}

.btn-4 {
  background-image: linear-gradient(to right, #a1c4fd 0%, #c2e9fb 51%, #a1c4fd 100%);
}



#daystyle{
    color: black;
    font-family:Ayuthaya;
    font-size: 16px;
    font-weight: bold;
    }
    
   /*           tab3           */ 
   
* {
  margin: 0;
  padding: 0;
}

#wrapper {
  margin: 100px auto;
  width: 100%;
  font-family: Ayuthaya;
  color: #98927C;
  font-size: 14px;
  line-height: 24px;
  max-width: 600px;
  min-width: 340px;
  overflow: hidden;
}
#tabs #subtab {
  list-style: none;
  float: left;
  width: 20%;
}
#tabs #subtab2 {
  display: block;
  text-align: center;
  text-decoration: none;
  line-style: none;
    position: relative; 
  color: black;
/*   width: 100%; */
  width: 120px;
  height: 70px;
  line-height: 90px;
  background: linear-gradient(165deg, transparent 29%, #98927C 30%);
}
#tabs #subtab2:hover,
#tabs #subtab2.active {
  background: linear-gradient(165deg, transparent 29%, #F2EEE2 30%);
  color: #98927C;
}
#tabs #subtab2:before {
  content: '';
  position: absolute;
  z-index: 11;
  left: 100%;
  top: 0%;
  height: 70px;
  line-height: 90px;
  width: 0;
  border-bottom: 70px solid rgba(0, 0, 0, 0.1);
  border-right: 7px solid transparent;
}
#tabs #subtab2.active:before {
  content: '';
  position: absolute;
  z-index: 11;
  left: 100%;
  top: 0%;
  height: 70px;
  line-height: 90px;
  width: 0;
  border-bottom: 70px solid rgba(0, 0, 0, 0.2);
  border-right: 20px solid transparent;
}
#first-tab-group {
   box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.1); 
  
}
#first-tab-group div {
  padding: 30px;
  background: #F2EEE2;
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.3);
}
#second-tab-group {
   box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.1); 
  
}
#second-tab-group div {
  padding: 30px;
  background: #F2EEE2;
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.3);
}
#third-tab-group {
   box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.1); 
  
}
#third-tab-group div {
  padding: 30px;
  background: #F2EEE2;
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.3);
}
#fourth-tab-group {
   box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.1); 
  
}
#fourth-tab-group div {
  padding: 30px;
  background: #F2EEE2;
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.3);
}
#fifth-tab-group {
   box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.1); 
  
}
#fifth-tab-group div {
  padding: 30px;
  background: #F2EEE2;
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.3);
}
.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
h1.style15 {
	text-align: center;
}

h1.style15:after {
	content: '\002665';
	display: inline-block;
	position: relative;
	top: -40px;
	padding: 0 10px;
	margin-left: -20px;
 	color: black; 
	font-size: 70px;
}
   
.scrollspy-example {
    position: relative;
    height: 150px;
    width: 100%;
/*     margin-top: 1rem; */
    overflow: auto;
    text-align: left;
    
}
.input_fieldd
{
	height: 20px;
	font-size: 14px;
	font-weight: 200;
	border: none;
	outline: none;
	background: transparent;
	color: red;
	
}
#verse1{
    height: 20px;
	font-size: 18px;
	font-weight: 400;
	color: purple;
	font-family:Ayuthaya;
}
#form_submit_buttonn
{
    width: 23%;
}
    
</style>


<!-- Start Part 1 -->

	<div class="homee">
		<div class="home_slider_containerr">
			<div class="home_slider_itemm">
				<div class="home_slider_backgroundd" style="background-image:url(images/about_background.jpg)">
					<div class="home_slider_contentt text-center">
						<h1 id="headerstyle">Customized Tour</h1>
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
					<img src="images/customizedimages/customizedtour1.png" width="150px" height="130px" class="img-responsive">
				</a>
				</div>
				<div class="col-md-5"></div>
			</div>
<br><br>
    </div>
	
<br><br>
<!-- End Part 2 -->

<!-- Start Part 3 -->

	
		<div class="page" style="background-color:  ;height: 1200px;">
		<h1>Regions</h1>		
			<!-- tabs -->
			<div class="pcss3t pcss3t-effect-scale pcss3t-theme-1">
				<input type="radio" name="pcss3t" checked  id="tab1"class="tab-content-first">
				<label for="tab1"><i class="icon-picture"></i>Yangon</label>
				
				<input type="radio" name="pcss3t" id="tab2" class="tab-content-2">
				<label for="tab2"><i class="icon-picture"></i>Mandalay</label>
				
				<input type="radio" name="pcss3t" id="tab3" class="tab-content-3">
				<label for="tab3"><i class="icon-picture"></i>Bagan</label>
				
				<input type="radio" name="pcss3t" id="tab4" class="tab-content-4">
				<label for="tab4"><i class="icon-picture"></i>Inle</label>
				
				<input type="radio" name="pcss3t" id="tab5" class="tab-content-last">
				<label for="tab5"><i class="icon-picture"></i>Ngapali</label>
				
				<ul>
                <!--  ******************** Yangon ***************** -->
					<li class="tab-content tab-content-first typography">
						<h1>Yangon</h1>
						<div class="row">
							<div class="col-md-6">
								<img class="rounded" src="images/customizedimages/yangonn.jpg" alt="Yangon" style="width:100%; height: 350px;">
							</div>
							<div class="col-md-6">
								<img class="rounded" src="images/customizedimages/yangon.jpg" alt="Yangon" style="width:100%; height: 350px;">

							</div>
						</div>
						<br><br><br><br>
						
						<div class="container">
						<div class="row">
						
							<div class="col-md-12">
								<h1>Available Hotel in Yangon</h1>
									<div id="wrapper">
                                      <ul id="tabs" class="tabs clearfix" data-tabgroup="first-tab-group">
                                        <li id="subtab"><a href="#tabb1" class="active" id="subtab2">Shangrila</a></li>
                                        <li id="subtab"><a href="#tabb2" id="subtab2">Sedona</a></li>
                                        <li id="subtab"><a href="#tabb3" id="subtab2">Melia</a></li>
                                        <li id="subtab"><a href="#tabb4" id="subtab2">Novotel</a></li>
                                        <li id="subtab"><a href="#tabb5" id="subtab2">Park Royal</a></li>
                                      </ul>
                                  <section id="first-tab-group" class="tabgroup">
                                    <div id="tabb1">
                                      <h2>Shangrila</h2>
                                      		<img class="rounded" src="images/customizedimages/shangrila.jpg" alt="Shangrila" style="width:100%; height: 350px;">
                                      		<br>
                                      		<p style="line-height: 30px;color: black;font-family:Ayuthaya;font-size: 15px;margin-left: 20px; text-align: justify;">
                                                  
                                                    <img src="images/locationmanager.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Sule Pagoda Road, Yangon</span>
                                                    <br><br>
                                                    <img src="images/phone.png" width="30px" height="30px" class="img-responsive">
                                                    <span>01 242 828</span>
                                                    <br><br>
                                                    <img src="images/starrating2.png" width="30px" height="30px" class="img-responsive">
                                                    <span>5-star</span>
                                                    <br><br>
                                                    <img src="images/check-in.png" width="30px" height="30px" class="img-responsive">
                                                    <span>From 14:00 hours</span>
                                                    <br><br>
                                                    <img src="images/check-out.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Until 12:00 hours</span>
                                                    <br><br>
                                                    <img src="images/indoorpool.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Outdoor Pool</span>
                                                    <br><br>
                                                    <img src="images/wifi2.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Free High Speed Internet (WiFi)</span>
                                                    <br><br>
                                                    <img src="images/gym.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Fitness center</span>
                                                    <br><br>
                                                    <img src="images/spa.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Spa</span> 
                                                    <br><br>
                                                    <img src="images/bar.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Bar</span>
                                                    <br><br>
                                                      	
                                             </p>
                                      	
                                    </div>
                                    <div id="tabb2">
                                      <h2>Sedona</h2>
                                      <img class="rounded" src="images/customizedimages/sedona.jpg" alt="Sedona" style="width:100%; height: 350px;">
                                      		<br>
                                      		<p style="line-height: 30px;color: black;font-family:Ayuthaya;font-size: 15px;margin-left: 20px; text-align: justify;">
                                                  
                                                    <img src="images/locationmanager.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Kabar Aye Pagoda Rd, Yangon </span>
                                                    <br><br>
                                                    <img src="images/phone.png" width="30px" height="30px" class="img-responsive">
                                                    <span>01 860 5377</span>
                                                    <br><br>
                                                    <img src="images/starrating2.png" width="30px" height="30px" class="img-responsive">
                                                    <span>5-star</span>
                                                    <br><br>
                                                    <img src="images/check-in.png" width="30px" height="30px" class="img-responsive">
                                                    <span>From 14:00 hours</span>
                                                    <br><br>
                                                    <img src="images/check-out.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Until 12:00 hours</span>
                                                    <br><br>
                                                    <img src="images/indoorpool.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Outdoor Pool</span>
                                                    <br><br>
                                                    <img src="images/wifi2.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Free High Speed Internet (WiFi)</span>
                                                    <br><br>
                                                    <img src="images/gym.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Fitness center</span>
                                                    <br><br>
                                                    <img src="images/spa.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Spa</span> 
                                                    <br><br>
                                                    <img src="images/bar.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Bar</span>
                                                    <br><br>
                                                      	
                                             </p>
                                    </div>
                                    <div id="tabb3">
                                      <h2>Melia</h2>
                                      <img class="rounded" src="images/customizedimages/melia.jpg" alt="Melia" style="width:100%; height: 350px;">
                                      		<br>
                                      		<p style="line-height: 30px;color: black;font-family:Ayuthaya;font-size: 15px;margin-left: 20px; text-align: justify;">
                                                  
                                                    <img src="images/locationmanager.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Kaba Aye Pagoda Road, Bahan Township, Yangon</span>
                                                    <br><br>
                                                    <img src="images/phone.png" width="30px" height="30px" class="img-responsive">
                                                    <span>01 934 5000</span>
                                                    <br><br>
                                                    <img src="images/starrating2.png" width="30px" height="30px" class="img-responsive">
                                                    <span>5-star</span>
                                                    <br><br>
                                                    <img src="images/check-in.png" width="30px" height="30px" class="img-responsive">
                                                    <span>From 14:00 hours</span>
                                                    <br><br>
                                                    <img src="images/check-out.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Until 12:00 hours</span>
                                                    <br><br>
                                                    <img src="images/indoorpool.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Outdoor Pool</span>
                                                    <br><br>
                                                    <img src="images/wifi2.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Free High Speed Internet (WiFi)</span>
                                                    <br><br>
                                                    <img src="images/gym.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Fitness center</span>
                                                    <br><br>
                                                    <img src="images/spa.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Spa</span> 
                                                    <br><br>
                                                    <img src="images/bar.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Bar</span>
                                                    <br><br>
                                                      	
                                             </p>
                                    </div>
                                    <div id="tabb4">
                                      <h2>Novotel</h2>
                                      <img class="rounded" src="images/customizedimages/novotel.jpg" alt="Novotel" style="width:100%; height: 350px;">
                                      		<br>
                                      		<p style="line-height: 30px;color: black;font-family:Ayuthaya;font-size: 15px;margin-left: 20px; text-align: justify;">
                                                  
                                                    <img src="images/locationmanager.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Pyay Road Kamayut Tsp, Yangon</span>
                                                    <br><br>
                                                    <img src="images/phone.png" width="30px" height="30px" class="img-responsive">
                                                    <span>01 230 5858</span>
                                                    <br><br>
                                                    <img src="images/starrating2.png" width="30px" height="30px" class="img-responsive">
                                                    <span>5-star</span>
                                                    <br><br>
                                                    <img src="images/check-in.png" width="30px" height="30px" class="img-responsive">
                                                    <span>From 14:00 hours</span>
                                                    <br><br>
                                                    <img src="images/check-out.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Until 12:00 hours</span>
                                                    <br><br>
                                                    <img src="images/indoorpool.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Outdoor Pool</span>
                                                    <br><br>
                                                    <img src="images/wifi2.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Free High Speed Internet (WiFi)</span>
                                                    <br><br>
                                                    <img src="images/gym.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Fitness center</span>
                                                    <br><br>
                                                    <img src="images/spa.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Spa</span> 
                                                    <br><br>
                                                    <img src="images/bar.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Bar</span>
                                                    <br><br>
                                                      	
                                             </p>
                                    </div>
                                    <div id="tabb5">
                                      <h2>Park Royal</h2>
                                      <img class="rounded" src="images/customizedimages/shangrila.jpg" alt="Park Royal" style="width:100%; height: 350px;">
                                      		<br>
                                      		<p style="line-height: 30px;color: black;font-family:Ayuthaya;font-size: 15px;margin-left: 20px; text-align: justify;">
                                                  
                                                    <img src="images/locationmanager.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Alan Pya Phaya Road, Dagon Township, Yangon</span>
                                                    <br><br>
                                                    <img src="images/phone.png" width="30px" height="30px" class="img-responsive">
                                                    <span>01 250 388</span>
                                                    <br><br>
                                                    <img src="images/starrating2.png" width="30px" height="30px" class="img-responsive">
                                                    <span>5-star</span>
                                                    <br><br>
                                                    <img src="images/check-in.png" width="30px" height="30px" class="img-responsive">
                                                    <span>From 14:00 hours</span>
                                                    <br><br>
                                                    <img src="images/check-out.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Until 12:00 hours</span>
                                                    <br><br>
                                                    <img src="images/indoorpool.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Outdoor Pool</span>
                                                    <br><br>
                                                    <img src="images/wifi2.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Free High Speed Internet (WiFi)</span>
                                                    <br><br>
                                                     <img src="images/kitchen.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Kitchens in some rooms</span>
                                                    <br><br>
                                                    <img src="images/gym.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Fitness center</span>
                                                    <br><br>
                                                    <img src="images/spa.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Spa</span> 
                                                    <br><br>
                                                    <img src="images/bar.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Bar</span>
                                                    <br><br>
                                                    <img src="images/airportshuttle.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Airport shuttle</span>
                                                    <br><br>
                                                      	
                                             </p>
                                    </div>
                                  </section>
						</div>
										
							</div>
						</div>
						</div>
						<br><br><br><br>
					</li>
					<!--  ******************** Yangon ***************** -->
					
					<!--  ******************** Mandalay ***************** -->
					<li class="tab-content tab-content-2 typography">
						<h1>Mandalay</h1>
						<div class="row">
							<div class="col-md-6">
								<img class="rounded" src="images/customizedimages/mandalay.jpg" alt="Yangon" style="width:100%; height: 350px;">
							</div>
							<div class="col-md-6">
								<img class="rounded" src="images/customizedimages/mandalayy.jpg" alt="Yangon" style="width:100%; height: 350px;">

							</div>
						</div>
						<br><br><br><br>
						
						<div class="container">
						<div class="row">
						
							<div class="col-md-12">
								<h1>Available Hotel in Mandalay</h1>
									<div id="wrapper">
                                      <ul id="tabs" class="tabs clearfix" data-tabgroup="second-tab-group">
                                        <li id="subtab"><a href="#tabb6" class="active" id="subtab2">Eastern Palace</a></li>
                                        <li id="subtab"><a href="#tabb7" id="subtab2">Hilton</a></li>
                                        <li id="subtab"><a href="#tabb8" id="subtab2">Sakura Princess</a></li>
                                        <li id="subtab"><a href="#tabb9" id="subtab2">Mercure</a></li>
                                        <li id="subtab"><a href="#tabb10" id="subtab2">Hazel</a></li>
                                      </ul>
                                  <section id="second-tab-group" class="tabgroup">
                                    <div id="tabb6">
                                      <h2>Eastern Palace</h2>
                                      		<img class="rounded" src="images/customizedimages/easternpalace.jpg" alt="Shangrila" style="width:100%; height: 400px;">
                                      		<br>
                                      		<p style="line-height: 30px;color: black;font-family:Ayuthaya;font-size: 15px;margin-left: 20px; text-align: justify;">
                                                  
                                                    <img src="images/locationmanager.png" width="30px" height="30px" class="img-responsive">
                                                    <span>19th St, Mandalay</span>
                                                    <br><br>
                                                    <img src="images/phone.png" width="30px" height="30px" class="img-responsive">
                                                    <span>02 61 016</span>
                                                    <br><br>
                                                    <img src="images/starrating2.png" width="30px" height="30px" class="img-responsive">
                                                    <span>4-star</span>
                                                    <br><br>
                                                    <img src="images/check-in.png" width="30px" height="30px" class="img-responsive">
                                                    <span>From 14:00 hours</span>
                                                    <br><br>
                                                    <img src="images/check-out.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Until 12:00 hours</span>
                                                    <br><br>
                                                    <img src="images/indoorpool.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Indoor Pool</span>
                                                    <br><br>
                                                    <img src="images/wifi2.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Free High Speed Internet (WiFi)</span>
                                                    <br><br>
                                                    <img src="images/gym.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Fitness center</span>
                                                    <br><br>
                                                    <img src="images/bar.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Bar</span>
                                                    <br><br>
                                             </p>
                                      	
                                    </div>
                                    <div id="tabb7">
                                      <h2>Hilton</h2>
                                      <img class="rounded" src="images/customizedimages/hilton.jpg" alt="Sedona" style="width:100%; height: 350px;">
                                      		<br>
                                      		<p style="line-height: 30px;color: black;font-family:Ayuthaya;font-size: 15px;margin-left: 20px; text-align: justify;">
                                                  
                                                   	<img src="images/locationmanager.png" width="30px" height="30px" class="img-responsive">
                                                    <span>26th St, 66th St, Mandalay</span>
                                                    <br><br>
                                                    <img src="images/phone.png" width="30px" height="30px" class="img-responsive">
                                                    <span>02 403 6488</span>
                                                    <br><br>
                                                    <img src="images/starrating2.png" width="30px" height="30px" class="img-responsive">
                                                    <span>4-star</span>
                                                    <br><br>
                                                    <img src="images/check-in.png" width="30px" height="30px" class="img-responsive">
                                                    <span>From 14:00 hours</span>
                                                    <br><br>
                                                    <img src="images/check-out.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Until 12:00 hours</span>
                                                    <br><br>
                                                    <img src="images/indoorpool.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Outdoor Pool</span>
                                                    <br><br>
                                                    <img src="images/wifi2.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Free High Speed Internet (WiFi)</span>
                                                    <br><br>
                                                    <img src="images/gym.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Fitness center</span>
                                                    <br><br>
                                                    <img src="images/golf.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Golf Course</span>
                                                    <br><br>
                                                    <img src="images/bar.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Bar</span>
                                                    <br><br>
                                                      	
                                             </p>
                                    </div>
                                    <div id="tabb8">
                                      <h2>Sakura Princess</h2>
                                      <img class="rounded" src="images/customizedimages/sakuraprincess.jpg" alt="Melia" style="width:100%; height: 350px;">
                                      		<br>
                                      		<p style="line-height: 30px;color: black;font-family:Ayuthaya;font-size: 15px;margin-left: 20px; text-align: justify;">
                                                  
                                                    <img src="images/locationmanager.png" width="30px" height="30px" class="img-responsive">
                                                    <span>67th St, Mandalay</span>
                                                    <br><br>
                                                    <img src="images/phone.png" width="30px" height="30px" class="img-responsive">
                                                    <span>92839294</span>
                                                    <br><br>
                                                    <img src="images/starrating2.png" width="30px" height="30px" class="img-responsive">
                                                    <span>3-star</span>
                                                    <br><br>
                                                    <img src="images/check-in.png" width="30px" height="30px" class="img-responsive">
                                                    <span>From 14:00 hours</span>
                                                    <br><br>
                                                    <img src="images/check-out.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Until 12:00 hours</span>
                                                    <br><br>
                                                    <img src="images/wifi2.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Free WiFi</span>
                                                    <br><br>
                                                    <img src="images/gym.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Fitness center</span>
                                                    <br><br>
                                                    <img src="images/bar.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Bar</span>
                                                    <br><br>
                                                      	
                                             </p>
                                    </div>
                                    <div id="tabb9">
                                      <h2>Mercure</h2>
                                      <img class="rounded" src="images/customizedimages/mercure.jpg" alt="Novotel" style="width:100%; height: 350px;">
                                      		<br>
                                      		<p style="line-height: 30px;color: black;font-family:Ayuthaya;font-size: 15px;margin-left: 20px; text-align: justify;">
                                                  
                                                    <img src="images/locationmanager.png" width="30px" height="30px" class="img-responsive">
                                                    <span>No.(9), Kwin (416.B), 10th Street, At the foot of Mandalay Hill Aung Myay Tharzan Tsp, Mandalay</span>
                                                    <br><br>
                                                    <img src="images/phone.png" width="30px" height="30px" class="img-responsive">
                                                    <span>02 403 5638</span>
                                                    <br><br>
                                                    <img src="images/starrating2.png" width="30px" height="30px" class="img-responsive">
                                                    <span>5-star</span>
                                                    <br><br>
                                                    <img src="images/check-in.png" width="30px" height="30px" class="img-responsive">
                                                    <span>From 14:00 hours</span>
                                                    <br><br>
                                                    <img src="images/check-out.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Until 12:00 hours</span>
                                                    <br><br>
                                                    <img src="images/indoorpool.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Outdoor Pool</span>
                                                    <br><br>
                                                    <img src="images/wifi2.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Free High Speed Internet (WiFi)</span>
                                                    <br><br>
                                                    <img src="images/gym.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Fitness center</span>
                                                    <br><br>
                                                    <img src="images/spa.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Spa</span> 
                                                    <br><br>
                                                    <img src="images/bar.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Bar</span>
                                                    <br><br>
                                                    <img src="images/airportshuttle.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Airport shuttle</span>
                                                    <br><br>
                                                      	
                                             </p>
                                    </div>
                                    <div id="tabb10">
                                      <h2>Hazel</h2>
                                      <img class="rounded" src="images/customizedimages/hazel.jpg" alt="Park Royal" style="width:100%; height: 350px;">
                                      		<br>
                                      		<p style="line-height: 30px;color: black;font-family:Ayuthaya;font-size: 15px;margin-left: 20px; text-align: justify;">
                                                  
                                                    <img src="images/locationmanager.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Coner of 53rd & 37th Streets,Mahaaung Myay Twonship, Mandalay</span>
                                                    <br><br>
                                                    <img src="images/phone.png" width="30px" height="30px" class="img-responsive">
                                                    <span>09 961 786124</span>
                                                    <br><br>
                                                    <img src="images/starrating2.png" width="30px" height="30px" class="img-responsive">
                                                    <span>4-star</span>
                                                    <br><br>
                                                    <img src="images/check-in.png" width="30px" height="30px" class="img-responsive">
                                                    <span>From 14:00 hours</span>
                                                    <br><br>
                                                    <img src="images/check-out.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Until 12:00 hours</span>
                                                    <br><br>
                                                    <img src="images/indoorpool.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Outdoor Pool</span>
                                                    <br><br>
                                                    <img src="images/wifi2.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Free WiFi</span>
                                                    <br><br>
                                                    <img src="images/bar.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Bar</span>
                                                    <br><br>
                                                    <img src="images/airportshuttle.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Airport shuttle</span>
                                                    <br><br>
                                                      	
                                             </p>
                                    </div>
                                  </section>
						</div>
										
							</div>
						</div>
						</div>
						<br><br><br><br>
					</li>
					<!--  ******************** Mandalay ***************** -->
					
					<!--  ******************** Bagan ***************** -->
					<li class="tab-content tab-content-3 typography">
						<h1>Bagan</h1>
						<div class="row">
							<div class="col-md-6">
								<img class="rounded" src="images/customizedimages/bagann.jpg" alt="Yangon" style="width:100%; height: 350px;">
							</div>
							<div class="col-md-6">
								<img class="rounded" src="images/customizedimages/bagan.jpg" alt="Yangon" style="width:100%; height: 350px;">

							</div>
						</div>
						<br><br><br><br>
						
						<div class="container">
						<div class="row">
						
							<div class="col-md-12">
								<h1>Available Hotel in Bagan</h1>
									<div id="wrapper">
                                      <ul id="tabs" class="tabs clearfix" data-tabgroup="third-tab-group">
                                        <li id="subtab"><a href="#tabb11" class="active" id="subtab2">Aye Yar River View Resort</a></li>
                                        <li id="subtab"><a href="#tabb12" id="subtab2">Aureum Palace</a></li>
                                        <li id="subtab"><a href="#tabb13" id="subtab2">Heritage</a></li>
                                        <li id="subtab"><a href="#tabb14" id="subtab2">Bagan Lodge</a></li>
                                        <li id="subtab"><a href="#tabb15" id="subtab2">Amata Garden Resort Bagan</a></li>
                                      </ul>
                                  <section id="third-tab-group" class="tabgroup">
                                    <div id="tabb11">
                                      <h2>Aye Yar River View Resort</h2>
                                      		<img class="rounded" src="images/customizedimages/ayeyarriverhotelresort.jpg" alt="Shangrila" style="width:100%; height: 350px;">
                                      		<br>
                                      		<p style="line-height: 30px;color: black;font-family:Ayuthaya;font-size: 15px;margin-left: 20px; text-align: justify;">
                                                  
                                                    <img src="images/locationmanager.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Near Bu Pagoda, Old Bagan, Nyaung-U</span>
                                                    <br><br>
                                                    <img src="images/phone.png" width="30px" height="30px" class="img-responsive">
                                                    <span>061 60 313</span>
                                                    <br><br>
                                                    <img src="images/starrating2.png" width="30px" height="30px" class="img-responsive">
                                                    <span>4-star</span>
                                                    <br><br>
                                                    <img src="images/check-in.png" width="30px" height="30px" class="img-responsive">
                                                    <span>From 14:00 hours</span>
                                                    <br><br>
                                                    <img src="images/check-out.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Until 12:00 hours</span>
                                                    <br><br>
                                                    <img src="images/indoorpool.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Indoor Pool</span>
                                                    <br><br>
                                                    <img src="images/indoorpool.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Outdoor Pool</span>
                                                    <br><br>
                                                    <img src="images/cafe.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Cafe</span>
                                                    <br><br>
                                                    <img src="images/spa.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Spa</span> 
                                                    <br><br>
                                                    <img src="images/bar.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Bar</span>
                                                    <br><br>
                                             </p>
                                      	
                                    </div>
                                    <div id="tabb12">
                                      <h2>Aureum Palace</h2>
                                      <img class="rounded" src="images/customizedimages/aureumpalace.jpg" alt="Sedona" style="width:100%; height: 350px;">
                                      		<br>
                                      		<p style="line-height: 30px;color: black;font-family:Ayuthaya;font-size: 15px;margin-left: 20px; text-align: justify;">
                                                  
                                                    <img src="images/locationmanager.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Near Bagan Village Tower, Min Nanthu Village, Nyaung Oo, Bagan</span>
                                                    <br><br>
                                                    <img src="images/phone.png" width="30px" height="30px" class="img-responsive">
                                                    <span>02 403 6488</span>
                                                    <br><br>
                                                    <img src="images/starrating2.png" width="30px" height="30px" class="img-responsive">
                                                    <span>5-star</span>
                                                    <br><br>
                                                    <img src="images/check-in.png" width="30px" height="30px" class="img-responsive">
                                                    <span>From 14:00 hours</span>
                                                    <br><br>
                                                    <img src="images/check-out.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Until 12:00 hours</span>
                                                    <br><br>
                                                    <img src="images/indoorpool.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Outdoor Pool</span>
                                                    <br><br>
                                                    <img src="images/wifi2.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Free High Speed Internet (WiFi)</span>
                                                    <br><br>
                                                    <img src="images/gym.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Fitness center</span>
                                                    <br><br>
                                                    <img src="images/golf.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Golf Course</span>
                                                    <br><br>
                                                    <img src="images/cafe.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Cafe</span>
                                                    <br><br>
                                                    <img src="images/spa.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Spa</span> 
                                                    <br><br>
                                                    <img src="images/bar.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Bar</span>
                                                    <br><br>
                                                      	
                                             </p>
                                    </div>
                                    <div id="tabb13">
                                      <h2>Heritage</h2>
                                      <img class="rounded" src="images/customizedimages/heritage.jpg" alt="Melia" style="width:100%; height: 350px;">
                                      		<br>
                                      		<p style="line-height: 30px;color: black;font-family:Ayuthaya;font-size: 15px;margin-left: 20px; text-align: justify;">
                                                  
                                                    <img src="images/locationmanager.png" width="30px" height="30px" class="img-responsive">
                                                    <span> Nyaung Oo Airport Road, Myay Nal Lay Quarter, Nyaung Oo Township, Bagan</span>
                                                    <br><br>
                                                    <img src="images/phone.png" width="30px" height="30px" class="img-responsive">
                                                    <span>95 61 2461192</span>
                                                    <br><br>
                                                    <img src="images/starrating2.png" width="30px" height="30px" class="img-responsive">
                                                    <span>4-star</span>
                                                    <br><br>
                                                    <img src="images/check-in.png" width="30px" height="30px" class="img-responsive">
                                                    <span>From 14:00 hours</span>
                                                    <br><br>
                                                    <img src="images/check-out.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Until 12:00 hours</span>
                                                    <br><br>
                                                    <img src="images/indoorpool.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Outdoor Pool</span>
                                                    <br><br>
                                                    <img src="images/garden.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Garden</span>
                                                    <br><br>
                                                    <img src="images/wifi2.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Free High Speed Internet (WiFi)</span>
                                                    <br><br>
                                                    <img src="images/gym.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Fitness center</span>
                                                    <br><br>
                                                    <img src="images/spa.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Spa</span> 
                                                    <br><br>
                                                    <img src="images/bar.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Bar</span>
                                                    <br><br>
                                                    <img src="images/airportshuttle.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Airport shuttle</span>
                                                    <br><br>
                                                      	
                                             </p>
                                    </div>
                                    <div id="tabb14">
                                      <h2>Bagan Lodge</h2>
                                      <img class="rounded" src="images/customizedimages/baganlodge.jpg" alt="Novotel" style="width:100%; height: 350px;">
                                      		<br>
                                      		<p style="line-height: 30px;color: black;font-family:Ayuthaya;font-size: 15px;margin-left: 20px; text-align: justify;">
                                                  
                                                    <img src="images/locationmanager.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Myat Lay Road, New Bagan, Nyaung Oo Township</span>
                                                    <br><br>
                                                    <img src="images/phone.png" width="30px" height="30px" class="img-responsive">
                                                    <span>09 777 077335</span>
                                                    <br><br>
                                                    <img src="images/starrating2.png" width="30px" height="30px" class="img-responsive">
                                                    <span>4-star</span>
                                                    <br><br>
                                                    <img src="images/check-in.png" width="30px" height="30px" class="img-responsive">
                                                    <span>From 14:00 hours</span>
                                                    <br><br>
                                                    <img src="images/check-out.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Until 12:00 hours</span>
                                                    <br><br>
                                                    <img src="images/indoorpool.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Outdoor Pool</span>
                                                    <br><br>
                                                    <img src="images/garden.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Garden</span>
                                                    <br><br>
                                                    <img src="images/spa.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Spa</span> 
                                                    <br><br>
                                                    <img src="images/wifi2.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Free High Speed Internet (WiFi)</span>
                                                    <br><br>
                                                    <img src="images/bar.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Bar</span>
                                                    <br><br>
                                                    <img src="images/airportshuttle.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Airport shuttle</span>
                                                    <br><br>
                                                      	
                                             </p>
                                    </div>
                                    <div id="tabb15">
                                      <h2>Amata Garden Resort Bagan</h2>
                                      <img class="rounded" src="images/customizedimages/amatagardenresort.jpg" alt="Park Royal" style="width:100%; height: 350px;">
                                      		<br>
                                      		<p style="line-height: 30px;color: black;font-family:Ayuthaya;font-size: 15px;margin-left: 20px; text-align: justify;">
                                                  
                                                    <img src="images/locationmanager.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Thu Htay Kan Kwin, Phwar Saw Village Nyaung Oo District, East New Bagan, Old Bagan</span>
                                                    <br><br>
                                                    <img src="images/phone.png" width="30px" height="30px" class="img-responsive">
                                                    <span>09 799 784726</span>
                                                    <br><br>
                                                    <img src="images/starrating2.png" width="30px" height="30px" class="img-responsive">
                                                    <span>4-star</span>
                                                    <br><br>
                                                    <img src="images/check-in.png" width="30px" height="30px" class="img-responsive">
                                                    <span>From 14:00 hours</span>
                                                    <br><br>
                                                    <img src="images/check-out.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Until 12:00 hours</span>
                                                    <br><br>
                                                    <img src="images/indoorpool.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Outdoor Pool</span>
                                                    <br><br>
                                                    <img src="images/wifi2.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Free High Speed Internet (WiFi)</span>
                                                    <br><br>
                                                    <img src="images/gym.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Fitness center</span>
                                                    <br><br>
                                                    <img src="images/garden.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Garden</span>
                                                    <br><br>
                                                    <img src="images/spa.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Spa</span> 
                                                    <br><br>
                                                    <img src="images/bar.png" width="30px" height="30px" class="img-responsive">
                                                    <span>BBQ</span>
                                                    <br><br>
                                                      	
                                             </p>
                                    </div>
                                  </section>
						</div>
										
							</div>
						</div>
						</div>
						<br><br><br><br>		
					</li>
					<!--  ******************** Bagan ***************** -->
					
					<!--  ******************** Inle ***************** -->
					<li class="tab-content tab-content-4 typography">
						<div class="typography">
							<h1>Inle</h1>
						<div class="row">
							<div class="col-md-6">
								<img class="rounded" src="images/customizedimages/inlee.jpg" alt="Yangon" style="width:100%; height: 350px;">
							</div>
							<div class="col-md-6">
								<img class="rounded" src="images/customizedimages/inle.png" alt="Yangon" style="width:100%; height: 350px;">

							</div>
						</div>
						<br><br><br><br>
						
						<div class="container">
						<div class="row">
						
							<div class="col-md-12">
								<h1>Available Hotel in Inle</h1>
									<div id="wrapper">
                                      <ul id="tabs" class="tabs clearfix" data-tabgroup="fourth-tab-group">
                                        <li id="subtab"><a href="#tabb16" class="active" id="subtab2">Sanctum Inle Resort</a></li>
                                        <li id="subtab"><a href="#tabb17" id="subtab2">Ananta Inle Resort</a></li>
                                        <li id="subtab"><a href="#tabb18" id="subtab2">Skylake Inle Resort</a></li>
                                        <li id="subtab"><a href="#tabb19" id="subtab2">Paramount Inle Resort</a></li>
                                        <li id="subtab"><a href="#tabb20" id="subtab2">Villa Inle Boutique Resort</a></li>
                                      </ul>
                                  <section id="fourth-tab-group" class="tabgroup">
                                    <div id="tabb16">
                                      <h2>Sanctum Inle Resort</h2>
                                      		<img class="rounded" src="images/customizedimages/sanctuminleresort.jpg" alt="Shangrila" style="width:100%; height: 350px;">
                                      		<br>
                                      		<p style="line-height: 30px;color: black;font-family:Ayuthaya;font-size: 15px;margin-left: 20px; text-align: justify;">
                                                  
                                                    <img src="images/locationmanager.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Maing Thauk Village, Inle Lake Nyaung Shwe Tsp, Shan</span>
                                                    <br><br>
                                                    <img src="images/phone.png" width="30px" height="30px" class="img-responsive">
                                                    <span>09 252 818 800</span>
                                                    <br><br>
                                                    <img src="images/starrating2.png" width="30px" height="30px" class="img-responsive">
                                                    <span>5-star</span>
                                                    <br><br>
                                                    <img src="images/check-in.png" width="30px" height="30px" class="img-responsive">
                                                    <span>From 14:00 hours</span>
                                                    <br><br>
                                                    <img src="images/check-out.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Until 12:00 hours</span>
                                                    <br><br>
                                                    <img src="images/indoorpool.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Outdoor Pool</span>
                                                    <br><br>
                                                    <img src="images/wifi2.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Free High Speed Internet (WiFi)</span>
                                                    <br><br>
                                                    <img src="images/spa.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Spa</span> 
                                                    <br><br>
                                                    <img src="images/bar.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Bar</span>
                                                    <br><br>
                                                    <img src="images/airportshuttle.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Airport shuttle</span>
                                                    <br><br>
                                             </p>
                                      	
                                    </div>
                                    <div id="tabb17">
                                      <h2>Ananta Inle Resort</h2>
                                      <img class="rounded" src="images/customizedimages/anantainlayresort.jpg" alt="Sedona" style="width:100%; height: 350px;">
                                      		<br>
                                      		<p style="line-height: 30px;color: black;font-family:Ayuthaya;font-size: 15px;margin-left: 20px; text-align: justify;">
                                                  
                                                    <img src="images/locationmanager.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Maing Thauk Village, Inle Lake Nyaung Shwe Tsp, Shan</span>
                                                    <br><br>
                                                    <img src="images/phone.png" width="30px" height="30px" class="img-responsive">
                                                    <span>09 258 964 991</span>
                                                    <br><br>
                                                    <img src="images/starrating2.png" width="30px" height="30px" class="img-responsive">
                                                    <span>4-star</span>
                                                    <br><br>
                                                    <img src="images/check-in.png" width="30px" height="30px" class="img-responsive">
                                                    <span>From 14:00 hours</span>
                                                    <br><br>
                                                    <img src="images/check-out.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Until 12:00 hours</span>
                                                    <br><br>
                                                    <img src="images/indoorpool.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Outdoor Pool</span>
                                                    <br><br>
                                                    <img src="images/wifi2.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Free High Speed Internet (WiFi)</span>
                                                    <br><br>
                                                    <img src="images/spa.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Spa</span> 
                                                    <br><br>
                                                    <img src="images/bar.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Bar</span>
                                                    <br><br>
                                                      	
                                             </p>
                                    </div>
                                    <div id="tabb18">
                                      <h2>Skylake Inle Resort</h2>
                                      <img class="rounded" src="images/customizedimages/skylakeinleresort.jpg" alt="Melia" style="width:100%; height: 350px;">
                                      		<br>
                                      		<p style="line-height: 30px;color: black;font-family:Ayuthaya;font-size: 15px;margin-left: 20px; text-align: justify;">
                                                  
                                                    <img src="images/locationmanager.png" width="30px" height="30px" class="img-responsive">
                                                    <span> Mine Thauk Village, Nyaung Shwe Tsp, Shan</span>
                                                    <br><br>
                                                    <img src="images/phone.png" width="30px" height="30px" class="img-responsive">
                                                    <span>09 521 4071</span>
                                                    <br><br>
                                                    <img src="images/starrating2.png" width="30px" height="30px" class="img-responsive">
                                                    <span>4-star</span>
                                                    <br><br>
                                                    <img src="images/check-in.png" width="30px" height="30px" class="img-responsive">
                                                    <span>From 14:00 hours</span>
                                                    <br><br>
                                                    <img src="images/check-out.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Until 12:00 hours</span>
                                                    <br><br>
                                                    <img src="images/indoorpool.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Outdoor Pool</span>
                                                    <br><br>
                                                    <img src="images/wifi2.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Free High Speed Internet (WiFi)</span>
                                                    <br><br>
                                                    <img src="images/garden.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Garden</span>
                                                    <br><br>
                                                    <img src="images/hotelbalcony.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Balcony</span>
                                                    <br><br>
                                                    <img src="images/spa.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Spa</span> 
                                                    <br><br>
                                                    <img src="images/bar.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Bar</span>
                                                    <br><br>
                                                    <img src="images/airportshuttle.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Airport shuttle</span>
                                                    <br><br>
                                                      	
                                             </p>
                                    </div>
                                    <div id="tabb19">
                                      <h2>Paramount Inle Resort</h2>
                                      <img class="rounded" src="images/customizedimages/paramountinleresort.jpg" alt="Novotel" style="width:100%; height: 350px;">
                                      		<br>
                                      		<p style="line-height: 30px;color: black;font-family:Ayuthaya;font-size: 15px;margin-left: 20px; text-align: justify;">
                                                  
                                                    <img src="images/locationmanager.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Nyaungshwe Tsp, Shan</span>
                                                    <br><br>
                                                    <img src="images/phone.png" width="30px" height="30px" class="img-responsive">
                                                    <span>09 493 60855</span>
                                                    <br><br>
                                                    <img src="images/starrating2.png" width="30px" height="30px" class="img-responsive">
                                                    <span>3-star</span>
                                                    <br><br>
                                                    <img src="images/check-in.png" width="30px" height="30px" class="img-responsive">
                                                    <span>From 14:00 hours</span>
                                                    <br><br>
                                                    <img src="images/check-out.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Until 12:00 hours</span>
                                                    <br><br>
                                                    <img src="images/indoorpool.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Outdoor Pool</span>
                                                    <br><br>
                                                    <img src="images/wifi2.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Free WiFi</span>
                                                    <br><br>
                                                    <img src="images/spa.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Spa</span> 
                                                    <br><br>
                                                    <img src="images/bar.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Bar</span>
                                                    <br><br>
                                                      	
                                             </p>
                                    </div>
                                    <div id="tabb20">
                                      <h2>Villa Inle Boutique Resort</h2>
                                      <img class="rounded" src="images/customizedimages/villainleresort.jpg" alt="Park Royal" style="width:100%; height: 350px;">
                                      		<br>
                                      		<p style="line-height: 30px;color: black;font-family:Ayuthaya;font-size: 15px;margin-left: 20px; text-align: justify;">
                                                  
                                                    <img src="images/locationmanager.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Inle Lake, Maing Thouk Village, Nyaungshwe Tsp, Shan</span>
                                                    <br><br>
                                                    <img src="images/phone.png" width="30px" height="30px" class="img-responsive">
                                                    <span>09 42835 4320</span>
                                                    <br><br>
                                                    <img src="images/starrating2.png" width="30px" height="30px" class="img-responsive">
                                                    <span>4-star</span>
                                                    <br><br>
                                                    <img src="images/check-in.png" width="30px" height="30px" class="img-responsive">
                                                    <span>From 14:00 hours</span>
                                                    <br><br>
                                                    <img src="images/check-out.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Until 12:00 hours</span>
                                                    <br><br>
                                                    <img src="images/indoorpool.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Outdoor Pool</span>
                                                    <br><br>
                                                    <img src="images/wifi2.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Free High Speed Internet (WiFi)</span>
                                                    <br><br>
                                                    <img src="images/garden.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Garden</span>
                                                    <br><br>
                                                    <img src="images/spa.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Spa</span> 
                                                    <br><br>
                                                    <img src="images/bar.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Bar</span>
                                                    <br><br>
                                                      	
                                             </p>
                                    </div>
                                  </section>
							</div>
										
							</div>
						</div>
						</div>
						<br><br><br><br>
						</div>
					</li>
					<!--  ******************** Inle ***************** -->
					
					<!--  ******************** Ngapali ***************** -->
					<li class="tab-content tab-content-last typography">
						<div class="typography">
							<h1>Ngapali</h1>
						<div class="row">
							<div class="col-md-6">
								<img class="rounded" src="images/customizedimages/ngapalii.jpg" alt="Yangon" style="width:100%; height: 350px;">
							</div>
							<div class="col-md-6">
								<img class="rounded" src="images/customizedimages/ngapali.jpg" alt="Yangon" style="width:100%; height: 350px;">

							</div>
						</div>
						<br><br><br><br>
						
						<div class="container">
						<div class="row">
						
							<div class="col-md-12">
								<h1>Available Hotel in Ngapali</h1>
									<div id="wrapper">
                                      <ul id="tabs" class="tabs clearfix" data-tabgroup="fifth-tab-group">
                                        <li id="subtab"><a href="#tabb21" class="active" id="subtab2">Amazing Ngapali Resort</a></li>
                                        <li id="subtab"><a href="#tabb22" id="subtab2">Sandoway Ngapali Resort</a></li>
                                        <li id="subtab"><a href="#tabb23" id="subtab2">Sea Breeze Lodge Resort</a></li>
                                        <li id="subtab"><a href="#tabb24" id="subtab2">Hilton Ngapali Resort</a></li>
                                        <li id="subtab"><a href="#tabb25" id="subtab2">Thande Beach Resort</a></li>
                                      </ul>
                                  <section id="fifth-tab-group" class="tabgroup">
                                    <div id="tabb21">
                                      <h2>Amazing Ngapali Resort</h2>
                                      		<img class="rounded" src="images/customizedimages/amazingngapaliresort.jpg" alt="Shangrila" style="width:100%; height: 350px;">
                                      		<br>
                                      		<p style="line-height: 30px;color: black;font-family:Ayuthaya;font-size: 15px;margin-left: 20px; text-align: justify;">
                                                  
                                                    <img src="images/locationmanager.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Ngapali Beach, Zee Phyu Gone Village, Thandwe</span>
                                                    <br><br>
                                                    <img src="images/phone.png" width="30px" height="30px" class="img-responsive">
                                                    <span>043 42 371</span>
                                                    <br><br>
                                                    <img src="images/starrating2.png" width="30px" height="30px" class="img-responsive">
                                                    <span>4-star</span>
                                                    <br><br>
                                                    <img src="images/check-in.png" width="30px" height="30px" class="img-responsive">
                                                    <span>From 14:00 hours</span>
                                                    <br><br>
                                                    <img src="images/check-out.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Until 12:00 hours</span>
                                                    <br><br>
                                                    <img src="images/indoorpool.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Outdoor Pool</span>
                                                    <br><br>
                                                    <img src="images/wifi2.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Free High Speed Internet (WiFi)</span>
                                                    <br><br>
                                                    <img src="images/beachaccess.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Beach Access</span>
                                                    <br><br>
                                                    <img src="images/spa.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Spa</span> 
                                                    <br><br>
                                                    <img src="images/bar.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Bar</span>
                                                    <br><br>
                                                    <img src="images/airportshuttle.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Airport shuttle</span>
                                                    <br><br>
                                             </p>
                                      	
                                    </div>
                                    <div id="tabb22">
                                      <h2>Sandoway Ngapali Resort</h2>
                                      <img class="rounded" src="images/customizedimages/sandowayresort.jpg" alt="Sedona" style="width:100%; height: 350px;">
                                      		<br>
                                      		<p style="line-height: 30px;color: black;font-family:Ayuthaya;font-size: 15px;margin-left: 20px; text-align: justify;">
                                                  
                                                    <img src="images/locationmanager.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Mya Pyin Village, Ngapali City, Rakhine</span>
                                                    <br><br>
                                                    <img src="images/phone.png" width="30px" height="30px" class="img-responsive">
                                                    <span>09 43 20 42233 </span>
                                                    <br><br>
                                                    <img src="images/starrating2.png" width="30px" height="30px" class="img-responsive">
                                                    <span>4-star</span>
                                                    <br><br>
                                                    <img src="images/check-in.png" width="30px" height="30px" class="img-responsive">
                                                    <span>From 14:00 hours</span>
                                                    <br><br>
                                                    <img src="images/check-out.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Until 12:00 hours</span>
                                                    <br><br>
                                                    <img src="images/indoorpool.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Outdoor Pool</span>
                                                    <br><br>
                                                    <img src="images/wifi2.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Free High Speed Internet (WiFi)</span>
                                                    <br><br>
                                                    <img src="images/cinema.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Cinema</span>
                                                    <br><br>
                                                    <img src="images/spa.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Spa</span> 
                                                    <br><br>
                                                    <img src="images/bar.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Bar</span>
                                                    <br><br>
                                                    <img src="images/souvenirshop.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Souvenir Shop</span>
                                                    <br><br>
                                                    <img src="images/airportshuttle.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Airport shuttle</span>
                                                    <br><br>
                                                      	
                                             </p>
                                    </div>
                                    <div id="tabb23">
                                      <h2>Sea Breeze Lodge Resort</h2>
                                      <img class="rounded" src="images/customizedimages/seabreeze.jpg" alt="Melia" style="width:100%; height: 350px;">
                                      		<br>
                                      		<p style="line-height: 30px;color: black;font-family:Ayuthaya;font-size: 15px;margin-left: 20px; text-align: justify;">
                                                  
                                                    <img src="images/locationmanager.png" width="30px" height="30px" class="img-responsive">
                                                    <span> Lone Thar NgaPaLi Main Road, Mya Pyin Village, Ngapali </span>
                                                    <br><br>
                                                    <img src="images/phone.png" width="30px" height="30px" class="img-responsive">
                                                    <span>09 954 342125</span>
                                                    <br><br>
                                                    <img src="images/starrating2.png" width="30px" height="30px" class="img-responsive">
                                                    <span>4-star</span>
                                                    <br><br>
                                                    <img src="images/check-in.png" width="30px" height="30px" class="img-responsive">
                                                    <span>From 14:00 hours</span>
                                                    <br><br>
                                                    <img src="images/check-out.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Until 12:00 hours</span>
                                                    <br><br>
                                                    <img src="images/indoorpool.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Outdoor Pool</span>
                                                    <br><br>
                                                    <img src="images/wifi2.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Free High Speed Internet (WiFi)</span>
                                                    <br><br>
                                                    <img src="images/coffeeshop.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Coffee Shop</span>
                                                    <br><br>
                                                    <img src="images/spa.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Spa</span> 
                                                    <br><br>
                                                    <img src="images/bar.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Bar</span>
                                                    <br><br>
                                                    <img src="images/souvenirshop.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Souvenir Shop</span>
                                                    <br><br>
                                                    <img src="images/airportshuttle.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Airport shuttle</span>
                                                    <br><br>
                                                      
                                             </p>
                                    </div>
                                    <div id="tabb24">
                                      <h2>Hilton Ngapali Resort</h2>
                                      <img class="rounded" src="images/customizedimages/hiltonngapaliresort.jpg" alt="Novotel" style="width:100%; height: 350px;">
                                      		<br>
                                      		<p style="line-height: 30px;color: black;font-family:Ayuthaya;font-size: 15px;margin-left: 20px; text-align: justify;">
                                                  
                                                    <img src="images/locationmanager.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Ngapali Main Rd Zi Phyu Kone, Thandwe</span>
                                                    <br><br>
                                                    <img src="images/phone.png" width="30px" height="30px" class="img-responsive">
                                                    <span>09 432 042 130</span>
                                                    <br><br>
                                                    <img src="images/starrating2.png" width="30px" height="30px" class="img-responsive">
                                                    <span>4-star</span>
                                                    <br><br>
                                                    <img src="images/check-in.png" width="30px" height="30px" class="img-responsive">
                                                    <span>From 14:00 hours</span>
                                                    <br><br>
                                                    <img src="images/check-out.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Until 12:00 hours</span>
                                                    <br><br>
                                                    <img src="images/indoorpool.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Outdoor Pool</span>
                                                    <br><br>
                                                    <img src="images/wifi2.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Free High Speed Internet (WiFi)</span>
                                                    <br><br>
                                                    <img src="images/gym.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Fitness Center</span>
                                                    <br><br>
                                                    <img src="images/beachaccess.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Beach Access</span>
                                                    <br><br>
                                                    <img src="images/spa.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Spa</span> 
                                                    <br><br>
                                                    <img src="images/bar.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Bar</span>
                                                    <br><br>
                                                    <img src="images/souvenirshop.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Souvenir Shop</span>
                                                    <br><br>
                                                    <img src="images/airportshuttle.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Airport shuttle</span>
                                                    <br><br>
                                                      	
                                             </p>
                                    </div>
                                    <div id="tabb25">
                                      <h2>Thande Beach Resort</h2>
                                      <img class="rounded" src="images/customizedimages/thandebeachresort.jpg" alt="Park Royal" style="width:100%; height: 350px;">
                                      		<br>
                                      		<p style="line-height: 30px;color: black;font-family:Ayuthaya;font-size: 15px;margin-left: 20px; text-align: justify;">
                                                  
                                                    <img src="images/locationmanager.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Gyeiktaw Main St</span>
                                                    <br><br>
                                                    <img src="images/phone.png" width="30px" height="30px" class="img-responsive">
                                                    <span>01 43 42 278</span>
                                                    <br><br>
                                                    <img src="images/starrating2.png" width="30px" height="30px" class="img-responsive">
                                                    <span>3-star</span>
                                                    <br><br>
                                                    <img src="images/check-in.png" width="30px" height="30px" class="img-responsive">
                                                    <span>From 14:00 hours</span>
                                                    <br><br>
                                                    <img src="images/check-out.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Until 12:00 hours</span>
                                                    <br><br>
                                                    <img src="images/indoorpool.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Outdoor Pool</span>
                                                    <br><br>
                                                    <img src="images/wifi2.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Free WiFi</span>
                                                    <br><br>
                                                    <img src="images/beachaccess.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Beach Access</span>
                                                    <br><br>
                                                    <img src="images/spa.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Spa</span> 
                                                    <br><br>
                                                    <img src="images/bar.png" width="30px" height="30px" class="img-responsive">
                                                    <span>Bar</span>
                                                    <br><br>
                                                      	
                                             </p>
                                    </div>
                                  </section>
						</div>
										
							</div>
						</div>
						</div>
						<br><br><br><br>	
						</div>
					</li>
					<!--  ******************** Ngapali ***************** -->
					
				</ul>
			</div>
			<!--/ tabs -->
		</div>
<br><br><br><br>

<!-- End Part 3 -->

<!-- Start Part 4 -->

	<div class="contact_form_section" style="margin-top: 130px;">
		<div class="container">
			<div class="row">
				<div class="col">

					<!-- Contact Form -->
					<div class="contact_form_container">
						<div class="contact_title text-center"><h1 class="style15" style="font-size: 5vmin;font-family: Comic Sans MS;">Let's Book</h1></div>
						<form action="" id="contact_form" class="contact_form text-center" method="post">
						
						<div class="row">
							<div class="col-md-4">
								<select class="input-fieldd form-control" name="chotel_id" >
        		                  <option>Please Choose Hotel</option>
            		                 	<?php 
                						$viewquery="select * from customize_hotel";
                						foreach ($db->query($viewquery) as $row)
                						{
                						    $chotel_id=$row['chotel_id'];
                						    $chotel_name=$row['chotel_name'];
                						    echo "<option value='$chotel_id'>$chotel_name</option>";
                						}
                						?>
                        		</select>
                        		
							</div>
							
						</div> 
						<!-- row -->
						
						<div class="row" style="margin-top: 100px;line-height: 100px;">
							<div class="col-md-4">
								<select class="input_field" name="ride">
        		                  <option>Choose Ride&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
        		                  <option>Bus</option>
        		                  <option>Flight</option>
                        		</select>
							</div>
							<div class="col-md-4">
								<select class="input_field" name="duration">
        		                  <option>Choose Duration</option>
        		                  <option>1</option>
        		                  <option>2</option>
        		                  <option>3</option>
        		                  <option>4</option>
        		                  <option>More than 4</option>
                        		</select>
							</div>
							<div class="col-md-4">
								<select class="input_field" name="person">
        		                  <option>Choose Person&nbsp;&nbsp;&nbsp;</option>
        		                  <option>1</option>
        		                  <option>2</option>
        		                  <option>3</option>
        		                  <option>4</option>
        		                  <option>More than 4</option>
                        		</select>
							</div>
						</div>
						<!-- row -->
						
						<?php 
                        $useremail=$_SESSION['login'];
                        
                        $sql = "SELECT * from tbl_user where u_Email=:useremail";
                        $query = $db -> prepare($sql);
                        $query -> bindParam(':useremail',$useremail, PDO::PARAM_STR);
                       
                        $query->execute();
                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                        
                        if($query->rowCount() > 0)
                        {
                        foreach($results as $result)
                        {	?>
						               						
							<h2 style="font-size: 3vmin;font-family: Comic Sans MS;align:center;color:white;margin-top: 80px;">Personal Information</h2>
							<div class="row" style="line-height: 100px;">
								<div class="col-md-4">
									<input type="text" class="contact_form_name input_field" name="u_email" value="<?php echo htmlentities($result->u_Email);?>" readonly>
								</div>
								<div class="col-md-4">
									<input type="text" class="contact_form_email input_field" name="u_nrc" value="<?php echo htmlentities($result->u_NRC);?>" readonly>
								</div>
								<div class="col-md-4">
									<input type="text" class="contact_form_subject input_field" name="u_phno" value="<?php echo htmlentities($result->u_Phno);?>" readonly>
								</div>
							</div>
							
						<?php }} ?>
<!--  						<button type="submit" name="customizedbook" id="form_submit_buttonn" class="form_submit_button button trans_200">Book</button>  -->
						<input type="submit" name="customizedbook" value="Book" id="form_submit_buttonn" class="form_submit_button button trans_200">
						</form>
					</div>
					
					

				</div>
			</div>
		</div>
	</div>
<br><br><br><br>



<!-- End Part 4 -->
<!-- <script src="js/tab2.js"></script> -->
<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src="js/index.js"></script>
<?php
include 'footer.php';
?>

  <?php 
if(isset($_POST['customizedbook']))
{   
    
    $cbookdate=date('Y/m/d');
    
    if ($_POST['chotel_id']=="---Select---")
    {
        echo "Please choose Hotel Name";
    }
    else{
        $chotel_id=$_POST['chotel_id']; 
    }
    
    $ride=$_POST['ride'];
    $duration=$_POST['duration'];
    $person=$_POST['person'];
    $u_email=$_POST['u_email'];
    
    $insertquery="insert into tbl_customizedbook (cbook_date, chotel_id, ride, duration, person, u_Email) values ('$cbookdate', '$chotel_id', '$ride', '$duration', '$person', '$u_email')";
    $db -> exec($insertquery);

    echo ("<script>location.href='customizedbookingprint.php';</script>");
    $_SESSION['cbook_date']=$cbookdate;
    
}
?>




