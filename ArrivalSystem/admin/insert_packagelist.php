<?php 
include 'header.php';
?>

<div class="container">
	<h2 align="center">Inert PackageList Form</h2>
	<form action="" method="post" enctype="multipart/form-data">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-4">
			<div class="form-group">
			<select name="package_id" class="form-control">
			<option>----Please Select----</option>
				<?php 
				$viewquery="select * from package";
				foreach ($db->query($viewquery) as $row)
				{
				    $package_id=$row['package_id'];
				    $package_type=$row['package_type'];
				    echo "<option value='$package_id'>$package_type</option>";
				}
				?>
			</select>
			</div>
		</div>
		<div class="col-md-4">
		Enter Packagelist Name
		<div class="form-group">
		<input type="text" name="packagelist_name" class="form-control">
		</div>
		
		<div class="form-group">
		Choose Package Image
		<input type="file" name="packagelist_image" class="form-control">
		</div>
		
		<div class="form-group">
		Enter Duration
		<input type="text" name="duration" class="form-control">
		</div>
		
		<div class="form-group">
		Enter Package Price
		<input type="text" name="packagelist_price" class="form-control">
		</div>
		
		<div class="form-group">
		<input type="submit" name="insert" value="Insert" class="form-control">
		</div>
		
		</div>
		<div class="col-md-2"></div>
	</div>
	</form>
</div>

<?php 
if(isset($_POST['insert']))
{
    if ($_POST['package_id']=="----Please Select----")
    {
        echo "Please choose Package Name";
    }
    else{
        $package_id=$_POST['package_id'];
    }
    
    if(empty($_POST['packagelist_name']))
    {
        echo "Packagelist Name must be required";
    }
    else {
        $packagelist_name=$_POST['packagelist_name'];
    }
    
    if (empty($_POST['duration'])) {
        echo "Start Date must be required";   
    }
    else{
        $duration=$_POST['duration'];
    }
    
    if (empty($_POST['packagelist_price'])) {
        echo "Package Price must be required";
    }
    else{
        $packagelist_price=$_POST['packagelist_price'];
    }
    
    if (empty($_FILES['packagelist_image']['name'])) {
        echo "Package Image must be required";
    }
    else {
        $packagelist_image=$_FILES['packagelist_image']['name'];
    }
    
$insertquery="insert into packagelist (packagelist_name,duration,packagelist_price,package_id) values ('$packagelist_name','$duration','$packagelist_price','$package_id')";
$db->exec($insertquery);
$id=$db->lastInsertId();
echo $id;
$pos=strpos(basename($packagelist_image), ".");
$ext=substr($packagelist_image, $pos);
$realfilename=$id.$ext;
$dirname="package/$realfilename";

$updatequery="update packagelist set packagelist_image='$realfilename' where packagelist_id='$id' ";
$db->exec($updatequery);

move_uploaded_file($_FILES['packagelist_image']['tmp_name'], $dirname);

}
?>