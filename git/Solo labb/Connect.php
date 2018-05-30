<?php

$uname = "root";
$pass = "";
$host = "localhost";
$dbname = "sololabb";

$conn = mysqli_connect ($host, $uname, $pass, $dbname);

if (!$conn) {
  die( "Misslyckad connection: " . mysqli_connect_error());
}
?>
