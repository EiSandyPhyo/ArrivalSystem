<?php
$servername="localhost";
$username="root";
$password="root";
$dbname="tourismmanagementsystemm";

try {
    $db=new PDO("mysql:host=$servername;dbname=$dbname", $username,$password); //creating object
//     echo "Connction Success";
} 
catch (Exception $e) 
{
    echo "Connction Fail";
    echo "<br>";
    $e ->getMessage();
}
?>

