<!DOCTYPE html>
<html>
  <head>
    <title> Studentchatten </title>
    <link rel="stylesheet" href="assets/css/main.css" type="text/css" />
    <script type="text/javascript" src="assets/js/main.js"></script>
  </head>
  <body>
  <div class='login'>
    <form name="loginform" method="POST" id="loginform" onsubmit="return LogInValidate()" action="login-process.php">
        <label for="username"> Email </label><br/>
        <input type="text" id="Email" name="Email"><br/>
        <label for="Password"> Password </label><br/>
        <input type="Password" id="Password" name="Password"><br/><br/>
        <input type="submit" value="Logga in" id="skicka">
    </form>
    <form name="registrationbutton" action="register.php">
        <input type="submit" value="Registrera dig!" id="registrationbutton">
    </form>
  </div>
  </body>
</html>
