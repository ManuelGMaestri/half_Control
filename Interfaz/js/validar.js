function validarReg() {
	var idProduct, userpass, username;
    idproduct = document.getElementById("idproduct").value;
    username = document.getElementById("username").value;
    userpass = document.getElementById("userpass").value;
    userpassconfirm = document.getElementById("userpassconfirm").value;
    company = document.getElementById("company").value;
    email = document.getElementById("email").value;
    emailValidate = /\w+@+\w+\.+[a-z]/;
    
    if(idproduct === "" || username === "" || userpass === "" || company === "" || email === "") {
      alert("TODOS LOS CAMPOS SON OBLIGATORIOS");
      return false;
    } else if (idproduct.length>3){
        alert("La id del producto no puede superar los 3 digitos.");
        return false;
    } else if (isNaN(idproduct)){
        alert("La id del producto tienen que ser solo numeros.");  
        return false;
    } else if (username.length>30){
        alert("El nombre de usuario no puede superar los 30 caracteres. Se menos original.");
        return false;
    } else if (userpass !== userpassconfirm){
        alert("Las contraseñas no coinciden.");
        return false;
    } else if (userpass.length>30){
        alert("La contraseña  es muy larga, no puede superar los 30 caracteres. No seas tan paranoico.");
        return false;
    } else if(company.length>40){
        alert("El nombre de la empresa es muy largo.");
        return false;
    } else if(email.length>100){
        alert("El email es muy largo.");
        return false;
    } else if(!emailValidate.test(email)){
        alert("Ingrese un email apropiado.");
        return false;
    }
} 

function validarLog() {
    var idproductB, userpassB, usernameB;
    idproductB = document.getElementById("idproductB").value;
    usernameB = document.getElementById("usernameB").value;
    userpassB = document.getElementById("userpassB").value;
    
    if(idproductB.length>3){
        alert("La id del producto es de 3 digitos.");
        return false;
    } else if(usernameB.length>30){
        alert("El nombre de usuario no puede superar los 30 caracteres. Se menos original.");
        return false;
    } else if(userpassB.length>30){
        alert("La contraseña es muy larga.");
        return false;
    } else if(idproductB === "" || usernameB === "" || userpassB === ""){
        alert("Te olvidaste de llenar un campo.");
        return false;
    }
}