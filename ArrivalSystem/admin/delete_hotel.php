<?php
include 'connect.php';
$i=$_GET['hotel_id'];
$image=$_GET['hotel_image'];
$deletequery="delete from tbl_hotel where hotel_id='$i'";
$db->exec($deletequery);

unlink("hotel/$image");

header("Location:view_hotel.php");

?>