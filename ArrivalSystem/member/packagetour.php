<?php
session_start();
include 'header.php';
include 'admin/connect.php';
$package_id=$_GET['packagelist_id'];
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
	height: 800px;
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


</style>


<!-- Start Part 1 -->

	<div class="homee">
		<div class="home_slider_containerr">
			<div class="home_slider_itemm">
				<div class="home_slider_backgroundd" style="background-image:url(images/tourimages/mainculture3.jpg)">
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
				<?php 
                    $packagetypequery="select * from package where package_id='$package_id'";
                    foreach ($db->query($packagetypequery) as $row)
                    {
                        $package_image=$row['package_image'];
                        $realfile="../admin/package/$package_image";
                    }
                    
                    ?>
				<a href="#">
					<?php echo "<img class='img-responsive' src='$realfile' alt='Main Image' style='width:70px; height: 70px;'>"?>
				</a>
				</div>
				<div class="col-md-5"></div>
			</div>

    	<div class="row">
    		<div class="col-md-12">
    			<?php 
                    $packagetypequery="select * from package where package_id='$package_id'";
                    foreach ($db->query($packagetypequery) as $row)
                    {
                        $package_type=$row['package_type'];
                    }
                    
                    ?>
				<p align="center" style="font-size: 5vmin;font-family: Comic Sans MS;"><span style="color: black;"> 
				<?php echo $package_type;?></span></p>
    		</div>
    	</div>
    </div>
	
<br><br>
<!-- End Part 2 -->

<!-- Start Part 3 -->

<div class="container">
    <div class="row" style="margin-bottom: 20px;">
    
    <?php 
        $v="select * from packagelist where package_id='$package_id'";
        // echo "<div class='row'>";
        foreach ($db->query($v) as $row)
        {
            $packagelist_id=$row['packagelist_id'];
            $packagelist_name=$row['packagelist_name'];
            $packagelist_image=$row['packagelist_image'];
            $duration=$row['duration'];
            $realfile="../admin/package/$packagelist_image";
        
        ?>
    
    	<div class="col-md-1"></div>
    	<div class="col-md-5">
    		<div class="container">
              <div class="card border-light" style="width:400px">
              
                <?php echo "<img class='card-img-top rounded' src='$realfile' alt='Card image' style='width:100%; height: 350px;'>"?>
                
                <div class="card-body">
                  <h4 class="card-title" id="fontstyle" style="line-height: 30px;"><?php echo "$packagelist_name";?></h4>
                  <p class="card-text" style="margin-left: -130px;">
                  <i id="icoon" class="fa fa-clock-o"></i> <span id="daystyle"><?php echo "$duration";?></span>
                  </p><br>
                  
                  <a href="packagetourdetail.php?packagelist_id=<?php echo $packagelist_id?>&duration=<?php echo $duration?>" class="btn btn-4" id="fontstylee">Details</a>
                   
                </div>
              </div>
			</div>
    	
    	</div>
    	 <?php 
        }
     ?>
    	<div class="col-md-1"></div>
    	
   	
    </div>
</div> 

<!-- End Part 3 -->

<!-- Start Part 4 -->



<!-- End Part 4 -->

<?php
include 'footer.php';
?>