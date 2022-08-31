<?php
include 'header.php';
?>
<div class="container">
	<div class="row">
	
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<form action="" method="post" enctype="multipart/form-data">
		<h2 align="center">Insert Region for Customize Form</h2>
		
		Enter Region Name For Customize From
		<div class="form-group">
			<input type="text" class="form-control" name="cregion_name">
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
        $cregion_name=$_POST['cregion_name'];
        
      
        $insertquery="insert into customize_region (cregion_name) values ('$cregion_name')";
        $db -> exec($insertquery); //to insert database
        
    }
?>