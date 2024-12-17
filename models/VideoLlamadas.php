<?php

require_once '/../db/Database.php';

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
        $query = "SELECT * FROM videollamadas WHERE id_cliente=?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$id_cliente]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllFromTranslator($id_traductor)
    {
        $query = "SELECT * FROM videollamadas WHERE id_traductor=?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$id_traductor]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>