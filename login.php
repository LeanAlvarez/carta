<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
</head>
<body>

<div class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">Inicio de Sesión</h2>

  <form class="login-container" action="login/loguear.php" method="POST">
    <p><input type="text" name="usuario" placeholder="Usuario"></p>
    <p><input type="password" name="contrasenia" placeholder="Contraseña"></p>
    <p><input type="submit" value="Ingreso"></p>
  </form>
</div>
    
</body>
</html>