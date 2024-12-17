<?php
class Database {
    private $host = 'localhost';
    private $db_name = 'tu_base_de_datos';
    private $username = 'tu_usuario';
    private $password = 'tu_contraseña';
    private $conn;

    public function __construct() {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db_name", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Error de conexión: ' . $e->getMessage();
        }
    }

    public function prepare($query) {
        return $this->conn->prepare($query);
    }
}
?>
