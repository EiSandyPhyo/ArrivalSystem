<?php
$servername="localhost";
$username="root";
$password="root";
$dbname="tourismmanagementsystemm";

try {
    $db=new PDO("mysql:host=$servername;dbname=$dbname", $username,$password); //creating object
//     echo "Connection Success";
} 
catch (Exception $e) 
{
    echo "Connection Fail";
    echo "<br>";
    $e ->getMessage();
}
?>



