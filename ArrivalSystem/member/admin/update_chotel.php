<?php
include 'header.php';
$i=$_GET['chotel_id'];
$viewquery="select * from customize_hotel where chotel_id='$i'";
foreach ($db->query($viewquery) as $row)
{
    $chotel_name=$row['chotel_name'];
    
}
?>

<div class="container">
	<h2 align="center">Update Customize Hotel for Customize Form</h2>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
		<form action="" method="post">
		Enter New Customize Hotel Name
		<div class="form-group">
		<input type="text" name="chotel_name" class="form-control" value="<?php echo $chotel_name;?>">
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
    $chotel_name=$_POST['chotel_name'];
    
        $updatequery="update customize_hotel set chotel_name='$chotel_name' where chotel_id='$i'";
        $db->exec($updatequery);
        header("Location:view_chotel.php");

}
?>