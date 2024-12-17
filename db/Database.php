<?php
class Database
{
    private $host = 'localhost';
    private $db_name = 'lesco_project';
    private $username = 'root';
    private $password = '';
    public $conn;

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

// LINEAS DE PRUEBA, DESCOMENTAR PARA PROBAR LA CONEXION CON LA BASE DE DATOS

// $db = new Database();

// echo var_dump($db->conn);
// $resultado = $db->prepare("select * from videollamadas");
// $resultado->execute();

// echo var_dump($resultado);
// echo var_dump($resultado->fetchAll());
