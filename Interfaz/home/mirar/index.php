<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">  
  <title>HalfControl - Mirar</title>
  <link href="../../css_visuals/GSSheet.css" rel="stylesheet" type="text/css">
  <link href="../../css_visuals/W3Sheet.css" rel="stylesheet" type="text/css">
  <link href="../../css_visuals/demo.css" rel="stylesheet" type="text/css">
  <link href="../../css_visuals/footer.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu+Condensed" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
</head>
<!--banner-->
<body ondragstart="return false" onselectstart="return false" oncontextmenu="return false" style="background-color:#1a1a1a;">
 <a href="../home.php"><div class="heading" style="position: relative;"> Half<p class="headingLog">Control</p></div></a>
<!--menuInfo-->
 <div class="w3-row-padding w3-padding-64 w3-container" style="background-color:#1a1a1a;color:white;">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>Menú de <b>Mirar</b></h1>
      <h5 class="w3-padding-32">Este es el menú donde vas a poder los valores de tus sensores, convertirlos y hasta verlos en gráficos.</h5>
    </div>
    <div class="w3-third w3-center liveAnimate" id="live">
      <i class="fa fa-search w3-padding-64 insideSHW" style="font-size: 150px;"></i>
    </div>
  </div>
</div>
<!--opciones-->
 <div>
  <a href="grafValues/index.php"><div class="w3-container w3-quarter styleRow borderRow w3-display-container" style="text-align: center;color: white;font-size: 150px;"><p class="w3-display-middle" style="font-size:50px;margin-top: 60px;">Gráficos</p><i class="fa fa-bar-chart" aria-hidden="true"></i></div>
  <a href="liveValues/index.php"><div class="w3-container w3-half styleRow borderRow w3-display-container" style="text-align: center;color: white;"><p class="w3-display-middle" style="font-size:50px;margin-top: 60px;">LiveValues</p><i class="fa fa-play" aria-hidden="true" style="font-size:150px;margin-top:30px;"></i></div>
  <a href="dbValues/index.php"><div class="w3-container w3-quarter styleRow borderRow w3-display-container" style="text-align: center;color:white;"><p class="w3-display-middle" style="font-size:50px;margin-top: 60px;">Database</p><i class="fa fa-database" aria-hidden="true" style="font-size:150px;margin-top:30px;"></i></div>
</div> 
<!--footer-->
       <script src="../../js/lib/Chart.min.js"></script>
      <script src="../../js/grafoTemp.js"></script>
     <script src="../../js/grafoSysTemp.js"></script>
    <script src="../../js/converSens.js"></script>
   <script src="../../js/estadoActu.js"></script>
  </body>
</html>
