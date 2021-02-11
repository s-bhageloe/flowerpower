<?php

?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Registratie scherm</title>
  </head>

  <body>
  	<form method="post" action='register.php' method='post' accept-charset='UTF-8'>
      <table>
        <h2>Registratie</h2>
        <input type="text" name="username" placeholder="Gebruikersnaam" required/><br>
        <input type="text" name="fname" placeholder="Voornaam" required/><br>
      	<input type="text" name="voorvoegsels" placeholder="Voorvoegsels" /><br>
      	<input type="text" name="lname" placeholder="Achternaam" required/><br/>
        <input type="email" name="email" placeholder="E-mail" required/><br>
        <input type="password" name="pwd" placeholder="Wachtwoord" required/><br>
        <input type="password" name="repeatpwd" placeholder="Herhaal wachtwoord" required/>
        <input type="submit" name='submit' value="Register now!"/>
      </table>
      <a href="index.php">Terug</a>
    </form>
  </body>
</html>