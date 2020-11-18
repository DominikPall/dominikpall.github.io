<?php 

$serverName = "localhost";
$dBUUsername = "root";
$dBPassword = "";
$dBName = "vaiitest1";

$conn = mysqli_connect($serverName, $dBUUsername, $dBPassword, $dBName);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}