<?php
include 'connect.php';
$i=$_GET['package_id'];
$image=$_GET['package_image'];
$deletequery="delete from package where package_id='$i'";
$db->exec($deletequery);

unlink("package/$image");

header("Location:view_package.php");

?>


