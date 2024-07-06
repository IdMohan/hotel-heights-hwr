<?php

include 'config.php';
session_start();

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['nubmer'];
    $mesg = $_POST['message'];
}


$insert = "INSERT INTO `hth-table1` (`name`, `email`, `number`, `message`) VALUES ('$name', '$email', '$number', '$mesg')";

$query =  mysqli_query($conn, $insert);
if ($query) {
    header('location:../index.php');
} else {
    echo 'your data is not submit';
}

?> 