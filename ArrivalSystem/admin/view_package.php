<?php
include 'header.php';
?>

<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<h2 align="center" style="line-height: 50px;">View All Package Lists</h2>
			<table class="table">
			
				<tr>
					<th>No</th>
					<th>Type</th>
					<th>Image</th>
					<th>Description</th>
					<th>update</th>
					<th>Delete</th> 
				</tr>
				
				<?php 
				$viewquery="select * from package";
				$i=1;
				foreach ($db->query($viewquery) as $row)
				{
				    $package_id=$row['package_id'];
				    $package_type=$row['package_type'];
				    $package_image=$row['package_image'];
				    $package_desc=$row['package_desc'];
				    
				    echo "<tr>";
				    echo "<td>$i</td>";
				    echo "<td>$package_type</td>";
				    echo "<td><img src='package/$package_image' width='40px' height='40px'></td>";
				    echo "<td>$package_desc</td>";
				    echo "<td><a href='update_package.php?package_id=$package_id'><i class='fa fa-edit' style='font-size:24px'></i></a></td>";
				    echo "<td><a href='delete_package.php?package_id=$package_id&package_image=$package_image'><i class='fa fa-remove' style='font-size:24px'></i></a></td>";
				    
			
				    echo "</tr>";
				    $i++;
				}
				?>
				
			</table>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>





























