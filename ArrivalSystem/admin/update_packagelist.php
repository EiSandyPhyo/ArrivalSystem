<?php
include 'header.php';
$i=$_GET['packagelist_id'];
$viewquery="select * from packagelist where packagelist_id='$i'";
foreach ($db->query($viewquery) as $row)
{
    $packagelist_name=$row['packagelist_name'];
    $duration=$row['duration'];
    $packagelist_price=$row['packagelist_price'];
    $oldfilename=$row['packagelist_image'];
    $packagelist_image="package/".$row['packagelist_image'];
    $packagelist_id=$row['package_id'];
}
?>

<div class="container">
	<h2 align="center">Update Packagelist Form</h2>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
		<form action="" method="post" enctype="multipart/form-data">
		Enter New Packagelist Name
		<div class="form-group">
		<input type="text" name="packagelist_name" class="form-control" value="<?php echo $packagelist_name;?>">
		</div>
		
		<div class="form-group">
		Choose New Package Image
		<img alt="" src="<?php echo $packagelist_image;?>" width="200px" height="200px">
		<br>
		<input type="file" class="form-control" name="packagelist_image">
		</div>
		
		<div class="form-group">
		Enter New Package Price
		<input type="text" name="packagelist_price" class="form-control" value="<?php echo $packagelist_price;?>">
		</div>
		
		<div class="form-group">
		Enter New Duration
		<input type="text" name="duration" class="form-control" value="<?php echo $duration;?>">
		</div>
		
		<div class="form-group">
		<input type="submit" name="update" value="Update" class="form-control">
		</div>
		
		</form>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>

<?php 
if (isset($_POST['update'])) {
    $packagelist_name=$_POST['packagelist_name'];
    $duration=$_POST['duration'];
    $packagelist_price=$_POST['packagelist_price'];
    if(empty($_FILES['packagelist_image']['name']))
    {
        $packagelist_image=$oldfilename;
        $updatequery="update packagelist set packagelist_name='$packagelist_name',packagelist_image='$packagelist_image',duration='$duration',packagelist_price='$packagelist_price' where packagelist_id='$i'";
        $db->exec($updatequery);
        header("Location:view_packagelist.php?package_id=$package_id");
    }
    else{
        $packagelist_image=$_FILES['packagelist_image']['name'];
        $dot_pos=strpos(basename($packagelist_image), "."); //basename=to put out image
        $file_extension=substr($packagelist_image, $dot_pos);
        $realfilename=$i.$file_extension;
        $dirname="package/$realfilename";
        unlink("package/$oldfilename");
        move_uploaded_file($_FILES['packagelist_image']['tmp_name'], $dirname);
        $updatequery="update packagelist set packagelist_name='$packagelist_name',packagelist_image='$packagelist_image',duration='$duration',packagelist_price='$packagelist_price' where packagelist_id='$i'";
        $db->exec($updatequery);
        header("Location:view_packagelist.php?package_id=<?php echo $package_id?>");
    }
   
 
}
?>









