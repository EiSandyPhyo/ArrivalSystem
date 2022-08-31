<?php
include 'header.php';
?>

<div class="container">
	<h2 align="center">View Package</h2>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form action="" method="post">
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
					<div class="form-group">
					<input type="submit" name="view" value="View" class="form-control">
					</div>
				</div>
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>


<?php 
if(isset($_POST['view']))
{
    if ($_POST['cregion_id']=="----Please Select----")
    {
        echo "Please choose Region Name";
    }
    else {
        $cregion_id=$_POST['cregion_id'];
        $v="select * from customize_hotel where cregion_id='$cregion_id'";
        
        echo "<table class='table'>";
        echo "<tr>";
        echo "<td>Customize Hotel Name</td>";
        echo "<td>Update</td>";
        echo "<td>Delete</td>";
        echo "</tr>";
        foreach ($db->query($v) as $row)
        {
            $chotel_id=$row['chotel_id'];
            $chotel_name=$row['chotel_name'];
            echo "<tr>";
            echo "<td>$chotel_name</td>";
            echo "<td><a href='update_chotel.php?chotel_id=$chotel_id'><i class='fa fa-edit' style='font-size:24px'></i></a></td>";
            echo "<td><a href='delete_chotel.php?chotel_id=$chotel_id'><i class='fa fa-remove' style='font-size:24px'></i></a></td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}
?>