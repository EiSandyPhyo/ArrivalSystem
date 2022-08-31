<?php
include 'header.php';
?>

<div class="container">
	<h2 align="center">Inert Customize Hotel for Customize Form</h2>
	<form action="" method="post" enctype="multipart/form-data">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-4">
			<div class="form-group">
			<select name="cregion_id" class="form-control">
			<option>----Please Select----</option>
				<?php 
				$viewquery="select * from customize_region";
				foreach ($db->query($viewquery) as $row)
				{
				    $cregion_id=$row['cregion_id'];
				    $cregion_name=$row['cregion_name'];
				    echo "<option value='$cregion_id'>$cregion_name</option>";
				}
				?>
			</select>
			</div>
		</div>
		<div class="col-md-4">
		Enter Customize Hotel Name
		<div class="form-group">
		<input type="text" name=chotel_name class="form-control">
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
    if ($_POST['cregion_id']=="----Please Select----")
    {
        echo "Please choose Region Name";
    }
    else{
        $cregion_id=$_POST['cregion_id'];
    }
    
    if(empty($_POST['chotel_name']))
    {
        echo "Customize Region Name must be required";
    }
    else {
        $chotel_name=$_POST['chotel_name'];
    }
    
$insertquery="insert into customize_hotel (chotel_name,cregion_id) values ('$chotel_name','$cregion_id')";
$db->exec($insertquery);
}
?>