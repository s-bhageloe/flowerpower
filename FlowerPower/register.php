<?php

?>

<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    .form-signin-heading {
  border-radius: 25px;
  font-family: cursive;
  color: #FFFFFF;
  text-shadow:
    -1px -1px 0 #000,  
     1px -1px 0 #000,
    -1px  1px 0 #000,
     1px  1px 0 #000;
}
</style>
</head>
<body>
  <div class="registerStyle">
    <form method="POST" class="loginForm">       
      <h2 class="form-signin-heading">Registreren</h2>

      <input type="text" class="formRegister" name="voorletter" placeholder="Voorletter" maxlength="1" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" required autofocus/><br><br>

      <input type="text" class="formRegister" name="tussenvoegsel" placeholder="Tussenvoegsel" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" /><br><br>

      <input type="text" class="formRegister" name="achternaam" placeholder="Achternaam" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" required/><br><br>

      <input type="text" class="formRegister" name="adres" placeholder="Adres" required/><br><br>

      <input type="text" class="formRegister" name="postcode" placeholder="Postcode" required/><br><br>

      <input type="text" class="formRegister" name="woonplaats" placeholder="Woonplaats" required/><br><br>

      <input type="text" class="formRegister" name="geboortedatum" placeholder="Geboortedatum" required/><br><br>

      <input type="text" class="formRegister" name="gebruikersnaam" placeholder="Gebruikersnaam" required /><br><br>

      <input type="password" class="formRegister" name="password" placeholder="Password" required=""/><br><br>

      <button class="button" type="submit">Registreren</button>   
    </form>
  </div>


   
</body>
</html> 