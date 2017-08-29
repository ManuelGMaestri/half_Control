<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>HalfControl - Graficos - Mirar</title>
 <link href="../../../css_visuals/GSSheet.css" rel="stylesheet" type="text/css">
 <link href="../../../css_visuals/W3Sheet.css" rel="stylesheet" type="text/css">
 <link href="../../../css_visuals/bttn.css" rel="stylesheet" type="text/css">
 <link href="../../../css_visuals/demo.css" rel="stylesheet" type="text/css">
 <link href="../../../css_visuals/footer.css" rel="stylesheet" type="text/css">
 <script src="../../../js/lib/jquery-3.2.1.min.js"></script>
 <script src="../../../js/lib/Highstock-5.0.14/code/highstock.js"></script>
 <script src="../../../js/lib/Highstock-5.0.14/code/modules/exporting.js"></script>
 <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu+Condensed" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
</head>
<body ondragstart="return false" onselectstart="return false" oncontextmenu="return false" style="background-color: white;">
<a href="../home.php"><div class=" w3-animate-opacity heading"> Half<p class="headingLog">Control</p></div></a>
<div class="w3-row-padding w3-padding-64 w3-container" style="background-color:#1a1a1a;color:white;margin-bottom: 15px;padding-top: 20px;">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>Panel de <b>gráficos</b></h1>
      <h5 class="w3-padding-32">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5>
    </div>
    <div class="w3-third w3-center  liveAnimate" id="live">
      <i class="fa fa-bar-chart w3-padding-64 insideSHW" style="font-size: 150px;"></i>
    </div>
  </div>
</div>
 <div class="w3-row w3-padding-16">
  <div class="w3-third w3-container">
  </div> 
   <div class="w3-third w3-container">
   <h1>Grafico en <b>vivo</b></h1>
     <h5 class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h5>
     <section><button id="js-trigger-overlay configGraf" style="box-shadow: 1px 2px 5px gray;" onclick="document.getElementById('configGrafModal').style.display='block'">Configuración <i class="fa fa-bar-chart"></i></button></section>
    </div>
  <div class="w3-container w3-third"></div>  
</div>
  
<script>
  function dflt(){
      $("#split").css("display","block");
      $("#S1TChart,#S1HChart,#S2TChart,#S2HChart,#S3TChart,#S3HChart,#S4TChart,#S4HChart,#S5TChart,#S5HChart,#S6TChart,#S6HChart").each(function(){
        $(this).css("width","100%");
    });
  }
  function split(){
      $("#split").css("display","flex");
      $("#S1TChart,#S1HChart,#S2TChart,#S2HChart,#S3TChart,#S3HChart,#S4TChart,#S4HChart,#S5TChart,#S5HChart,#S6TChart,#S6HChart").each(function(){
        $(this).css("width","50%");
  });
 }
</script>
<!-- The Modal -->
<div id="configGrafModal" class="w3-modal" style="display: block;">
  <div class="w3-modal-content">
    <div class="w3-container">
      <span onclick="document.getElementById('configGrafModal').style.display='none'"
      class="w3-button w3-display-topright" style="font-size: 30px;">&times;</span>
      <div>SENSORES:
      <p>Seleccione los sensores que quiera que quiera que se muestren.</p>
      <label>S1</label>
      <input type="checkbox" id="inputS1" onclick="change();" name="">
      <label>S2</label>
      <input type="checkbox" id="inputS2" onclick="change();" name="">
      <label>S3</label>
      <input type="checkbox" id="inputS3" onclick="change();" name="">
      <label>S4</label>
      <input type="checkbox" id="inputS4" onclick="change();" name="">
      <label>S5</label>
      <input type="checkbox" id="inputS5" onclick="change();" name="">
      <label>S6</label>
      <input type="checkbox" id="inputS6" onclick="change();" name="">
      </div>
      <script>
      //config de sensores
        function change(){
          var sensI = ["inputS1","inputS2","inputS3","inputS4","inputS5","inputS6"];
          var sensC = ["S1","S2","S3","S4","S5","S6"];
          for (var i = 0; i < sensI.length; i++) {     
            if (document.getElementById(sensI[i]).checked) {
              document.getElementById(sensC[i]).style.display="block"
            } else {
              document.getElementById(sensC[i]).style.display="none"
            }
        }
    }
      </script>
    <br>      
  <div>
    <div id="S1" style="display: none;">El sensor 1 es: 
     <label>temperatura?</label><input type="checkbox"  id="S1T" onchange="changeTChart();" name="temp">
     <label>humedad?</label><input type="checkbox" id="S1H" onchange="changeHChart();" name="hume">
    </div>
    <div id="S2" style="display: none;">El sensor 2 es: 
     <label>temperatura?</label><input type="checkbox"  id="S2T" onchange="changeTChart();" name="temp">
     <label>humedad?</label><input type="checkbox" id="S2H" onchange="changeHChart();" name="hume">
    </div>
    <div id="S3" style="display: none;">El sensor 3 es: 
     <label>temperatura?</label><input type="checkbox"  id="S3T" onchange="changeTChart();" name="temp">
     <label>humedad?</label><input type="checkbox"  id="S3H" onchange="changeHChart();" name="temp">
    </div>
     <div id="S4" style="display: none;">El sensor 4 es: 
     <label>temperatura?</label><input type="checkbox"  id="S4T" onchange="changeTChart();" name="temp">
     <label>humedad?</label><input type="checkbox" id="S4H" onchange="changeHChart();" name="hume">
    </div>
    <div id="S5" style="display: none;">El sensor 5 es: 
     <label>temperatura?</label><input type="checkbox"  id="S5T" onchange="changeTChart();" name="temp">
     <label>humedad?</label><input type="checkbox" id="S5H" onchange="changeHChart();" name="hume">
    </div>
    <div id="S6" style="display: none;">El sensor 6 es: 
     <label>temperatura?</label><input type="checkbox"  id="S6T" onchange="changeTChart();" name="temp">
     <label>humedad?</label><input type="checkbox" id="S6H" onchange="changeHChart();" name="hume">
    </div>
<script>
 function changeTChart(){
  var tCharts = ["S1T","S2T","S3T","S4T","S5T","S6T"];
  var tOptCharts = ["S1TChart","S2TChart","S3TChart","S4TChart","S5TChart","S6TChart"];
    for (var i = 0; i < tCharts.length; i++) {
     if (document.getElementById(tCharts[i]).checked) {
        document.getElementById(tOptCharts[i]).style.display="block"
        } else {
         document.getElementById(tOptCharts[i]).style.display="none"
      }
    }
  }
     </script>
     <script>
 function changeHChart(){
  var hCharts = ["S1H","S2H","S3H","S4H","S5H","S6H"];
  var hOptCharts = ["S1HChart","S2HChart","S3HChart","S4HChart","S5HChart","S6HChart"];
    for (var i = 0; i < hCharts.length; i++) {
     if (document.getElementById(hCharts[i]).checked) {
        document.getElementById(hOptCharts[i]).style.display="block"
        } else {
         document.getElementById(hOptCharts[i]).style.display="none"
      }
    }
  }
     </script>
    <button>Listo</button>
   </div>
  </div>
 </div>
</div>
<script>
  // Get the modal
var modal = document.getElementById('configGrafModal');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<!-- tcharts -->
<div id="split">
 <div id="S1TChart" style="height: 400px; min-width: 33%;display:none;"></div>
 <div id="S2TChart" style="height: 400px; min-width: 33%;display:none;"></div>
  <div id="S1HChart" style="height: 400px; min-width: 33%;display:none;"></div>
  <div id="S2HChart" style="height: 400px; min-width: 33%;display:none;"></div>
 <div id="S3TChart" style="height: 400px; min-width: 33%;display:none;"></div>
 <div id="S4TChart" style="height: 400px; min-width: 33%;display:none;"></div>
  <div id="S3HChart" style="height: 400px; min-width: 33%;display:none;"></div>
  <div id="S4HChart" style="height: 400px; min-width: 33%;display:none;"></div>
 <div id="S5TChart" style="height: 400px; min-width: 33%;display:none;"></div>
 <div id="S6TChart" style="height: 400px; min-width: 33%;display:none;"></div>
  <div id="S5HChart" style="height: 400px; min-width: 33%;display:none;"></div>
  <div id="S6HChart" style="height: 400px; min-width: 33%;display:none;"></div>
</div>
  <script src="../../../js/grafSensT.js"></script>
 <script src="../../../js/grafSensH.js"></script>
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
       <script src="../../js/lib/Chart.min.js"></script>
      <script src="../../js/grafoTemp.js"></script>
     <script src="../../js/grafoSysTemp.js"></script>
    <script src="../../js/converSens.js"></script>
   <script src="../../js/estadoActu.js"></script>
  </body>
</html>
