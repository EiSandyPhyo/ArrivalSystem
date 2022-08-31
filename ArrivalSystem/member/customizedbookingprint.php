<?php
session_start();
include 'header.php';
include 'admin/connect.php';
$useremail=$_SESSION['login'];
$cbook_date=$_SESSION['cbook_date'];
?>

<script type="text/javascript">
function printContent(el){
	var restorepage=$('body').html();
	var printcontent=$('#' + el).clone();
	$('body').empty().html(printcontent);
	window.print();
	$('body').html(restorepage);

}
</script>

<br><br><br><br><br><br><br><br>

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
/*     line-height: 1.07; */
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
/*     line-height: 1.88; */
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
/*     line-height: 1.88; */
    text-align: left;
    color: #7b7b7b;
}
#pstyle
{
    font-family: "Cinzel Decorative";
    font-size: 30px;
    font-weight: bold;
/*     line-height: 1; */
    text-align: left;
    color: #b0914f;
}
#nstyle
{
    font-size: 12px;
/*     line-height: 2.5; */
}
.room-details-content
{
    padding: 30px 0;
/*     background: #b0914f; */
    background: linear-gradient(to top right, #fa9e1b, #8d4fff);
/*     margin: 0 30px; */
    padding-left: 30px;
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
/*     line-height: 2.5; */
    text-align: left;
    color: black;
    
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
/*     line-height: 2.5; */
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
/*     line-height: 2.14; */
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
/*     line-height: 1; */
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
/*     line-height: 2.14; */
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
/*     line-height: 1.67; */
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
/*     line-height: 2.14; */
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


<div class="container">
<div class="row" id="print">
<div class="col-md-2"></div>
<div class="col-md-8">
<form action="" class="form-horizontal">
		<div class="room-details-content">
				
				<?php 
				$viewquery="select * from tbl_customizedbook where u_Email='$useremail' and cbook_date='$cbook_date'";
				$i=1;
				foreach ($db->query($viewquery) as $row)
				{
				    $cbook_date=$row['cbook_date'];
				    $chotel_id=$row['chotel_id'];
				    $ride=$row['ride'];
				    $duration=$row['duration'];
				    $person=$row['person'];
				
				?>
				
			<h3 style="text-align: center;color: black;font-size: 26px;">Slip Voucher</h3>
			<br><br>
			
					<div class="form-group">
    					<div class="row">
    						<div class="col-md-6">
    							<label class="control-label">Book Date</label>
    						</div>
    						<div class="col-md-6">
    							<p id="fonttstylee">
               						<span id="fonttstyleee"><?php echo $cbook_date;?></span>
               					</p>
    						</div>
    					</div>
    					</div>
    					
    				
            			<?php 
        				$viewquery="select * from customize_hotel where chotel_id='$chotel_id'";
        				$i=1;
        				foreach ($db->query($viewquery) as $row)
        				{
        				    
        				    $cregion_id=$row['cregion_id'];
        				   
        				?>
    					
    					<div class="form-group">
    					<div class="row">
    						<div class="col-md-6">
    							<label class="control-label">Region Name</label>
    						</div>
    						<?php 
            				$viewquery="select * from customize_region where cregion_id='$cregion_id'";
            				$i=1;
            				foreach ($db->query($viewquery) as $row)
            				{
            				    $cregion_name=$row['cregion_name'];
            				?>
    						<div class="col-md-6">
    							<p id="fonttstylee">
               						<span id="fonttstyleee"><?php echo $cregion_name;?></span>
               					</p>
    						</div>
                			<?php 
            				$i++;
            				}
            				?>		
    					</div>
    					</div>
    					
            			<?php 
        				$i++;
        				}
        				?>
    				
    					
    					<div class="form-group">
    					<div class="row">
    						<div class="col-md-6">
    							<label class="control-label">Hotel Name</label>
    						</div>
    						<?php 
            				$viewquery="select * from customize_hotel where chotel_id='$chotel_id'";
            				$i=1;
            				foreach ($db->query($viewquery) as $row)
            				{
            				    
            				    $chotel_name=$row['chotel_name'];
            				   
            				?>
    						<div class="col-md-6">
    							<p id="fonttstylee">
               						<span id="fonttstyleee"><?php echo $chotel_name;?></span>
               					</p>
    						</div>
                			<?php 
            				$i++;
            				}
            				?>
    					</div>
    					</div>
    			
					
    			
    					
    					
    					<div class="form-group">
    					<div class="row">
    						<div class="col-md-6">
    							<label class="control-label">ride</label>
    						</div>
    						<div class="col-md-6">
    							<p id="fonttstylee">
               						<span id="fonttstyleee"><?php echo $ride;?></span>
               					</p>
    						</div>
    					</div>
    					</div>
    					<div class="form-group">
    					<div class="row">
    						<div class="col-md-6">
    							<label class="control-label">duration</label>
    						</div>
    						<div class="col-md-6">
    							<p id="fonttstylee">
               						<span id="fonttstyleee"><?php echo $duration;?></span>
               					</p>
    						</div>
    					</div>
    					</div>
    					<div class="form-group">
    					<div class="row">
    						<div class="col-md-6">
    							<label class="control-label">person</label>
    						</div>
    						<div class="col-md-6">
    							<p id="fonttstylee">
               						<span id="fonttstyleee"><?php echo $person;?></span>
               					</p>
    						</div>
    					</div>
    					</div>
    					
    			<br>
    			<h3 style="text-align: center;color: black;font-size: 23px;">Thank You! See You Again!</h3>
			
				<?php 
				$i++;
				}
				?>
				</div>
				
				
</form>
</div>
<div class="col-md-2"></div>
</div>

<form action="" class="form-group">
	
	<div class="form-group">
	<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4" style="text-align: center;">
	  <input type="button" class="form_submit_button button trans_200" value="PRINT" id="printbtn" onclick="printContent('print')">  
	</div>
	<div class="col-md-4"></div>
	</div>
</div>
</form>
</div>
<br><br>
<?php 
include 'footer.php';
?>



