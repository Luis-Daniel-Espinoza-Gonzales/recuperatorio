function registro(nombre, apellido, mail, user, pass) {
    $.ajax({
        url: "../php/funcion_registro.php",
        data: { 'comprobar': 'comun', 'nombre': nombre, 'apellido': apellido, 'mail': mail, 'usuario': user, 'password': pass },
        type: "POST",
        datatype: "json",
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