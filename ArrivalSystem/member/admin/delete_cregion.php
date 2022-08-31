<?php
include 'connect.php';
$i=$_GET['cregion_id'];
$deletequery="delete from customize_region where cregion_id='$i'";
$db->exec($deletequery);

header("Location:view_cregion.php");

?>