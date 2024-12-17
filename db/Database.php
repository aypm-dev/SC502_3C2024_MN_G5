<?php
class Database
{
    private $host = 'localhost';
    private $db_name = 'lesco_project';
    private $username = 'root';
    private $password = '';
    private $conn;

    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db_name", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Error de conexión: ' . $e->getMessage();
        }
    }

    public function prepare($query)
    {
        return $this->conn->prepare($query);
    }
}
?>