<?php
$hostName="localhost";
$dbUSer="root";
$dbPassword="";
$dbName="login_register";
$conn=mysqli_connect($hostName,$dbUSer,$dbPassword,$dbName);
if (!$conn) {
    die("Something went wrong");
}
?>