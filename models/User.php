<?php

require_once '../db/Database.php';

class User
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function register($name, $email, $password, $tipo_usuario)
    {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $query = "INSERT INTO usuarios (nombre, correo, contrasena, tipo_usuario) VALUES (?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $usuario = $stmt->execute([$name, $email, $hashedPassword, $tipo_usuario]);

        $lastUserId = $this->db->getLastInsertId();

        if ($tipo_usuario === "traductor") {
            $queryTraductor = "INSERT INTO traductores (id_traductor, nombre, especialidad, disponibilidad) VALUES (?, ?, ?, ?)";
            $stmt = $this->db->prepare($queryTraductor);
            $usuario = $stmt->execute([$lastUserId, $name, "LESC", 'disponible']);
        }

        return $usuario;
    }

    public function login($email, $password)
    {
        $query = "SELECT * FROM usuarios WHERE correo = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['contrasena'])) {
            return $user;
        }
        return null;
    }

    public function getAllUsers()
    {
        $query = "SELECT * FROM users";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllOnlineTranslators()
    {
        $query = "  SELECT usuario.id_usuario, usuario.nombre, usuario.correo, traductor.especialidad, traductor.disponibilidad
                    FROM usuarios AS usuario
                    INNER JOIN traductores AS traductor 
                        ON usuario.id_usuario = traductor.id_traductor
                    WHERE usuario.tipo_usuario = 'traductor' 
                    AND traductor.disponibilidad = 'disponible';";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function agregarminutosausuario($minutos, $id_usuario)
    {
        $query = "UPDATE usuarios
SET minutos = minutos + ?  -- Sumar 30 minutos, cambia el valor según lo que necesites
WHERE id_usuario = ? ;  -- Cambia el id_usuario por el que desees actualizar";
        $stmt = $this->db->prepare($query);
        return $stmt->execute([$minutos, $id_usuario]);

    }

    public function getClientMinutesLeft($id_cliente)
    {
        $query = "SELECT minutos FROM usuarios where id_usuario = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$id_cliente]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}
?>