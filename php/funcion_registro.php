<?php
require_once 'env.php';
session_reset();
session_start();

switch ($_POST['comprobar']) {
    case 'comun':
        $nom = $_POST['nombre'];
        $ape = $_POST['apellido'];
        $mail = $_POST['mail'];
        $user = $_POST['usuario'];
        $pass = $_POST['password'];

        $hash = password_hash($pass, PASSWORD_BCRYPT);

        $comprobar_mail = "SELECT * FROM `usuarios` WHERE `correo_electronico` = '$mail'";
        $comprobar_user = "SELECT * FROM `usuarios` WHERE `nombre_usuario` = '$user'";

        $result_01 = mysqli_query($con, $comprobar_mail);
        $result_02 = mysqli_query($con, $comprobar_user);

        $registro["error"] = "0"; 
        if(mysqli_num_rows($result_01) != 0) {/*verifica si el correo electronico existe*/
            $registro["error"] = "1";
        }
        else if(mysqli_num_rows($result_02) != 0) {/*verifica si el nombre de usuario existe*/
            $registro["error"] = "2";
        }
        else if($registro["error"] == "0"){
            $crear_cuenta = "INSERT INTO `usuarios` VALUES (NULL, '$nom', '$ape', '$mail', '$user', '$hash');";
            $result_03 = mysqli_query($con, $crear_cuenta);
            if(mysqli_connect_error()){
                $registro["error"] = "3";
                echo ("Error de conexión a MySQL: " . mysqli_connect_error());
                exit();
            }
        }
        echo json_encode($registro);
        break;
}
