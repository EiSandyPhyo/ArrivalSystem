<?php
include 'header.php';
$i=$_GET['package_id'];
$viewquery="select * from package where package_id='$i'";
foreach ($db->query($viewquery) as $row)
{
    $package_type=$row['package_type'];
    $oldfilename=$row['package_image'];
    $package_image="package/".$row['package_image'];
    $package_desc=$row['package_desc'];
    
}
?>
<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
		
		<form action="" method="post" enctype="multipart/form-data" style="line-height: 30px;">
			<h2 align="center" style="line-height: 50px;">Update Package Form</h2>
				Enter Update Package Type
				<div class="form-group">
					<input type="text" class="form-control" name="package_type" value="<?php echo $package_type;?>">
				</div>
				Enter Update Package Image
				<div class="form-group">
				<img alt="" src="<?php echo $package_image;?>" width="200px" height="200px">
				<br>
					<input type="file" class="form-control" name="package_image"> 
				</div>
				
				Enter Update Package Description
				<div class="form-group">
					<textarea rows="5" cols="30" class="form-control" name="package_description">
					<?php  echo $package_desc;?>
					</textarea>
				</div>
				<div class="form-group">
				<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-3">
				<input type="submit" class="form-control" name="update" value="Update">
				</div>
				<div class="col-md-5"></div>
				</div>	
				</div>
			</form>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>

<?php 
if (isset($_POST['update'])) {
    $package_type=$_POST['package_type'];
    $package_desc=$_POST['package_description'];
    if(empty($_FILES['package_image']['name']))
    {
        $package_image=$oldfilename;
        $updatequery="update package set package_type='$package_type',package_image='$package_image',package_desc='$package_desc' where package_id='$i'";
        $db->exec($updatequery);
        header("Location:view_package.php");
    }
    else{
        $package_image=$_FILES['package_image']['name'];
        $dot_pos=strpos(basename($package_image), "."); //basename=to put out image
        $file_extension=substr($package_image, $dot_pos);
        $realfilename=$i.$file_extension;
        $dirname="package/$realfilename";
        unlink("package/$oldfilename");
        move_uploaded_file($_FILES['package_image']['tmp_name'], $dirname);
        $updatequery="update package set package_type='$package_type',package_image='$realfilename',package_desc='$package_desc' where package_id='$i'";
        $db->exec($updatequery);
        header("Location:view_package.php");
    }
   
 
}
?>




