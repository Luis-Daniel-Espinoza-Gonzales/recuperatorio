function verificar_campo(nombre, apellido, mail, user, pass){
    error = false;
    if(nombre.trim() === ""){
        error = true;
        alert("Por favor complete el campo de nombre.");
    }
    else if(apellido.trim() === ""){
        error = true;
        alert("Por favor complete el campo de apellido.");
    } 
    else if(mail.trim() === ""){
        error = true;
        alert("Por favor complete el campo de correo electronico.");
    }
    else if(user.trim() === ""){
        error = true;
        alert("Por favor complete el campo de nombre de usuario.");
    }
    else if(pass.trim() === ""){
        error = true;
        alert("Por favor complete el campo de contraseña.");
    }
    if(error){

    }
}
function registro(nombre, apellido, mail, user, pass) {
    error = false;
    if(!/^[A-Za-z](\s[A-Za-z])?/.test(nombre)){
        error = true;
        alert("No se permiten caracteres especiales. El orden puede se ser el primer nombre solo o el primer nombre, espacio, el segundo nombre.");
    }
    else if(!/^[A-Za-z](\s[A-Za-z])?/.test(apellido)){
        error = true;
        alert("No se permiten caracteres especiales. El orden puede se ser el primer apellido solo o el primer apellido, espacio, el segundo apellido.");
    }
    else if(!/^[\w-]+/.test(mail)){
        error = true;
        alert("Ingrese un nombre de usuario del correo electronico que sea valido.");
    }
    else if(!mail.includes('@gmail.com') && !mail.includes('@hotmail.com') && !mail.includes('@outlook.com')){
        error = true;
        alert("Ingrese un dominio valido.");
    }
    else if(!/^[A-Za-z0-9]/.test(user)){
        error = true;
        alert("No se permiten caracteres especiales.");
    }
    else if(pass.length < 6){
        error = true;
        alert("Ingrese un minimo de 6 caracteres.");
    }
    else if(!/^[0-9A-Za-z]+$/.test(pass)){
        error = true;
        alert("No se permiten caranteres especiales.");
    }
    if(error){

    }
    else{
        $.ajax({
            url: "../php/funcion_registro.php",
            data: { 'comprobar': 'comun', 'nombre': nombre, 'apellido': apellido, 'mail': mail, 'usuario': user, 'password': pass },
            type: "POST",
            dataType: "json",
            success: function (data) {
                console.log(data);
                if(data.error === "1") {
                    alert("el correo electronico ya esta en uso, por favor ingrese otro correo electronico");
                }
                else if(data.error === "2") {
                    alert("el nombre de usuario ya esta en uso, por favor ingrese otro nombre de usuario");
                }
                else if(data.error === "3") {
                    alert("Hubo una falla con la query");
                }
                else if(data.error === "0") {
                    alert("Se ha creado con exito su nuevo usuario de ...")
                    window.location.href = "home.php"
                }
            }
        })
    }
}