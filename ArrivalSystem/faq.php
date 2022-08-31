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

	<div class="homee">
		<div class="home_slider_containerr">
			<div class="home_slider_itemm">
				<div class="home_slider_backgroundd" style="background-image:url(images/about_background.jpg)">
					<div class="home_slider_contentt text-center">
						<h1 id="headerstyle">FAQ</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- End Part 1 -->

<!-- Start Part 2 -->

	<div class="container">
    	<div class="row">
    		<div class="col-md-12">
				<p align="center" style="font-size: 3vmin;font-family: Comic Sans MS;"><span style="color: black;">We know you have questions about our company. <br>
        That's why we've answered thousands of them Search the answers below or ask your own.</span><br>
			</p>
    		</div>
    	</div>
    </div>
<br><br>
<!-- End Part 2 -->

<!-- Start Part 3 -->

	<div class="container">
    	<div class="row">
    	
			<div class="col-md-12">
         	<h3 style="font-family: Ayuthaya;margin-left: 20px;"><span style="color: #ffb400;"> Top</span><span style="color: black"> Question</span> </h3>
         	<br>
         	<?php 
    	     $v="select * from tbl_faq";
            // echo "<div class='row'>";
            foreach ($db->query($v) as $row)
            {
                $faq_id=$row['faq_id'];
                $faq_question=$row['faq_question'];
                $faq_answer=$row['faq_answer'];
            
            ?>
              	<span style="line-height: 30px;color: black;font-family:Ayuthaya;font-size: 15px;">
              	
                  	<img src="images/faq.png" width="30px" height="30px" class="img-responsive">
                    <a href="#" data-toggle="collapse" data-target="#<?php echo "$faq_id";?>"><?php echo "$faq_question";?></a>
                    <div id="<?php echo "$faq_id";?>" class="collapse">
                    <?php echo "$faq_answer";?>
                  	</div>
                    <br><br>
              </span>  
              	<?php 
                }
            ?>
         	</div>
         
 
         </div>
    </div>
    <br><br>          	

<!-- End Part 3 -->

<!-- Start Part 4 -->


<br><br>          
<!-- End Part 4 -->



<?php
include 'footer.php';
?>