<html>
    <head>
<meta charset="UTF-8">
<title>HalfControl - Ya falta poco..</title>
<link href="../css_visuals/GSSheet.css" rel="stylesheet" type="text/css">
<link href="../css_visuals/W3Sheet.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu+Condensed" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
  <body class="w3-display-container" style="margin: auto;padding: auto;">      
    <div class="w3-display-middle fa fa-spinner fa-spin w3-animate-left" style="font-size: 100px;"></div>
    <i style="text-align:center;"><h1>Cargando</h1></i>
<!--validate_db_log/Redirect--> 
<script type="text/javascript">
  function redirection(){  
    window.location ="http://localhost/halfControl/home/home.php";
}  setTimeout ("redirection()", 3000); 
</script>
<?php
//validateRegister
include 'cn.php';
$idproduct = $_POST["idproductB"];
$username = $_POST["usernameB"];
$userpass = $_POST["userpassB"];
$vldidproduct = mysqli_query($link, "SELECT * FROM user WHERE idproduct = '$idproduct'");
$vlduser = mysqli_query($link, "SELECT * FROM user WHERE username = '$username'");
$vldpass = mysqli_query($link, "SELECT * FROM user WHERE userpass = '$userpass'");
if(mysqli_num_rows($vldidproduct) > 0 && mysqli_num_rows($vlduser) > 0 && mysqli_num_rows($vldpass) > 0) {
       
  } else {
      header ("Location: http://localhost/halfControl/index.php");
  }
    
?>
 </body>
</html>
