<?php 
    include 'header.php';
?>
<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
		
		<form action="" method="post" enctype="multipart/form-data" style="line-height: 30px;">
			<h2 align="center" style="line-height: 50px;">Insert Package Form</h2>
				Enter Package Type
				<div class="form-group">
					<input type="text" class="form-control" name="package_type">
				</div>
				Enter Package Image
				<div class="form-group">
					<input type="file" class="form-control" name="package_image">
				</div>
				
				Enter Package Description
				<div class="form-group">
					<textarea rows="5" cols="30" class="form-control" name="package_description"></textarea>
				</div>
				<div class="form-group">
				<div class="row">
				<div class="col-md-5"></div>
				<div class="col-md-2">
				<input type="submit" class="form-control" name="insert" value="Insert">
				</div>
				<div class="col-md-5"></div>
				</div>	
				</div>
			</form>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>


<?php 
    if (isset($_POST['insert'])) {
        
        $package_type=$_POST['package_type'];
        $package_image=$_FILES['package_image']['name'];
        $package_desc=$_POST['package_description'];
        
        $insertquery="insert into package (package_type,package_image,package_desc) values ('$package_type','', '$package_desc')";
        $db -> exec($insertquery); //to insert database
        
        $i = $db->lastInsertId();
        
        $dot_pos=strpos(basename($package_image), ".");
        
        $file_extension=substr($package_image, $dot_pos);
        
        $realfilename=$i.$file_extension;
        
        $dirname="package/$realfilename";
        
        
        $updatequery="update package set package_image='$realfilename' where package_id='$i' ";
        $db->query($updatequery);
        
        move_uploaded_file($_FILES['package_image']['tmp_name'], $dirname);
        
    }
?>


































