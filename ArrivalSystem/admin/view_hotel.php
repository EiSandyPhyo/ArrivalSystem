<?php 
include 'header.php';
?>

<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
<!-- 			<h2 align="center">View All Hotel List</h2> -->
			 <h2 style="text-align: center;font-family:Herr Von Muellerhoff; color: #b48c80;">View All Hotel Lists</h2>
			<table class="table">
				<tr>
					<th>No</th>
					<th>Hotel Name</th>
					<th>Hotel Image</th>
					<th>Hotel Price</th>
					<th>Hotel Location</th>
					<th>Hotel Phone</th>
					<th>Hotel Email</th>
					<th>Update</th>
					<th>Delete</th>
				</tr>
				
			<?php 
				$viewquery="select * from tbl_hotel";
				$i=1;
				foreach ($db->query($viewquery) as $row)
				{
				    $hotel_id=$row['hotel_id'];
				    $hotel_name=$row['hotel_name'];
				    $hotel_image=$row['hotel_image'];
				    $hotel_price=$row['hotel_price'];
				    $hotel_location=$row['hotel_location'];
				    $hotel_phone=$row['hotel_phone'];
				    $hotel_email=$row['hotel_email'];
				    
				    echo "<tr>";
				    echo "<td>$i</td>";
				    echo "<td>$hotel_name</td>";
				    echo "<td><img src='hotel/$hotel_image' width='40px' height='40px'></td>";
				    echo "<td>$hotel_price</td>";
				    echo "<td>$hotel_location</td>";
				    echo "<td>$hotel_phone</td>";
				    echo "<td>$hotel_email</td>";
				    echo "<td><a href='update_hotel.php?hotel_id=$hotel_id'>
                    <i class='fa fa-edit' style='font-size:24px'></i></a></td>";
				    echo "<td><a href='delete_hotel.php?hotel_id=$hotel_id&hotel_image=$hotel_image'><i class='fa fa-remove' style='font-size:24px'></i></a></td>";
				    
			
				    echo "</tr>";
				    $i++;
				}
				?>
			</table>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>

