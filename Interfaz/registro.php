<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HalfControl - Registro</title>
  <link href="css_visuals/GSSheet.css" rel="stylesheet" type="text/css">
  <link href="css_visuals/W3Sheer.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu+Condensed" rel="stylesheet"> 
</head>
<body>
<div class="heading">Half<p class="headingLog">Control</p></div>

<form action="db/register.php" class="form" method="post" onsubmit="return validarReg();">
  <h1 class="formTitle">Registrarse</h1>
  <input type="" class="formInput" name="idproductA" id="idproduct" required>
  <label for="" class="formLabel">ID Producto</label>
   <input type="" class="formInput" name="companyA" id="company" required>
   <label for="" class="formLabel">Empresa/Organización</label>
  <input type="text" class="formInput" name="emailA" id="email" required>
   <label for="" class="formLabel">Email</label>
    <input type="text" class="formInput" name="usernameA" id="username" required>
    <label for="" class="formLabel">Usuario</label>
      <input type="password" class="formInput" name="userpassA" id="userpass" required>
      <label for="" class="formLabel">Contraseña</label>
          <input type="password" class="formInput" name="userpassconfirm" id="userpassconfirm" required>
      <label for="" class="formLabel">Repetir Contraseña</label> 
        <input type="submit" value="Registrarse" name="userSubmit" class="formSubmit" id="formSubmit">
        <p>¿Ya tiene cuenta? <a class="estiloA2" href="index.php">Inicie sesión</a>.</p>
 </form>
<script src="js/validar.js"></script>
<script src="js/form.js"></script>

</body>
</html>