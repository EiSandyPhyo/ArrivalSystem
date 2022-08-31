<?php 
include 'header.php';
?>

<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<h2 align="center">View All Flight List</h2>
			<table class="table">
				<tr>
					<th>No</th>
					<th>Flight Name</th>
					<th>Flight Image</th>
					<th>Flight Price</th>
					<th>Flight Phone</th>
					<th>Flight Number</th>
					<th>Update</th>
					<th>Delete</th>
				</tr>
				
			<?php 
				$viewquery="select * from tbl_flight";
				$i=1;
				foreach ($db->query($viewquery) as $row)
				{
				    $flight_id=$row['flight_id'];
				    $flight_name=$row['flight_name'];
				    $flight_image=$row['flight_image'];
				    $flight_price=$row['flight_price'];
				    $flight_phone=$row['flight_phone'];
				    $flight_number=$row['flight_number'];
				    
				    echo "<tr>";
				    echo "<td>$i</td>";
				    echo "<td>$flight_name</td>";
				    echo "<td><img src='flight/$flight_image' width='40px' height='40px'></td>";
				    echo "<td>$flight_price</td>";
				    echo "<td>$flight_phone</td>";
				    echo "<td>$flight_number</td>";
				    echo "<td><a href='update_flight.php?flight_id=$flight_id'><i class='fa fa-edit' style='font-size:24px'></i></a></td>";
				    echo "<td><a href='delete_flight.php?flight_id=$flight_id&flight_image=$flight_image'><i class='fa fa-remove' style='font-size:24px'></i></a></td>";
	
				    echo "</tr>";
				    $i++;
				}
				?>
			</table>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>

