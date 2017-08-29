// carga
function kas() {window.setInterval(function () {$.post("loadActu.php", function(htmlexterno){$("#actuadores").html(htmlexterno);});}, 1000);}