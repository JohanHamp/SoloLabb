<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <link rel="stylesheet" href="css/main.css" type="text/css" />
  </head>
  <body>
    <?php
    include 'Connect.php';

    $Email = mysqli_real_escape_string($conn, $_POST['Email']);
    $Password = mysqli_real_escape_string($conn, $_POST['Password']);


    $sql = "INSERT INTO user (Email, Password) VALUES ('".$Email."', '".$Password."')";

    $alreadyuser="SELECT * FROM user WHERE Email='$Email'";
    $ifuser= mysqli_query($conn, $alreadyuser) or die("Bad SQL: $ifuser" );

    if(mysqli_num_rows($ifuser)>=1)
       {
         echo "<h1> Du är redan registrerad med den epost:en! </h1>";
         echo '<div>
                             <form action="login.php">
                             <input type="submit" value="Logga in! " id= "redirect" />
                             </form></div>';
       }
       else if ($conn->query($sql) === TRUE)
            {
              echo "<h1> Tack! Du är nu registrerad. </h1>";
              echo '<div>
                                  <form action="login.php">
                                  <input type="submit" value="Logga in! " id= "redirect" />
                                  </form></div>';

            } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
              echo "<h1> Registrationen misslyckades. Var vänlig försök igen!</h1>";
            }
    ?>

  </body>
</html>
