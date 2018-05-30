<?php
include 'connect.php';

$Email = mysqli_real_escape_string($conn, $_POST['Email']);
$Password = mysqli_real_escape_string($conn, $_POST['Password']);

//Query för att kolla om så att personen skriver in rätt epost och lösenord
$sql = "SELECT * FROM user WHERE Email = '$Email' AND Password = '$Password'";
$resultat = mysqli_query($conn, $sql)or die("Bad SQL: $sql");


if(mysqli_num_rows($resultat) > 0){
  echo "Success";
  SESSION_START();
  $_SESSION['loggedin'] = true;
  $_SESSION['Email'] = $Email;
  header('Location: posts.php');
  exit();

}else {
  echo "Fail";
}
 ?>
