<!DOCTYPE html>
<html>
  <head>
    <title> Registrera dig! </title>
    <link rel="stylesheet" href="css/main.css" type="text/css" />
    <script type="text/javascript" src="assets/js/main.js"></script>
  </head>
  <body>
    <h1> Registrera dig </h1>
    <div class="rewards">
    <form name="registration" method="POST" id="registerform" onsubmit="return RegisterValidate()" action="register-process.php">
        <label for="Email"> E-postadress: </label><br/>
        <input type="text" id="Email" name="Email"><br/>
        <label for="Password"> Lösenord </label><br/>
        <input type="Password" id="Password" name="Password"><br/><br/>
        <input type="submit" value="Registrera dig!" id="skicka">
    </form>
  </body>
</html>
