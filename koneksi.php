<?php

$servername ="localhost"; //host server
$username ="root"; //user login phpMyAdmin
$password =""; //pass login phpMyAdmin
$dbname ="form"; //nama database
$koneksi = mysqli_connect($servername, $username, $password, $dbname) or die ("Koneksi gagal");
mysqli_select_db ($koneksi,$dbname) or die(mysqli_error());

?>