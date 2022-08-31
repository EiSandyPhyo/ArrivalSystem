<?php
include 'header.php';
$i=$_GET['hotel_id'];
$viewquery="select * from tbl_hotel where hotel_id='$i'";
foreach ($db->query($viewquery) as $row)
{
    $hotel_name=$row['hotel_name'];
    $oldfilename=$row['hotel_image'];
    $hotel_image="hotel/".$row['hotel_image'];
    $hotel_price=$row['hotel_price'];
    $hotel_location=$row['hotel_location'];
    $hotel_phone=$row['hotel_phone'];
    $hotel_email=$row['hotel_email'];
    
}
?>
<div class="container">
	<div class="row">
	
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<form action="" method="post" enctype="multipart/form-data">
		<h2 align="center">Insert Hotel Form</h2>
		
		Enter Hotel Name
		<div class="form-group">
			<input type="text" class="form-control" name="hotel_name" value="<?php echo $hotel_name;?>">
		</div>
		
		Enter Hotel Image
		<div class="form-group" >
		<img alt="" src="<?php echo $hotel_image;?>" width="200px" height="200px">
				<br>
			<input type="file" class="form-control" name="hotel_image">
		</div>
		
		Enter Hotel Price
		<div class="form-group">
			<input type="text" class="form-control" name="hotel_price" value="<?php echo $hotel_price;?>">
		</div>
		
		Enter Hotel Location
		<div class="form-group">
			<input type="text" class="form-control" name="hotel_location" value="<?php echo $hotel_location;?>">
		</div>
		
		Enter Hotel Phone
		<div class="form-group">
			<input type="text" class="form-control" name="hotel_phone" value="<?php echo $hotel_phone;?>">
		</div>
		
		Enter Hotel Email
		<div class="form-group">
			<input type="text" class="form-control" name="hotel_email" value="<?php echo $hotel_email;?>">
		</div>
		
		<div class="form-group">
			<input type="submit" class="form-control" name="update" value="Insert">
		</div>
		</form>
	</div>
	<div class="col-md-3"></div>
	
	</div>
</div>

<?php
if (isset($_POST['update'])) {
    $hotel_name=$_POST['hotel_name'];
    $hotel_price=$_POST['hotel_price'];
    $hotel_location=$_POST['hotel_location'];
    $hotel_phone=$_POST['hotel_phone'];
    $hotel_email=$_POST['hotel_email'];
    if(empty($_FILES['hotel_image']['name']))
    {
        $hotel_image=$oldfilename;
        $updatequery="update tbl_hotel set hotel_name='$hotel_name',hotel_image='$hotel_image',hotel_price='$hotel_price',hotel_location='$hotel_location',hotel_phone='$hotel_phone',hotel_email='$hotel_email' where hotel_id='$i'";
        $db->exec($updatequery);
        header("Location:view_hotel.php");
    }
    else{
        $hotel_image=$_FILES['hotel_image']['name'];
        $dot_pos=strpos(basename($hotel_image), "."); //basename=to put out image
        $file_extension=substr($hotel_image, $dot_pos);
        $realfilename=$i.$file_extension;
        $dirname="hotel/$realfilename";
        unlink("hotel/$oldfilename");
        move_uploaded_file($_FILES['hotel_image']['tmp_name'], $dirname);
        $updatequery="update tbl_hotel set hotel_name='$hotel_name',hotel_image='$realfilename',hotel_price='$hotel_price',hotel_location='$hotel_location',hotel_phone='$hotel_phone',hotel_email='$hotel_email' where hotel_id='$i'";
        $db->exec($updatequery);
        header("Location:view_hotel.php");
    }
   
 
}
?>
