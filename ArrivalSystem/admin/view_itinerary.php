<?php
include 'header.php';
?>

<div class="container">
	<h2 align="center">View PackageList Form</h2>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form action="" method="post">
				<div class="form-group">
					<select name="package_id">
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
    if($_POST['package_id']=="----Please Select----")
    {
        echo "Please Select Package Type";
    }
    else {
        $package_id=$_POST['package_id'];
        $v="select * from packagelist where package_id='$package_id'";
        
        echo "<table class='table'>";
        echo "<tr>";
        echo "<td>Package Name</td>";
        echo "<td>Package Image</td>";
        echo "<td>Duration</td>";
        echo "<td>Price</td>";
        echo "<td>Update</td>";
        echo "<td>Delete</td>";
        echo "</tr>";
        
        foreach ($db->query($v) as $row)
        {
            $packagelist_id=$row['packagelist_id'];
            $packagelist_name=$row['packagelist_name'];
            $duration=$row['duration'];
            $packagelist_price=$row['packagelist_price'];
            $packagelist_image=$row['packagelist_image'];
            $realfile="package/$packagelist_image";
            echo "<tr>";
            echo "<td>$packagelist_name</td>";
            echo "<td><img src='$realfile' width='200px' height='200px'></td>";
            echo "<td>$duration</td>";
            echo "<td>$packagelist_price</td>";
            echo "<td><a href='update_packagelist.php?packagelist_id=$packagelist_id'><i class='fa fa-edit' style='font-size:24px'></i></a></td>";
            echo "<td><a href='delete_packagelist.php?packagelist_id=$packagelist_id&packagelist_image=$packagelist_image'><i class='fa fa-remove' style='font-size:24px'></i></a></td>";            
            echo "</tr>";
        }
        echo "</table>";
    }
}
?>