<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HalfControl</title>
  <link href="css_visuals/GSSheet.css" rel="stylesheet" type="text/css">
  <link href="css_visuals/W3Sheet.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu+Condensed" rel="stylesheet"> 
</head>
<body>
<div class="heading">Half<p class="headingLog">Control</p></div>
 <form action="db/confirmlog.php" class="form" method="post" onsubmit="return validarLog(this);" >
  <h1 class="formTitle">Iniciar Sesión</h1>
  <input type="" class="formInput" name="idproductB" id="idproductB" required>
  <label for="" class="formLabel">ID Producto</label>
    <input type="text" class="formInput" name="usernameB" id="usernameB" required>
    <label for="" class="formLabel">Usuario</label>
      <input type="password" class="formInput" name="userpassB" id="userpassB" required>
      <label for="" class="formLabel">Contraseña</label>
        <input type="submit" value="Entrar" name="userSubmit" class="formSubmit" id="formSubmit">
         <p>¿No tiene cuenta? <a class="estiloA2" href="registro.php">Registrese</a>.</p>
 </form>  
<script src="js/form.js"></script>
<script src="js/validar.js"></script>
</body>
</html>