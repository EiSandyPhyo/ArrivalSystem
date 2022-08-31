<?php
include 'header.php';
$i=$_GET['cregion_id'];
$viewquery="select * from customize_region where cregion_id='$i'";
foreach ($db->query($viewquery) as $row)
{
    $cregion_name=$row['cregion_name'];
    
}
?>
<div class="container">
	<div class="row">
	
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<form action="" method="post" enctype="multipart/form-data">
		<h2 align="center">Update Customize Region for Customize Form</h2>
		
		Enter New Customize Region Name
		<div class="form-group">
			<input type="text" class="form-control" name="cregion_name" value="<?php echo $cregion_name;?>">
		</div>
		
		<div class="form-group">
			<input type="submit" class="form-control" name="update" value="Update">
		</div>
		</form>
	</div>
	<div class="col-md-3"></div>
	
	</div>
</div>

<?php 
if (isset($_POST['update'])) {
    $cregion_name=$_POST['cregion_name'];
   
        $updatequery="update customize_region set cregion_name='$cregion_name' where cregion_id='$i'";
        $db->exec($updatequery);
        header("Location:view_cregion.php");
 
}
?>