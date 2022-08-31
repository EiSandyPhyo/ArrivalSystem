<?php 
include 'header.php';
?>

<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<h2 align="center">View Customize Region for Customize Form</h2>
			<table class="table">
				<tr>
					<th>No</th>
					<th>Customize Region Name</th>
					<th>Update</th>
					<th>Delete</th>
				</tr>
				
				<?php 
				$viewquery="select * from customize_region";
				$i=1;
				foreach ($db->query($viewquery) as $row)
				{
				    $cregion_id=$row['cregion_id'];
				    $cregion_name=$row['cregion_name'];
				    
				    echo "<tr>";
				    echo "<td>$i</td>";
				    echo "<td>$cregion_name</td>";
				    echo "<td><a href='update_cregion.php?cregion_id=$cregion_id'><i class='fa fa-edit' style='font-size:24px'></i></a></td>";
				    echo "<td><a href='delete_cregion.php?cregion_id=$cregion_id'><i class='fa fa-remove' style='font-size:24px'></i></a></td>";
			
				    echo "</tr>";
				    $i++;
				}
				?>
			</table>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>