// carga
window.onload = function start() {slide();kas();liveVivo();}
 function slide() {window.setInterval(function () {$.post("load.php", function(htmlexterno){$("#sens1T").html(htmlexterno);});}, 1000);}
 function slide() {window.setInterval(function () {$.post("load.php", function(htmlexterno){$("#sens2H").html(htmlexterno);});}, 1000);}
 function slide() {window.setInterval(function () {$.post("load.php", function(htmlexterno){$("#sens3H").html(htmlexterno);});}, 1000);}
 function slide() {window.setInterval(function () {$.post("load.php", function(htmlexterno){$("#sens4T").html(htmlexterno);});}, 1000);}
 function slide() {window.setInterval(function () {$.post("load.php", function(htmlexterno){$("#sens5P").html(htmlexterno);});}, 1000);}
 function slide() {window.setInterval(function () {$.post("load.php", function(htmlexterno){$("#sens6L").html(htmlexterno);});}, 1000);}
 
