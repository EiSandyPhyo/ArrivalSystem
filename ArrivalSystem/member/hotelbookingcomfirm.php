<?php 
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
}
.home_slider_backgroundd
{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 760px;
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
#fontstyle{
    font-family:Ayuthaya;
    font-size: 30px;
    color: #333333;
    line-height: 1.07;
    text-align: center;
    font-weight: bold;
    margin: 0px;
}
.room-info-item
{
    background-color: #FFFFFF;
    padding: 40px 20px;
    margin-bottom: 30px;
    -webkit-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
}
.room-item-img
{
    float: left;
}
.room-item-info
{
    padding-left: 235px;
}
.room-item-body
{
    margin-top: 40px;
    margin-bottom: 10px;
    border-bottom: 1px solid #f0f0f0;
}
.room-item-footer
{
    margin-top: 20px;
}
#stylist
{
    list-style-type: none;
    width: 50%;
    float: left;
}
#fontstylee
{
    font-family: Raleway;
    font-size: 16px;
    line-height: 1.88;
    text-align: center;
    color: #7b7b7b;
    padding: 20px 0;
}
#fa {
    font: normal normal normal 14px/1 FontAwesome;
    display: inline-block;
    font-size: 16px;
    font-weight: bold;
/*     text-rendering: auto; */
/*     -webkit-font-smoothing: antialiased; */
/*     -moz-osx-font-smoothing: grayscale; */
     color: #b0914f;
    letter-spacing: 0.1em;
}
#fontstyleee
{
    font-family: Raleway;
    font-size: 13px;
    color: #7b7b7b; 
    letter-spacing: 0.1em;
}

.clearfix
{
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    vertical-align: baseline;
}
#lineestylee
{
    margin: 0px;
    padding: 0px;
    line-style: none;
}
#sfstyle
{
    list-style-type: none;
    display: inline-block;
    font-family: "Raleway", sans-serif;
    font-size: 16px;
    font-weight: 500;
    line-height: 1.88;
    text-align: left;
    color: #7b7b7b;
}
#pstyle
{
    font-family: "Cinzel Decorative";
    font-size: 30px;
    font-weight: bold;
    line-height: 1;
    text-align: left;
    color: #b0914f;
}
#nstyle
{
    font-size: 12px;
    line-height: 2.5;
}
.room-details-content
{
    padding: 30px 0;
/*     background: #b0914f; */
    background: linear-gradient(to top right, #fa9e1b, #8d4fff);
/*     margin: 0 30px; */
}
.room-details-content h3
{
    font-family: "Cinzel Decorative";
    font-size: 18px;
    font-weight: bold;
    line-height: 1.67;
    text-align: center;
    color: #ffffff;
/*     border-bottom: 1px solid #fff; */
}
.room-details-content form
{
    padding: 0 30px;
    overflow: hidden;
}
.form-horizontal .form-group
{
    margin-right: -15px;
    margin-left: -15px;
}
.form-group
{
    margin-bottom: 15px;
}
.form-horizontal .control-label
{
    padding-top: 7px;
    margin-bottom: 0;
    text-align: right;
}
.room-details-content label
{
    font-family: "Raleway", sans-serif;
    font-size: 12px;
    font-weight: bold;
    line-height: 2.5;
    text-align: left;
    color: #ffffff;
}
#fonttstyleee
{
    font-family: Raleway;
    font-size: 20px;
    color: white; 
    letter-spacing: 0.1em;
    padding-top: 7px;
    margin-bottom: 0;
    text-align: left;
    line-height: 2.5;
}
.input-group
{
    position: relative;
    display: table;
    border-collapse: separate;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}
.room-details-content .form-control
{
    border-right: 0;
    -webkit-box-shadow: 0 0 0;
    box-shadow: 0 0 0;
    border-color: #ccc;
    border-radius: 0;
    height: 50px;
}
.formcontrol
{
    padding: 6px 12px;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
.input-group .form-control
{
    position: relative;
    z-index: 2;
    float: left;
    width: 100%;
    margin-bottom: 0;
    display: table-cell;
}
#formstyle
{
    font-family: "Raleway", sans-serif;
    font-size: 14px;
    font-weight: 500;
    line-height: 2.14;
    text-align: left;
    color: #7b7b7b;
    overflow: visible;
}
.room-details-content .input-group-addon
{
    background: white !important;
    border-radius: 0px;
}
#ii
{
    padding: 5px 20px;
    font-size: 14px;
    font-weight: 400;
    line-height: 1;
    color: #555;
    text-align: center;
    background-color: #eee;
/*     border: 1px solid #ccc; */
/*     border-radius: 4px; */
    width: 1%;
    white-space: nowrap;
    vertical-align: middle;
}
.input-group.date .input-group-addon span {
    cursor: pointer;
    width: 14px;
    height: 14px;
    
}
.col-md-6
{
    width: 50%;
    float: left;
}
option {
    font-weight: normal;
    display: block;
    white-space: pre;
    min-height: 1.2em;
    padding: 0px 2px 1px;
}
#formstylee
{
    font-family: "Raleway", sans-serif;
    font-size: 14px;
    font-weight: 500;
    line-height: 2.14;
    text-align: left;
    color: #7b7b7b;
    overflow: visible;
    height: 40px;
}
#form_submit_button
{
    font-family: "Cinzel Decorative";
    font-size: 14px;
    font-weight: bold;
    line-height: 1.67;
    text-align: center;
    color: #ffffff;
    border-bottom: 1px solid #fff;
}
#hhr{
	width: 80%;
	margin-left: 10%;
	border-bottom: 2px solid white;
}
#formmstyle
{
    font-family: "Raleway", sans-serif;
    font-size: 16px;
    font-weight: 500;
    line-height: 2.14;
    text-align: left;
    color: #AF914E;
    overflow: visible;
    border-radius: 7px 0px 0px 7px;
}
#fonttstyleee
{
    font-family: Raleway;
    font-size: 16px;
    color: white; 
    letter-spacing: 0.1em;
}
#fonttstylee
{
    font-family: Raleway;
    font-size: 16px;
/*     line-height: 1.88; */
    text-align: left;
    color: #7b7b7b;
}
</style>


<!-- Start Part 1 -->

	<div class="homee">
		<div class="home_slider_containerr">
			<div class="home_slider_itemm">
				<div class="home_slider_backgroundd" style="background-image:url(images/reservation_bg.jpg)">
					<div class="home_slider_contentt text-center">
						<h1 id="headerstyle">Reservation Comfirm</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- End Part 1 -->

<!-- Start Part 2 -->
<div class="container-fluid" style="background-color: #F9F9F9;">
    <div class="container" style="padding-top: 5%;">
    	<div class="row">
    		<div class="col-md-8">
    		
    			<div class="room-info-item">
    				<h2 id="fontstyle">Reservation Completed!</h2>
    				<p id="fontstylee">
     				<span id="fontstyleee">Your reservation details have just been sent to your email. If you have any question, please don't hesitate to contact us. Thank you!</span> 
   					</p>
   					<p id="fontstylee">
   					<i class="fa fa-mobile"><span id="fontstyleee">+233) 123 456789</span></i><br>
   					<i class="fa fa-envelope"><span id="fontstyleee">contact@sparta.com</span></i>
   					</p>
    			</div>
    		</div>
    		
    		<div class="col-md-4" >
    			<div class="room-details-content">
    			<h4 style="text-align: right;padding: 4px;color: black;">Date : <?php echo $date=date("d/m/Y",time());?></h4>
    				<br>
    				<h3>Your Reservation</h3>
    				<hr id="hhr">
    				<form action="" class="form-horizontal">
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
    				<div class="form-group">
    					<div class="col-md-4"></div>
            			<div class="col-md-8" style="float: right;">
            				<div class="input-group">
            					<input id="formmstyle" name="u_email" class="form-control" value="<?php echo htmlentities($result->u_Name);?>" id="fonttstyleee" readonly>
            					<span class="input-group-addon btn" id="ii" style="border-radius: 0px 7px 7px 0px;">
            					<span class="fa fa-user"></span>
            					</span>
            				</div>
                    		</div>	
               					
    					</div>
    				<br><br>
    				<div class="form-group">
    								<div class="col-md-4"></div>
            						<div class="col-md-8" style="float: right;">
            						<div class="input-group">
            							<input id="formmstyle" name="u_email" class="form-control" value="<?php echo htmlentities($result->u_Email);?>" id="fonttstyleee" readonly>
            							<span class="input-group-addon btn" id="ii" style="border-radius: 0px 7px 7px 0px;">
            								<span class="fa fa-user"></span>
            							</span>
            							</div>
                       				</div>	
               					
    							</div>
    						
    				<?php }} ?>
    				
    				<br><br><br><br>

  <?php
  $useremail=$_SESSION['login'];
  $sql = "SELECT * from tbl_hotelbooking where u_Email=:useremail";
  $query = $db -> prepare($sql);
  $query -> bindParam(':useremail',$useremail, PDO::PARAM_STR);
  $query->execute();
  $results=$query->fetchAll(PDO::FETCH_OBJ);
  $cnt=1;
  if($query->rowCount() > 0)
  {
      foreach($results as $result)
      {	?>
    				
    					<div class="form-group">
    					<div class="row">
    						<div class="col-md-6">
    							<label class="control-label">Region</label>
    						</div>
    						<div class="col-md-6">
    							<p id="fonttstylee">
               						<span id="fonttstyleee"><?php echo htmlentities($result->region);?></span>
               					</p>
    						</div>
    					</div>
    					</div>
    					<br>
    					<div class="form-group">
    					<div class="row">
    						<div class="col-md-6">
    							<label class="control-label">Hotel</label>
    						</div>
    						<div class="col-md-6">
    							<p id="fonttstylee">
               						<span id="fonttstyleee"><?php echo htmlentities($result->hotel);?></span>
               					</p>
    						</div>
    					</div>
    					</div>
    					<br>
    					<div class="form-group">
    					<div class="row">
    						<div class="col-md-6">
    							<label class="control-label">CheckIn</label>
    						</div>
    						<div class="col-md-6">
    							<p id="fonttstylee">
               						<span id="fonttstyleee"><?php echo htmlentities($result->checkin);?></span>
               					</p>
    						</div>
    					</div>
    					</div>
    					<br>
    					<div class="form-group">
    					<div class="row">
    						<div class="col-md-6">
    							<label class="control-label">CheckOut</label>
    						</div>
    						<div class="col-md-6">
    							<p id="fonttstylee">
               						<span id="fonttstyleee"><?php echo htmlentities($result->checkout);?></span>
               					</p>
    						</div>
    					</div>
    					</div>
    					<br>
    					<div class="form-group">
    					<div class="row">
    						<div class="col-md-6">
    							<label class="control-label">Night</label>
    						</div>
    						<div class="col-md-6">
    							<p id="fonttstylee">
               						<span id="fonttstyleee"><?php echo htmlentities($result->night);?></span>
               					</p>
    						</div>
    					</div>
    					</div>
    					<br>
    					<div class="form-group">
    					<div class="row">
    						<div class="col-md-6">
    							<label class="control-label">Room</label>
    						</div>
    						<div class="col-md-6">
    							<p id="fonttstylee">
               						<span id="fonttstyleee"><?php echo htmlentities($result->room);?></span>
               					</p>
    						</div>
    					</div>
    					</div>
    					<br>
    					<div class="form-group">
    					<div class="row">
    						<div class="col-md-6">
    							<label class="control-label">Adults</label>
    						</div>
    						<div class="col-md-6">
    							<p id="fonttstylee">
               						<span id="fonttstyleee"><?php echo htmlentities($result->adults);?></span>
               					</p>
    						</div>
    					</div>
    					</div>
    					<br>
    					<div class="form-group">
    					<div class="row">
    						<div class="col-md-6">
    							<label class="control-label">Children</label>
    						</div>
    						<div class="col-md-6">
    							<p id="fonttstylee">
               						<span id="fonttstyleee"><?php echo htmlentities($result->children);?></span>
               					</p>
    						</div>
    					</div>
    					</div>
    					<br>
    					<div class="form-group">
    					<div class="row">
    						<div class="col-md-6">
    							<label class="control-label">Payment Type</label>
    						</div>
    						<div class="col-md-6">
    							<p id="fonttstylee">
               						<span id="fonttstyleee"><?php echo htmlentities($result->paymenttype);?></span>
               					</p>
    						</div>
    					</div>
    					</div>
    					
    					<div class="col-md-12">
    							<button type="submit" name="print" id="form_submit_button" class="form_submit_button button trans_200">PrintOut</button> 
    					</div>
    					
    				<?php }} ?>
    				</form>
    				
    				
<!--     				<hr id="hhr"> -->
    					
    			</div>
    		</div>
    	</div>
    </div>
 </div>
 <br>
 

 
<?php 
include 'footer.php';
?>

 <?php 
 
 if(isset($_POST['print']))
 {
     $bookdate=$_SESSION['book_date'];
     echo ("<script>location.href='hotelbookingprint.php';</script>");
 }
 
 ?>

