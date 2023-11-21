<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/registro.css">
</head>
<body>
    <div id="content_01">
        <div id="content_02">
            <h1>formulario de registro</h1>
            <form action="POST">
                <div id="content_03">
                    <div class="content_03">
                        <div class="content_003">
                            <label for="name" class="label"><h3>Nombre:</h3></label>
                        </div>
                        <input type="text" id="nombre" class="input_01" name="nombre" value="" require>
                    </div>
                    <div class="content_03">
                        <div class="content_003">
                            <label for="lastname" class="label"><h3>Apellido:</h3></label>
                        </div>
                        <input type="text" id="apellido" class="input_01" name="apellido" value="" require>
                    </div>
                </div>
                <div id="content_04">
                    <div class="content_04">
                        <label for="email" class="label"><h3>Correo electronico:</h3></label>
                    </div>
                    <input type="mail" id="mail" class="input_02" name="mail" value="" require>

                </div>  
                <div id="content_04">
                    <div class="content_04">
                        <label for="name" class="label"><h3>Usuario:</h3></label>
                    </div>
                    <input type="text" id="user" class="input_02" name="user" value="" require>

                </div>
                <div id="content_04">
                    <div class="content_04">
                        <label for="password" class="label"><h3>Contraseña:</h3></label>
                    </div>
                    <input type="text" id="pass" class="input_02" name="password" value="" require>

                </div>
                <div>
                    <button type="submit" onclick="">Crear</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>