<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$db = "arvy_capital";

$conn = new mysqli($dbServername,$dbUsername, $dbPassword , $db ); 
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>



