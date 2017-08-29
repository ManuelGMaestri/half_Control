<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HalfControl - Editar</title>
  <link href="../../css_visuals/GSSheet.css" rel="stylesheet" type="text/css">
  <link href="../../css_visuals/W3Sheet.css" rel="stylesheet" type="text/css">
  <link href="../../css_visuals/demo.css" rel="stylesheet" type="text/css">
  <link href="../../css_visuals/footer.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu+Condensed" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
</head>
<body>
  <div class="heading"> Half<p class="headingLog">Control</p> <button class="w3-button">Volver</button></div>
  <div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>Editar </h1>
      <h5 class="w3-padding-32">Este es el menu donde vas a poder editar las acciones de tus actuadores, generar condiciones de uso, imponer horarios de activación, etc.
      </h5> 
    </div>
    <div class="w3-third w3-center">
      <i class="fa fa-wrench fa-flip-horizontal w3-padding-64 w3-text-red" style="font-size:200px;"></i>
    </div>
  </div>
</div>
<!--CondicionesSensores-->
 <div class="w3-container">
 <h2>Tabla de condiciones por sensor</h2>
  <h5>La <b>condición por sensor</b> significa que cuando un sensor "X" tenga un valor "X" administrado por el usuario active/desactive uno o varios actuadores. Esto se lo configura individualmente haciendo click en el boton <b>editar</b> del sensor correspondiente.</h5>
 </div>
<div class="w3-responsive">
<table class="w3-table-all w3-hoverable">
<tr class="w3-green">
  <th>Sensor</th>
  <th style="text-align: center;" >Condición</th>
</tr>
<tr>
  <td>Sensor 1</td>
  <td><button class="w3-block">EDITAR</button></td>
</tr>
<tr>
  <td>Sensor 2</td>
  <td><button class="w3-block">EDITAR</button></td>
</tr>
<tr>
  <td>Sensor 3</td>
  <td><button class="w3-block">EDITAR</button></td>
</tr>
<tr>
  <td>Sensor 4</td>
  <td><button class="w3-block">EDITAR</button></td>
</tr>
<tr>
  <td>Sensor 5</td>
  <td><button class="w3-block">EDITAR</button></td>
</tr>
<tr>
  <td>Sensor 6</td>
  <td><button class="w3-block">EDITAR</button></td>
</tr>
</table>
</div>
<!--condicionesClock-->
<br>
<br>

<div class="w3-container">
 <h2>Tabla de condiciones por reloj</h2>
  <h5>La <b>condición por reloj</b> significa que cuando el reloj (reloj real de tu región) de un tiempo especificado active o desactive uno o varios actuadores. Esto se lo configura individualmente haciendo click en el boton <b>editar</b> del actuador correspondiente.</h5>
 </div>
<div class="w3-responsive">
<table class="w3-table-all w3-hoverable">
<tr class="w3-green">
  <th>Actuador</th>
  <th style="text-align: center;" >Condición</th>
</tr>
<tr>
  <td>Actuador 1</td>
  <td><button class="w3-block">EDITAR</button></td>
</tr>
<tr>
  <td>Actuador 2</td>
  <td><button class="w3-block">EDITAR</button></td>
</tr>
<tr>
  <td>Actuador 3</td>
  <td><button class="w3-block">EDITAR</button></td>
</tr>
<tr>
  <td>Actuador 4</td>
  <td><button class="w3-block">EDITAR</button></td>
</tr>
<tr>
  <td>Actuador 5</td>
  <td><button class="w3-block">EDITAR</button></td>
</tr>
<tr>
  <td>Actuador 6</td>
  <td><button class="w3-block">EDITAR</button></td>
</tr>
<tr>
  <td>Actuador 7</td>
  <td><button class="w3-block">EDITAR</button></td>
</tr>
<tr>
  <td>Actuador 8</td>
  <td><button class="w3-block">EDITAR</button></td>
</tr>
</table>
</div>
<div class="w3-container" id="shutdown">
 <h2>Apagado de emergencia</h2>
  <h5>El <b>apagado de emergencia</b> frena todas las acciones que se esten haciendo en el momento, apaga el controlador, 
  y deja de enviar valores al servidor. Se recomienda usar este boton unicamente en casos <b>criticos</b>.</h5> 
<br>
 <div class="w3-row w3-display-container" style="margin-top: 200px;margin-bottom:100px;">
  <div class="w3-third w3-container"></div>
  <div class="w3-third w3-container"><a href=""><i class="fa fa-power-off offStyle w3-display-middle" style="font-size:300px;text-align: center;"></i></a></div>
  <div class="w3-third w3-container"></div>
  </div>
</div>

<!--footer-->
 <footer class="footer-distributed">
      <div class="footer-left">
        <h3>Half<span class="">Control</span></h3>
        <p class="footer-links">
          <a href="#">Home</a>
          ·
          <a href="#">Sobre nosotros</a>
          ·
          <a href="#">Contacto</a>
        </p>
        <p class="footer-company-name">HalfServices &copy; 2016 - 2017</p>
      </div>
      <div class="footer-center">
       <div>
          <i class="fa fa-map-marker"></i>
          <p><span></span> Tandil, Argentina</p>
        </div>
        <div>
          <i class="fa fa-phone"></i>
          <p>+54 2494660399</p>
        </div>
        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:half.web.services@gmail.com">Half.Services@gmail.com</a></p>
        </div>
      </div>
      <div class="footer-right">
        <p class="footer-company-about">
          <span>Sobre la empresa</span>
          Impulsados por los nuevos avances en la informatica, dia a dia innovamos con
          nuevos proyectos y desarrollos orientados a mejorar la calidad de vida.
        </p>
        <div class="footer-icons">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-github"></i></a>
        </div>
      </div>
    </footer>
   </body>
  </html>
