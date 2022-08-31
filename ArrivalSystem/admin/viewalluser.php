<?php
session_start();
error_reporting(0);
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 style="text-align: center;font-family:Herr Von Muellerhoff; color: #b48c80;">View All User Table</h2>
  <table class="table">
				<tr>
					<th>No</th>
					<th>UserName</th>
					<th>NRC</th>
					<th>Email</th>
					<th>PhoneNo.</th>
					<th>Address</th>
				</tr>
				
			<?php 
				$viewquery="select * from tbl_user";
				$i=1;
				foreach ($db->query($viewquery) as $row)
				{
				    $u_ID=$row['u_ID'];
				    $u_Name=$row['u_Name'];
				    $u_NRC=$row['u_NRC'];
				    $u_Email=$row['u_Email'];
				    $u_Phno=$row['u_Phno'];
				    $u_Address=$row['u_Address'];
				    
				    echo "<tr>";
				    echo "<td>$i</td>";
				    echo "<td>$u_Name</td>";
				    echo "<td>$u_NRC</td>";
				    echo "<td>$u_Email</td>";
				    echo "<td>$u_Phno</td>";
				    echo "<td>$u_Address</td>";
			
				    echo "</tr>";
				    $i++;
				}
				?>
			</table>
</div>

</body>
</html>
