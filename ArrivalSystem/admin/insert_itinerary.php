<?php 
include 'header.php';
?>

<div class="container">
	<h2 align="center">Inert Itinerary Form</h2>
	<form action="" method="post" enctype="multipart/form-data">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-4">
			<div class="form-group">
			<select name="packagelist_id" class="form-control">
			<option>----Please Select----</option>
				<?php 
				$viewquery="select * from packagelist";
				foreach ($db->query($viewquery) as $row)
				{
				    $packagelist_id=$row['packagelist_id'];
				    $packagelist_name=$row['packagelist_name'];
				    echo "<option value='$packagelist_id'>$packagelist_name</option>";
				}
				?>
			</select>
			</div>
		</div>
		<div class="col-md-4">
		Enter Itinerary Description
		<div class="form-group">
		<textarea rows="5" cols="30" class="form-control" name="iti_desc"></textarea>
		</div>
		
		<div class="form-group">
		Choose Itinerary Image
		<input type="file" name="iti_image" class="form-control">
		</div>
		
		<div class="form-group">
		<input type="submit" name="insert" value="Insert" class="form-control">
		</div>
		
		</div>
		<div class="col-md-2"></div>
	</div>
	</form>
</div>

<?php 
if(isset($_POST['insert']))
{
    if ($_POST['packagelist_id']=="----Please Select----")
    {
        echo "Please choose PackageList Name";
    }
    else{
        $packagelist_id=$_POST['packagelist_id'];
    }
    
    if(empty($_POST['iti_desc']))
    {
        echo "Itinerary Name must be required";
    }
    else {
        $iti_desc=$_POST['iti_desc'];
    }
    
    
    
    if (empty($_FILES['iti_image']['name'])) {
        echo "Itinerary Image must be required";
    }
    else {
        $iti_image=$_FILES['iti_image']['name'];
    }
    
//     if (empty($_FILES['image_two']['name'])) {
//         echo "Itinerary Image must be required";
//     }
//     else {
//         $image_two=$_FILES['image_two']['name'];
//     }
    
//     if (empty($_FILES['image_three']['name'])) {
//         echo "Itinerary Image must be required";
//     }
//     else {
//         $image_three=$_FILES['image_three']['name'];
//     }
    
//     if (empty($_FILES['image_four']['name'])) {
//         echo "Itinerary Image must be required";
//     }
//     else {
//         $image_four=$_FILES['image_four']['name'];
//     }
    
$insertquery="insert into tbl_itinerary (iti_desc, iti_image, packagelist_id) values ('$iti_desc','','$packagelist_id')";
$db->exec($insertquery);

$id=$db->lastInsertId();
echo $id;

$pos=strpos(basename($iti_image), ".");
$ext=substr($iti_image, $pos);
$iti_image=$id.$ext;
$dirname="itinerary/$iti_image";

$updatequery="update tbl_itinerary set iti_image='$iti_image' where iti_id='$id' ";
$db->exec($updatequery);

move_uploaded_file($_FILES['iti_image']['tmp_name'], $dirname);

}
?>








