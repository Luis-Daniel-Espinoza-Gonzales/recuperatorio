function registrar(nombre, apellido, mail, user, pass) {
    $.ajax({
        url: "../php/funcion_registro.php",
        data: { 'comprobar': 'comun', 'nombre': nombre, 'apellido': apellido, 'mail': mail, 'usuario': user, 'password': pass },
        type: "POST",
        datatype: "json",
        success: function (data) {

        }
    })
}