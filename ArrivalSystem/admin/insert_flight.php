<?php
include 'header.php';
?>
<div class="container">
	<div class="row">
	
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<form action="" method="post" enctype="multipart/form-data">
		<h2 align="center">Insert Flight Form</h2>
		
		Enter Flight Name
		<div class="form-group">
			<input type="text" class="form-control" name="flight_name">
		</div>
		
		Enter Flight Image
		<div class="form-group" >
			<input type="file" class="form-control" name="flight_image">
		</div>
		
		Enter Flight Price
		<div class="form-group">
			<input type="text" class="form-control" name="flight_price">
		</div>
		
		Enter Flight Phone
		<div class="form-group">
			<input type="text" class="form-control" name="flight_phone">
		</div>
		
		Enter Flight Number
		<div class="form-group">
			<input type="text" class="form-control" name="flight_number">
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
        $flight_name=$_POST['flight_name'];
        $flight_price=$_POST['flight_price'];
        $flight_phone=$_POST['flight_phone'];
        $flight_number=$_POST['flight_number'];
        $flight_image=$_FILES['flight_image']['name']; //to upload images (png or jpg or jpeg)
        
        $insertquery="insert into tbl_flight (flight_name,flight_image,flight_price,flight_phone,flight_number) values ('$flight_name','', '$flight_price','$flight_phone','$flight_number')";
        $db -> exec($insertquery); //to insert database
        
        $i = $db->lastInsertId();
        
        $dot_pos=strpos(basename($flight_image), "."); //basename=to put out image
       
        
        $file_extension=substr($flight_image, $dot_pos);
        $realfilename=$i.$file_extension;

        //into save admin>service folder
        $dirname="flight/$realfilename";
        
        $updatequery="update tbl_flight set flight_image='$realfilename' where flight_id='$i' ";
        $db->query($updatequery);
        
        move_uploaded_file($_FILES['flight_image']['tmp_name'], $dirname);  
        
    }
?>