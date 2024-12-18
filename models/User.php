<?php

require_once '../db/Database.php';

class User
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function register($name, $email, $password, $role_id)
    {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $query = "INSERT INTO users (name, email, password, role_id) VALUES (?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        return $stmt->execute([$name, $email, $hashedPassword, $role_id]);
    }

    public function login($email, $password)
    {
        $query = "SELECT * FROM users WHERE email = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
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
}
?>