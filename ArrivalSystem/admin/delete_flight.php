<?php
include 'connect.php';
$i=$_GET['flight_id'];
$image=$_GET['flight_image'];
$deletequery="delete from tbl_flight where flight_id='$i'";
$db->exec($deletequery);

unlink("flight/$image");

header("Location:view_flight.php");

?>