<?php
include 'header.php';
$i=$_GET['flight_id'];
$viewquery="select * from tbl_flight where flight_id='$i'";
foreach ($db->query($viewquery) as $row)
{
    $flight_name=$row['flight_name'];
    $oldfilename=$row['flight_image'];
    $flight_image="flight/".$row['flight_image'];
    $flight_price=$row['flight_price'];
    $flight_phone=$row['flight_phone'];
    $flight_number=$row['flight_number'];
    
}
?>
<div class="container">
	<div class="row">
	
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<form action="" method="post" enctype="multipart/form-data">
		<h2 align="center">Insert Flight Form</h2>
		
		Enter New Flight Name
		<div class="form-group">
			<input type="text" class="form-control" name="flight_name" value="<?php echo $flight_name;?>">
		</div>
		
		Enter New Flight Image
		<div class="form-group" >
		<img alt="" src="<?php echo $flight_image;?>" width="200px" height="200px">
				<br>
			<input type="file" class="form-control" name="flight_image">
		</div>
		
		Enter New Flight Price
		<div class="form-group">
			<input type="text" class="form-control" name="flight_price" value="<?php echo $flight_price;?>">
		</div>
		
		Enter New Flight Phone
		<div class="form-group">
			<input type="text" class="form-control" name="flight_phone" value="<?php echo $flight_phone;?>">
		</div>
		
		Enter New Flight Number
		<div class="form-group">
			<input type="text" class="form-control" name="flight_number" value="<?php echo $flight_number;?>">
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
    $flight_name=$_POST['flight_name'];
    $flight_price=$_POST['flight_price'];
    $flight_phone=$_POST['flight_phone'];
    $flight_number=$_POST['flight_number'];
    if(empty($_FILES['flight_image']['name']))
    {
        $flight_image=$oldfilename;
        $updatequery="update tbl_flight set flight_name='$flight_name',flight_image='$flight_image',flight_price='$flight_price',flight_phone='$flight_phone',flight_number='$flight_number' where flight_id='$i'";
        $db->exec($updatequery);
        header("Location:view_flight.php");
    }
    else{
        $flight_image=$_FILES['flight_image']['name'];
        $dot_pos=strpos(basename($flight_image), "."); //basename=to put out image
        $file_extension=substr($flight_image, $dot_pos);
        $realfilename=$i.$file_extension;
        $dirname="flight/$realfilename";
        unlink("flight/$oldfilename");
        move_uploaded_file($_FILES['flight_image']['tmp_name'], $dirname);
        $updatequery="update tbl_flight set flight_name='$flight_name',flight_image='$realfilename',flight_price='$flight_price',flight_phone='$flight_phone',flight_number='$flight_number' where flight_id='$i'";
        $db->exec($updatequery);
        header("Location:view_flight.php");
    }
   
 
}
?>
