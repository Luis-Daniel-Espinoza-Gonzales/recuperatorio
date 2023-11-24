<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/registro.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../js/registro.js"></script>
</head>

<body>
    <div id="content_01">
        <div id="content_02">
            <h2>Formulario de registro</h2>
            <form action="">
                <div id="content_03">
                    <div class="content_03">
                        <div class="content_003">
                            <label for="name" class="label">
                                <h4>Nombre:</h4>
                            </label>
                        </div>
                        <input placeholder="nombre" type="text" id="nombre" class="input_01" name="nombre" value="" pattern="[A-Za-z]{2,15}(\s[A-Za-z]{2,15})?" title="Letras. Tamaño: 2-15" required>
                    </div>
                    <div class="content_03">
                        <div class="content_003">
                            <label for="lastname" class="label">
                                <h4>Apellido:</h4>
                            </label>
                        </div>
                        <input placeholder="apellido" type="text" id="apellido" class="input_01" name="apellido" pattern="[A-Za-z\s]{2,15}(\s[A-Za-z]{2,15})?" title="Letras. Tamaño: 2-15" value="" required>
                    </div>
                </div>
                <div id="content_04">
                    <div class="content_04">
                        <label for="email" class="label">
                            <h4>Correo electronico:</h4>
                        </label>
                    </div>
                    <input placeholder="ejemplo123@mail.com" type="mail" id="mail" class="input_02" name="mail" value="" pattern="[A-Za-z0-9]{2,15}@[a-z]{2,15}\.[a-z]{2,15}" title="Letras y numeros. Tamaño: 2-15 .Luego '@' letras. Tamaño: 2-15" required>
    
                </div>
                <div id="content_04">
                    <div class="content_04">
                        <label for="name" class="label">
                            <h4>Usuario:</h4>
                        </label>
                    </div>
                    <input placeholder="nombre" type="text" id="user" class="input_02" name="user" value="" pattern="[A-Za-z0-9]{2,15}" title="Letras. Tamaño: 2-15" required>

                </div>
                <div id="content_04">
                    <div class="content_04">
                        <label for="password" class="label">
                            <h4>Contraseña:</h4>
                        </label>
                    </div>
                    <input placeholder="contraseña" type="password" id="pass" class="input_02" name="password" value="" pattern="[A-Za-z0-9]{2,15}" title="Letras. Tamaño: 2-15" required>

                </div>
                <div id="button">
                    <input type="button" id="button_00" onclick="registro(
                        document.getElementById('nombre').value,
                        document.getElementById('apellido').value,
                        document.getElementById('mail').value,
                        document.getElementById('user').value,
                        document.getElementById('pass').value
                    )"
                    value="crear">
                </div>
            </form>
        </div>
    </div>
</body>

</html>