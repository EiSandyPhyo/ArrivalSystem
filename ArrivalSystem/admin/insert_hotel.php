<?php
include 'header.php';
?>
<div class="container">
	<div class="row">
	
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<form action="" method="post" enctype="multipart/form-data">
		<h2 align="center">Insert Hotel Form</h2>
		
		Enter Hotel Name
		<div class="form-group">
			<input type="text" class="form-control" name="hotel_name">
		</div>
		
		Enter Hotel Image
		<div class="form-group" >
			<input type="file" class="form-control" name="hotel_image">
		</div>
		
		Enter Hotel Price
		<div class="form-group">
			<input type="text" class="form-control" name="hotel_price">
		</div>
		
		Enter Hotel Location
		<div class="form-group">
			<input type="text" class="form-control" name="hotel_location">
		</div>
		
		Enter Hotel Phone
		<div class="form-group">
			<input type="text" class="form-control" name="hotel_phone">
		</div>
		
		Enter Hotel Email
		<div class="form-group">
			<input type="text" class="form-control" name="hotel_email">
		</div>
		
		<div class="form-group">
			<input type="submit" class="form-control" name="insert" value="Insert">
		</div>
		</form>
	</div>
	<div class="col-md-3"></div>
	
	</div>
</div>

<?php 
    if (isset($_POST['insert'])) {
        $hotel_name=$_POST['hotel_name'];
        $hotel_price=$_POST['hotel_price'];
        $hotel_location=$_POST['hotel_location'];
        $hotel_phone=$_POST['hotel_phone'];
        $hotel_email=$_POST['hotel_email'];
        $hotel_image=$_FILES['hotel_image']['name']; //to upload images (png or jpg or jpeg)
        
        $insertquery="insert into tbl_hotel (hotel_name,hotel_image,hotel_price,hotel_location,hotel_phone,hotel_email) values ('$hotel_name','', '$hotel_price','$hotel_location','$hotel_phone','$hotel_email')";
        $db -> exec($insertquery); //to insert database
        
        $i = $db->lastInsertId();
        

        $dot_pos=strpos(basename($hotel_image), "."); //basename=to put out image
       
        
        $file_extension=substr($hotel_image, $dot_pos);
        $realfilename=$i.$file_extension;

        //into save admin>service folder
        $dirname="hotel/$realfilename";
        
        $updatequery="update tbl_hotel set hotel_image='$realfilename' where hotel_id='$i' ";
        $db->query($updatequery);
        
        move_uploaded_file($_FILES['hotel_image']['tmp_name'], $dirname);  
        
    }
?>