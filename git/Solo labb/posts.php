<?php
session_start();
if(!isset($_SESSION['loggedin']))
{
  header('Location:login.php');
}
else {
  $username = $_SESSION['Email'];
}
 include 'Connect.php';
?>


<!DOCTYPE html>
<html>
<head>
  <title> Medelanden </title>
  <link rel="stylesheet" href="css/main.css" type="text/css" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>

  <div class="footer">
    <div class="chatbox">
      <div class="chatlogs">

        <?php
        include 'Connect.php';



        $sql = "SELECT * FROM messages WHERE ()";

        $result = $conn->query($sql);

        if ($result ->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            ?>
            <div class="chat receiver">
              <div class="user-Name"><?php echo $row[''] ?></div>
              <p class="chat-message"><?php echo $row['']  ?></p>
            </div>

            <?php
          }
        } else {echo "0 messages";}
        ?>

        </div>
      </div>






      <form name="Skicka" method="POST" onsubmit="" action="posts-create.php">
        <textarea id="message" name="message" rows="10" cols="40">Skriv ditt meddelande!</textarea>
        <textarea id="kontakt" name="kontakt" rows="1" cols="25"> skriv kontakt här! </textarea>
        <input type="submit" value="skicka" id="skicka">
      </form>
    </div>



  </body>
  </html>
