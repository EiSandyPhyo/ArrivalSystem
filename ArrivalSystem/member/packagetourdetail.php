<?php
session_start();
include 'header.php';
include 'admin/connect.php';
$packagelist_id=$_GET['packagelist_id'];
$duration=$_GET['duration'];
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
#ff 
{   
    font-family:Ayuthaya;
    font-weight: bold;
    font-size: 16px;
    color: black;
    text-transform: capitalize;
    text-align: left;
    padding-top: 10px;
    line-height: 80px;
}
#fff 
{   
    font-family:Ayuthaya;
    font-weight: bold;
    font-size: 18px;
    color: black;
    text-transform: capitalize;
    text-align: center;
    padding-top: 5px;
    line-height: 80px;
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
		
		<form action="" class="contact_form text-center" method="post">
		
		<div class="row">
		<div class="col-md-12">
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
    								<div class="col-md-9"></div>
            						<div class="col-md-3" style="float: right;">
            						<div class="input-group">
            							<input id="formmstyle" name="u_email" class="form-control" value="<?php echo htmlentities($result->u_Email);?>" id="fonttstyleee" readonly>
            							<span class="input-group-addon btn" id="ii" style="border-radius: 0px 7px 7px 0px;">
            								<span class="fa fa-user"></span>
            							</span>
            							</div>
                       				</div>	
               					
    							</div>
    							<?php }} ?>
		</div>
		</div>
		
	
	
	<div class="row">
	<?php 
        $v="select * from packagelist where packagelist_id='$packagelist_id'";
        // echo "<div class='row'>";
        foreach ($db->query($v) as $row)
        {
            $packagelist_id=$row['packagelist_id'];
            $packagelist_name=$row['packagelist_name'];
        
        ?>
	<div class="col-md-1"></div>
	<div class="col-md-10">
	
				<div class="form-group">
                <h3 id="fff">PackagedTour Type</h3>
                <div class="input-container">
                <input class="date form-control" id="" value="<?php echo "$packagelist_name";?>" type="text" name="packagetype" readonly>
               	</div>
                </div>
		
	</div>
	<div class="col-md-1"></div>
	 <?php 
        }
     ?>
	</div>
	
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
                <h3 id="ff">Depart Date</h3>
                <div class="input-container">
                <input class="date form-control" id="datepicker" value="mm/dd/yyyy" type="text" name="departdate" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
				<i id="icoon" class="fa fa-calendar"></i>
               	</div>
                </div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
                <h3 id="ff">Return Date</h3>
                <div class="input-container">
                <input class="date form-control" id="datepicker1" value="mm/dd/yyyy" type="text" name="returndate" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
				<i id="icoon" class="fa fa-calendar"></i>
               	</div>
                </div>
			</div>
			
			<div class="col-md-4">
				<div class="form-group">
                <h3 id="ff">Person</h3>
                <div class="input-container">
                 <i class="icon-user-o icoon"></i>
                		<select class="input-field form-control" name="person">
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
			
		</div>
		<br><br>
		
		<br><br>
<!-- 			<div class="row"> -->
<!-- 			<div class="col-md-12"> -->
<!-- 			<div class="button home_slider_button"> -->
<!-- 			<div class="button_bcg"></div><a href="#">Book now</a> -->
<!-- 			</div> -->
<!-- 			</div> -->
<!-- 			</div> -->
			
			<div class="row" style="height: 100px; ">
							<div class="col-md-3"></div>
							<div class="col-md-6">
							
						 	<button type="submit" name="packagedtourbook" id="form_submit_button" class="form_submit_button button trans_200">BookNow</button>
    						</div>
    						<div class="col-md-3"></div>
    						</div>
			
		</form>
	</div>


<br><br><br><br><br><br>
<!-- End Part 3 -->

<!-- Start Part 4 -->



<!-- End Part 4 -->

<!-- <script type="text/javascript" -->
<!--     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js"> -->
<!-- </script> -->

        <!-- Calendar -->
				<link rel="stylesheet" href="css/jquery-ui.css" />
				<script src="js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
        <!-- //Calendar -->


<?php
include 'footer.php';
?>


 <?php 
if(isset($_POST['packagedtourbook']))
{   
    
    $bookdate=date('Y/m/d');
    $packagelist_id=$_POST['packagelist_id'];
    $departdate=$_POST['departdate'];
    $returndate=$_POST['returndate'];
    $person=$_POST['person'];
    $u_email=$_POST['u_email'];
    
    $insertquery="insert into tbl_packagetourbook (book_date, packagelist_id, start_date, end_date, person, u_Email) values ('$bookdate','$packagelist_id', '$departdate', '$returndate','$person','$u_email')";
    $db -> exec($insertquery);

    $_SESSION['login']=$useremail;
    $_SESSION['book_date']=$bookdate;
    echo ("<script>location.href='offers.php';</script>");
    
}
?>




