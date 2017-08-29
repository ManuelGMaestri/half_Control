<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>HalfControl - Valores en vivo - Mirar</title>
 <link href="../../../css_visuals/GSSheet.css" rel="stylesheet" type="text/css">
 <link href="../../../css_visuals/hover.css" rel="stylesheet" type="text/css">
 <link href="../../../css_visuals/W3Sheet.css" rel="stylesheet" type="text/css">
 <link href="../../../css_visuals/demo.css" rel="stylesheet" type="text/css">
 <link href="../../../css_visuals/footer.css" rel="stylesheet" type="text/css">
 <script src="../../../js/lib/jquery-3.2.1.min.js"></script>
 <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"> 
 <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu+Condensed" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
</head>
<body ondragstart="return false" onselectstart="return false" oncontextmenu="return false" style="background-color: white;">
<a href="../index.php"><div class="w3-animate-opacity heading"> Half<p class="headingLog">Control</p></div></a>
<!--values_conver-->
<div class="w3-row-padding w3-padding-64 w3-container" style="background-color:#1a1a1a;color:white;margin-bottom: 15px;padding-top: 20px;">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>Valores en <b>vivo</b></h1>
      <h5 class="w3-padding-32">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5>
    </div>
    <div class="w3-third w3-center liveAnimate" id="live">
      <i class="fa fa-play w3-padding-64 insideSHW" style="font-size: 150px;"></i>
    </div>
  </div>
</div>  
     <script>
    $(document).ready(function() {
      var loops = 10000;
        function removeAddClass() {
          $("#live").toggleClass("liveAnimate");
          if (--loops > 0)
          setTimeout(removeAddClass, 1000);
    }
  removeAddClass();
});
      </script>
<!--explicacion-->
<div class="w3-row-padding w3-padding-64 w3-container boxGeneral" style="background-color: white;margin-bottom: 20px;">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>Tabla de <b>sensores</b></h1>
      <h5 class="w3-padding-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h5>
    </div>
    <div class="w3-third w3-center">
      <i class="fa fa-temp w3-padding-64 w3-text-red hvr-grow-shadow" style="font-size: 150px;"></i>
    </div>
  </div>
<div class="w3-margin boxGeneral" style="border-radius: 0px 0px 30px 30px;">
  <div class="w3-row">
    <div class="w3-display-container w3-third w3-black " style="height:60px;border-radius: 20px 0px 0px 0px;"><p class="w3-display-middle sensNamesB">Sensores</p></div>
    <div class="w3-display-container w3-third w3-black " style="height:60px;"><p class="w3-display-middle sensNamesB">Valor del sensor</p></div>
    <div class="w3-display-container w3-third w3-black " style="height:60px;border-radius: 0px 20px 0px 0px;"><p class="w3-display-middle sensNamesB">Convertibilidad</p></div>
   </div>
<!--s1-->
 <div class="w3-row">
    <div class="w3-display-container barraSuperior w3-third" style="height:50px;"><p class="w3-display-middle sensNames">Sensor 1</p></div>
    <div class="w3-display-container barraSuperior w3-third" style="height:50px;"><input class="w3-display-middle sensInputs" type="" id="sens1T" readonly></div>
    <div class="w3-display-container barraSuperior w3-third" style="height:50px;">
     <select name="opts" class="w3-display-middle" id="opts" onchange="converSens1();">
      <option value="opt0" id="opt0" selected>Opciones</option>
      <option value="opt1" id="opt1">Temperatura</option>
      <option value="opt2" id="opt2">Humedad</option>
      <option value="opt3" id="opt3">Luminosidad</option>
      <option value="opt4" id="opt4">Proximidad</option>
     </select>
    </div>
   </div>
<!--s2-->
 <div class="w3-row">
    <div class="w3-display-container barraInferior w3-third" style="height:50px;"><p class="w3-display-middle sensNames">Sensor 2</div>
    <div class="w3-display-container barraInferior w3-third" style="height:50px;"><input class="w3-display-middle sensInputs" type="" id="sens2H" readonly></div>
     <div class="w3-display-container barraInferior w3-third" style="height:50px;">
     <select name="opts" class="w3-display-middle">
      <option value="opt0" id="opt0" selected>Opciones</option>
      <option value="temp2" id="temp2">Temperatura</option>
      <option value="hume2" id="hume2">Humedad</option>
      <option value="lumi2" id="lumi2">Luminosidad</option>
      <option value="prox2" id="prox2">Proximidad</option>
     </select>
    </div>
   </div>
<!--s3-->
  <div class="w3-row">
    <div class="w3-display-container barraSuperior w3-third" style="height:50px;"><p class="w3-display-middle sensNames">Sensor 3</div>
    <div class="w3-display-container barraSuperior w3-third" style="height:50px;"><input class="w3-display-middle sensInputs" type="" id="sens3H" readonly></div>
     <div class="w3-display-container barraSuperior w3-third" style="height:50px;">
     <select name="opts" class="w3-display-middle">
      <option value="opt0" id="opt0" selected>Opciones</option>
      <option value="temp3" id="temp3">Temperatura</option>
      <option value="hume3" id="hume3">Humedad</option>
      <option value="lumi3" id="lumi3">Luminosidad</option>
      <option value="prox3" id="prox3">Proximidad</option>
     </select>
    </div>
   </div>
<!--s4-->
  <div class="w3-row">
    <div class="w3-display-container barraInferior w3-third" style="height:50px;"><p class="w3-display-middle sensNames">Sensor 4</div>
    <div class="w3-display-container barraInferior w3-third" style="height:50px;"><input class="w3-display-middle sensInputs" type="" id="sens4T" readonly></div>
     <div class="w3-display-container barraInferior w3-third" style="height:50px;">
     <select name="opts" class="w3-display-middle">
      <option value="opt0" id="opt0" selected>Opciones</option>
      <option value="temp4" id="temp4">Temperatura</option>
      <option value="hume4" id="hume4">Humedad</option>
      <option value="lumi4" id="lumi4">Luminosidad</option>
      <option value="prox4" id="prox4">Proximidad</option>
     </select>
    </div>
   </div>
<!--s5-->
 <div class="w3-row">
    <div class="w3-display-container barraSuperior w3-third" style="height:50px;"><p class="w3-display-middle sensNames">Sensor 5</div>
    <div class="w3-display-container barraSuperior w3-third" style="height:50px;"><input class="w3-display-middle sensInputs" type="" id="sens5P" readonly></div>
     <div class="w3-display-container barraSuperior w3-third" style="height:50px;">
     <select name="opts" class="w3-display-middle">
      <option value="opt0" id="opt0" selected>Opciones</option>
      <option value="temp5" id="temp5">Temperatura</option>
      <option value="hume5" id="hume5">Humedad</option>
      <option value="lumi5" id="lumi5">Luminosidad</option>
      <option value="prox5" id="prox5">Proximidad</option>
     </select>
    </div>
   </div>
<!--s6-->
 <div class="w3-row">
    <div class="w3-display-container barraInferior w3-third" style="height:50px;border-radius:  0px 0px  0px 20px;"><p class="w3-display-middle sensNames">Sensor 6</div>
    <div class="w3-display-container barraInferior w3-third" style="height:50px;"><input class="w3-display-middle sensInputs" type="" id="sens6L" readonly></div>
     <div class="w3-display-container barraInferior w3-third" style="height:50px;border-radius: 0px 0px 20px 0px;">
     <select name="opts" class="w3-display-middle">
      <option value="opt0" id="opt0" selected>Opciones</option>
      <option value="temp6" id="temp6">Temperatura</option>
      <option value="hume6" id="hume6">Humedad</option>
      <option value="lumi6" id="lumi6">Luminosidad</option>
      <option value="prox6" id="prox6">Proximidad</option>
     </select>
    </div>
   </div>
  </div>
 </div>
<!--values_conver-->
<div class="w3-row-padding w3-padding w3-container boxGeneral" style="background-color: white;margin-bottom:;">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>Tabla de <b>actuadores</b></h1>
      <h5 class="w3-padding-16">En esta sección se mostraran los estados de los actuadores, es decir, si estan encendidos o apagados. El color <b style="color: green;">verde</b> indica que esta prendido y el color <b style="color: red;">rojo</b> que no lo esta. Asi de sencillo.</h5>
    </div>
    <div class="w3-third w3-center">
      <i class="fa fa-temp w3-padding-64 w3-text-red" id="" style="font-size: 150px;"></i>
    </div>
   </div>
<!--fila1_actus-->
  </div>
 <div id="actuadores">
   
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
          <p>+54 2494 660399</p>
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
     <script src="../../../js/loadSens.js"></script>
    <script src="../../../js/loadAct.js"></script>
  </body>
</html>
