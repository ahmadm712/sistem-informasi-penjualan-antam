<?php 
// koneksi ke mysqli
$servername = "localhost";
$username = "root";
$password = "";
$db = "antam";
// Create connection
$koneksi = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$koneksi) {
die("Connection failed: " . mysqli_connect_error());
}
?>