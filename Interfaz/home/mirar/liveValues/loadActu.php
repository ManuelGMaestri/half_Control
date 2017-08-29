<!--Actuadores-->
<!--fila1-->
<div id="actuadores" style="background-color: #1a1a1a;padding:1px;box-shadow:1px 2px 10px gray;">
 <div class="bgActu" style="height:350px;margin-bottom: 65px;">
   <div class="w3-row" style="text-align:center;">
   <div class="w3-container w3-display-container w3-quarter heightActu" style="border: 3px white;box-shadow:0px 1px 5px black;" id="clrActu1">
    <h4 class="StlActu w3-display-middle">A1</h4>
   </div>
   <div class="w3-container w3-display-container w3-quarter heightActu" style="border: 3px white;box-shadow:0px 1px 5px black;" id="clrActu2">
    <h4 class="StlActu w3-display-middle">A2</h4>
   </div>
   <div class="w3-container w3-display-container w3-quarter heightActu" style="border: 3px white;box-shadow:0px 1px 5px black;" id="clrActu3">
    <h4 class="StlActu w3-display-middle">A3</h4>
   </div>
   <div class="w3-container w3-display-container w3-quarter heightActu" style="border: 3px white;box-shadow:0px 1px 5px black;" id="clrActu4">
    <h4 class="StlActu w3-display-middle">A4</h4>
   </div>
 </div>
<!--fila2_actu-->
  <div class="w3-row" style="text-align:center;">
   <div class="w3-container w3-display-container w3-quarter heightActu" style="border: 3px white;box-shadow:0px 1px 5px black;" id="clrActu5">
    <h4 class="StlActu w3-display-middle">A5</h4>
   </div>
   <div class="w3-container w3-display-container w3-quarter heightActu" style="border: 3px white;box-shadow:0px 1px 5px black;" id="clrActu6">
    <h4 class="StlActu w3-display-middle">A6</h4>
   </div>
   <div class="w3-container w3-display-container w3-quarter heightActu" style="border: 3px white;box-shadow:0px 1px 5px black;" id="clrActu7">
    <h4 class="StlActu w3-display-middle">A7</h4>
   </div>
   <div class="w3-container w3-display-container w3-quarter heightActu" style="border: 3px white;box-shadow:0px 1px 5px black;" id="clrActu8">
    <h4 class="StlActu w3-display-middle">A8</h4>
    </div>
   </div> 
  </div>
 </div>
 <script>
   var actuadores = ["#clrActu1","#clrActu2","#clrActu3","#clrActu4","#clrActu5","#clrActu6","#clrActu7","#clrActu8",];
   //looping
   for (var i = 0; i < actuadores.length; i++) {
   x = Math.floor(Math.random() * (10 - 20) + 20);
    if (x < 15){
      $(actuadores[i]).css("background-color","red").css("color","white");
    } else {
      $(actuadores[i]).css("background-color","green").css("color","white").css("box-shadow","1px 2px 10px black");
    }
  }
 </script>