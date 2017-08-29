  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>HalfControl - Bienvenido</title>
  <link href="../css_visuals/GSSheet.css" rel="stylesheet" type="text/css">
  <link href="../css_visuals/W3Sheet.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu+Condensed" rel="stylesheet"> 
</head>
<body>
<div class="heading">Half<p class="headingLog">Control</p></div>   
<?php
//validateRegister
include 'cn.php';
$idproduct = $_POST["idproductA"];
$username = $_POST["usernameA"];
$userpass = $_POST["userpassA"];
$company = $_POST["companyA"];
$email = $_POST["emailA"];
$validIdProduct = mysqli_query($link, "SELECT * FROM user WHERE idproduct = '$idproduct'");
$validEmail = mysqli_query($link, "SELECT * FROM user WHERE email = '$email'");
$validUser = mysqli_query($link, "SELECT * FROM user WHERE username = '$username'");
    if (mysqli_num_rows($validUser) > 0) {
        echo '<div class="form w3-center">  
            <h1 id="line">Usuario ya registrado, intente con otro.</h1>
            <br>
            <a href="../registro.php" class="estiloA2 gotolog"><b>Volver al registro</b>.</a>
             </div> ';
            exit;
    } else if (mysqli_num_rows($validEmail) > 0) {
        echo '<div class="form w3-center">  
            <h1 id="line">Dirección de correo ya en un uso, intente con otra.</h1>
            <br>
            <a href="../registro.php" class="estiloA2 gotolog"><b>Volver al registro</b>.</a>
             </div> ';
            exit;
    } else if (mysqli_num_rows($validIdProduct) > 0) {
             echo '<div class="form w3-center">  
            <h1 id="line">ID del producto ya registrada, inserte una valida.</h1>
            <h1 id="line"><b>Ayuda:</b> Busque en la parte trasera de su unidad.</h1>
            <br>
            <a href="../registro.php" class="estiloA2 gotolog"><b>Volver al registro</b>.</a>
             </div> ';
            exit;
    } else {
        echo '<div class="form w3-center">  
            <h1 id="line">Bienvenido al mundo de la automatización.</h1>
            <h2 id="line">Ahora se encuentra registrado en <b>Half</b><b>Control</b>.</h2>
            <br>
            <a href="../index.php" class="estiloA2 gotolog"><b>Iniciar sesión</b></a>
             </div> ';
    }
 //Insert info in user   
$consulta = "INSERT INTO user(idproduct, username, userpass, company, email) VALUES ('$idproduct', '$username', '$userpass', '$company', '$email')";
$putConsulta = mysqli_query($link,$consulta);
//if (!$putConsulta) {
//	echo '<h1>No</h1>';
//} else {
//	echo 'Si';
//}
mysqli_close($link);
?>
    </body>
</html>