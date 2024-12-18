<?php
require_once '../models/User.php';
require_once '../models/VideoLlamadas.php';

switch ($_GET["op"]) {
    case 'login':
        session_start();

        $modelo = new User();
        $usuario = $modelo->login($_POST["correo"], $_POST["contraseña"]);

        if ($usuario) {
            // Store user data in the session
            $_SESSION['user'] = [
                'id_usuario' => $usuario['id_usuario'],
                'nombre' => $usuario['nombre'],
                'correo' => $usuario['correo'],
                'tipo_usuario' => $usuario['tipo_usuario'],
                'minutos' => $usuario['minutos']
            ];
        }

        echo json_encode($usuario);
        break;

    case 'registrarUsuario':
        $modelo = new User();
        $lastId = $modelo->register($_POST["nombre"], $_POST["correo"], $_POST["contraseña"], $_POST["tipo_usuario"]);

        echo json_encode(["success" => $lastId ? true : false, "lastId" => $lastId]);
        break;

    default:
        # code...
        break;
}
?>