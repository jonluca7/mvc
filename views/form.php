<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="<?php echo BASE_URL.'/profile'?>"  method="post">
      
      <label for="email">Adresse E-mail: </label><br>
      <input type="email" name="email" required><br><br>

      <label for="password">Mot de Passe: </label><br>
      <input type="password" name="password"  required><br><br>

      <input type="button" value="Login">

    </form>
</body>
</html>