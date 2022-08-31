<?php
include 'connect.php';
$i=$_GET['chotel_id'];
$deletequery="delete from customize_hotel where chotel_id='$i'";
$db->exec($deletequery);

header("Location:view_chotel.php");

?>