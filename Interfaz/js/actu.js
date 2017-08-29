//----------------------------Simulacion de los actuadores--------------------------------------
var actuadores = ["A1","A2","A3","A4","A5","A6","A7","A8"];
var actuadoresOpt = ["ON (encendido)", "OFF (apagado)"];
//geracion random de estado de actuador
for (var i = 0; i < actuadores.length; i++) {
   var x =  Math.floor(Math.random() * 2) + 1; 
    if (x = 2) {
     document.getElementById(actuadores[i]).innerHTML = actuadoresOpt[0];
    } else {
      document.getElementById(actuadores[i]).innerHTML = actuadoresOpt[1];
    }	
}