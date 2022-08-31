<?php
include 'header.php';
?>
<div class="container">
	<div class="row">
	
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<form action="" method="post" enctype="multipart/form-data">
		<h2 align="center">Insert Room</h2>
		
		Enter Room Type
		<div class="form-group">
			<input type="text" class="form-control" name="room_type">
		</div>
		
		Enter Room Price
		<div class="form-group">
			<input type="text" class="form-control" name="room_price">
		</div>

		
		<div class="form-group">
			<input type="submit" class="form-control" name="insert" value="Insert">
		</div>
		</form>
	</div>
	<div class="col-md-3"></div>
	
	</div>
</div>

<?php 
    if (isset($_POST['insert'])) {
        $room_type=$_POST['room_type'];
        $room_price=$_POST['room_price'];
        
      
        $insertquery="insert into tbl_room (r_type, r_price) values ('$room_type', '$room_price')";
        $db -> exec($insertquery); //to insert database
        
    }
?>