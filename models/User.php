<?php

require_once '/../db/Database.php';

class User
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function create($name, $email, $password, $role_id)
    {
        $query = "INSERT INTO users (name, email, password, role_id) VALUES (?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        return $stmt->execute([$name, $email, $password, $role_id]);
    }

    public function getAll()
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
}
?>