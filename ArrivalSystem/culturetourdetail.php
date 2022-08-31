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
#iconstyle{
    background-color: #FFDB3C;
    color: black;
    padding: 10px 10px;
    border-radius: 50px;
    width: 40px;
    height: 40px;
    text-align: center;
    margin-right: 10px;
}
#fontstyle, #labelstyle{
    font-family:Ayuthaya;
    font-size: 15px;
    color: black;
}
.input-container{
    display: flex;
    width: 100%;
    margin-bottom: 15px;
}
#icoon{
    padding: 15px;
    background: white;
    color: black;
    min-width: 50px;
    text-align: center;
}
#labelstyle{
    font-weight: bold;
}

</style>


<!-- Start Part 1 -->

	<div class="homee">
		<div class="home_slider_containerr">
			<div class="home_slider_itemm">
				<div class="home_slider_backgroundd" style="background-image:url(images/about_background.jpg)">
					<div class="home_slider_contentt text-center">
						<h1 id="headerstyle">Packaged Tours</h1>
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
					<img src="images/culturetour.png" width="50px" height="50px" class="img-responsive ftco-animate">
				</a>
				</div>
				<div class="col-md-5"></div>
			</div>

    	<div class="row">
    		<div class="col-md-12">
				<p align="center" style="font-size: 5vmin;font-family: Comic Sans MS;"><span style="color: black;"> >>> Culture Tour <<< </span></p>
    		</div>
    	</div>
    </div>
	
<br><br>
<!-- End Part 2 -->

<!-- Start Part 3 -->

	<div class="container">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-5">
				<img class="img-responsive" src="images/bagan.jpg" alt="" style="width:100%; height: 100%;">
			</div>
			<div class="col-md-5">
				<img class="img-responsive" src="images/inle.png" alt="" style="width:100%; height: 100%;">
			</div>
			<div class="col-md-1"></div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-5">
				<img class="img-responsive" src="images/mandalay.png" alt="" style="width:100%; height: 100%;">
			</div>
			<div class="col-md-5">
				<img class="img-responsive" src="images/amarapura.jpg" alt="" style="width:100%; height: 100%;">
			</div>
			<div class="col-md-1"></div>
		</div>
		<br><br>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
    			<ul style="line-height: 60px;">
    				<li>
    				<i id="iconstyle" class="fa fa-car"></i>
    				<span id="fontstyle">Day1-Yangon Arrival by flight and Yangon Sightseeing by car</span>
    				</li>
    				<li>
    				<i id="iconstyle" class="fa fa-plane"></i>
    				<span id="fontstyle">Day2-Yangon-Bagan by flight and Bagan Sightseeing by car/horse cart</span>
    				</li>
    				<li>
    				<i id="iconstyle" class="fa fa-car"></i>
    				<span id="fontstyle">Day3-Bagan-Mandalay by flight and Mandalay-Amarapura Sightseeing by car</span>
    				</li>
    				<li>
    				<i id="iconstyle" class="fa fa-ship"></i>
    				<span id="fontstyle">Day4-Mandalay-Heho by flight and Inle Sightseeing by traditional long boat</span>
    				</li>
    				<li>
    				<i id="iconstyle" class="fa fa-car"></i>
    				<span id="fontstyle">Day5- Heho-Yangon by flight, Yangon Sightseeing by car and Yangon Departure by flight</span>
    				</li>
    				<li>
    				<i id="iconstyle" class="fa fa-money"></i>
    				<span id="fontstyle">50MMK per one person</span>
    				</li>
    			</ul>
			</div>
			<div class="col-md-1"></div>
		</div>
		<br><br>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-4">
<!-- 				<div class="form-group"> -->
<!--                 <label id="labelstyle" for="">From</label> -->
<!--                 <div class="input-container" id="datetimepicker1"> -->
<!--                   <input class="input-field form-control" data-format="yyyy-mm-dd" type="text" name="calender" required=""> -->
<!--                 	<i id="icoon" class="fa fa-calendar add-on"></i> -->
<!--                 </div> -->
<!--                 </div> -->
				
			
				<div class="form-group">
                <label id="labelstyle" for="">From</label>
                <div class="input-container">
                <input class="input-field form-control" id="book_date" data-format="yyyy-mm-dd" type="text" name="calender" value required placeholder="Select Date">
				<i id="icoon" class="fa fa-calendar"></i>
               	</div>
                </div>

<!-- 					<div class="form-group"> -->
<!--               		<label id="labelstyle" for="">From</label> -->
<!--               					<div class="input-container"> -->
<!-- 	              					<div id="icoon"><span class="fa fa-calendar add-on"></span></div> -->
<!-- 					                <input type="text" class="input-field form-control checkin_date" placeholder="Check In"> -->
<!-- 					              </div> -->
<!-- 				    </div> -->
			</div>
			<div class="col-md-4">
				<div class="form-group">
                <label id="labelstyle" for="">To</label>
                <div class="input-container">
                <input class="input-field form-control" id="book_date" data-format="yyyy-mm-dd" type="text" name="calender" value required placeholder="Select Date">
                <i id="icoon" class="fa fa-calendar add-on"></i>
               	</div>
                </div>
			</div>
			<div class="col-md-2"></div>
		</div>
		<br><br>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-3">
				<div class="form-group">
                <label id="labelstyle" for="">Person</label>
                <div class="input-container">
                 <i class="icon-user-o icoon"></i>
                		<select class="input-field form-control">
		                  <option>Please Choose...</option>
		                  <option>1</option>
		                  <option>2</option>
		                  <option>3</option>
		                  <option>4</option>
		                  <option>5</option>
		                  <option>6</option>
		                  <option>7</option>
		                  <option>8</option>
		                  <option>9</option>
		                  <option>More than 9</option>
                		</select>
                    </div>
                  </div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
                <label id="labelstyle" for="">Total Price</label>
                <div class="input-container">
                <input class="input-field form-control" type="number">
                <i id="icoon" class="fa fa-money add-on"></i>
               	</div>
                </div>
			</div>
			
			<div class="col-md-3"></div>
		</div>
		<br><br>
		<div class="row">
			<div class="col-md-12" style="text-align: center;">
			<div class="button home_slider_button"><div class="button_bcg"></div><a href="#">Book now</a></div>
			
			</div>
		</div>
	</div>


<br><br><br><br><br><br>
<!-- End Part 3 -->

<!-- Start Part 4 -->



<!-- End Part 4 -->

<!-- <script type="text/javascript" -->
<!--     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js"> -->
<!-- </script> -->



<?php
include 'footer.php';
?>