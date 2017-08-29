//-----------Simulacion de los sensores - crudo-------------------------
//conver temperatura
var sensT = new Array("sens1T", "sens2T", "sens3T", "sens4T", "sens5T", "sens6T");
  for (i = 0; i < sensT.length; i++) {
   document.getElementById(sensT[i]).value = Math.floor(Math.random() * (500 - 550) + 550);
    var x = document.getElementById(sensT[i]).value;
     var xFloat = document.getElementById(sensT[i]).value = (x / 1024)*4500 / 100;
      document.getElementById(sensT[i]).value = xFloat.toFixed(1),"C°";
}
//conver humedad
var sensH = new Array("sens1H", "sens2H", "sens3H", "sens4H", "sens5H", "sens6H");
  for (i = 0; i < sensH.length; i++) {
    x = document.getElementById(sensH[i]).value = Math.floor(Math.random() * (200 - 700) + 700);
   if (x < 300) {
    document.getElementById(sensH[i]).value = "Mojado";
     } else if (x > 300 && x < 600) {
      document.getElementById(sensH[i]).value = "Normal";
      } else if (x > 600 && x < 1500) {
       document.getElementById(sensH[i]).value = "Seco";
   }
}
//conver luminosidad
var sensL = new Array("sens1L", "sens2L", "sens3L", "sens4L", "sens5L", "sens6L");
  for (i = 0; i < sensL.length; i++) {
    x = document.getElementById(sensL[i]).value = Math.floor(Math.random() * (10 - 20) + 20);  //simulacion de los sensores
    if (x < 15) {
    document.getElementById(sensL[i]).value = "SI";
      } else {
        document.getElementById(sensL[i]).value = "NO";
   }
  }
//conver proximidad
var sensL = new Array("sens1P", "sens2P", "sens3P", "sens4P", "sens5P", "sens6P");
  for (i = 0; i < sensL.length; i++) {
    x = document.getElementById(sensL[i]).value = Math.floor(Math.random() * (300 - 600) + 600);
    x = x / 2 / 29.1;
     document.getElementById(sensL[i]).value = x.toFixed(2);
}
