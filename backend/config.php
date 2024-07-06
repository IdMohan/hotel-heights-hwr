<?php

$host = "localhost";
$name = "root";
$pass = '';
$database = "hth_db";

// $conn = ("$host, $name, $pass, $database");

$conn =  mysqli_connect($host, $name, $pass, $database);

// if(!$conn){
//     echo ("Data Base not Connected Successfully" .  mysqli_connect_error());
// }else{
//     echo ("Data Base Connected Successfully");
// }
 

?>