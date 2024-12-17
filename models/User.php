<?php

require_once '/../db/Database.php';

class User {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function create($name, $email, $password, $role_id) {
        $query = "INSERT INTO users (name, email, password, role_id) VALUES (?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        return $stmt->execute([$name, $email, $password, $role_id]);
    }
    
    public function getAll() {
        $query = "SELECT * FROM users";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
