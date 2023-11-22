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
}
