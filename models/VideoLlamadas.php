<?php

require_once '../db/Database.php';

class VideoLlamadas
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function create($id_cliente, $id_traductor, $duracion, $estado)
    {
        $query = "INSERT INTO videollamadas (id_cliente, id_traductor, duracion, estado) VALUES (?, ?, ?, ?),";
        $stmt = $this->db->prepare($query);
        return $stmt->execute([$id_cliente, $id_traductor, $duracion, $estado]);
    }

    public function getAll()
    {
        $query = "SELECT * FROM videollamadas";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllFromClient($id_cliente)
    {
        $query = "  SELECT videollamada.*, traductor.nombre AS nombre_traductor
                    FROM videollamadas AS videollamada
                    LEFT JOIN traductores AS traductor 
                        ON videollamada.id_traductor = traductor.id_traductor
                    WHERE videollamada.id_cliente = ?;";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$id_cliente]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getAllFromTranslator($id_traductor)
    {
        $query = "  SELECT videollamada.*, usuario.nombre AS nombre_cliente
                    FROM videollamadas AS videollamada
                    LEFT JOIN usuarios AS usuario 
                        ON videollamada.id_cliente = usuario.id_usuario
                    WHERE videollamada.id_traductor = ?;";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$id_traductor]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>