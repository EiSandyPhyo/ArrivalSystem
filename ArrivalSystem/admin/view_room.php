<?php 
include 'header.php';
?>

<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<h2 align="center">View Room Form</h2>
			<table class="table">
				<tr>
					<th>No</th>
					<th>Room Name</th>
					<th>Room Price</th>
					<th>Update</th>
					<th>Delete</th>
				</tr>
				
				<?php 
				$viewquery="select * from tbl_room";
				$i=1;
				foreach ($db->query($viewquery) as $row)
				{
				    $r_ID=$row['r_ID'];
				    $r_type=$row['r_type'];
				    $r_price=$row['r_price'];
				    
				    echo "<tr>";
				    echo "<td>$i</td>";
				    echo "<td>$r_type</td>";
				    echo "<td>$r_price</td>";
				    echo "<td><a href='update_room.php?r_ID=$r_ID'><i class='fa fa-edit' style='font-size:24px'></i></a></td>";
				    echo "<td><a href='delete_room.php?r_ID=$r_ID'><i class='fa fa-remove' style='font-size:24px'></i></a></td>";
			
				    echo "</tr>";
				    $i++;
				}
				?>
			</table>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>