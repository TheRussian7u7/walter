<?php

class Database {
    private $host = 'localhost';
    private $port = '5432';
    private $dbname = 'walter';
    private $user = 'postgres';
    private $password = '12345678';
    private $conn;

    public function connect() {
        if ($this->conn === null) {
            try {
                $dsn = "pgsql:host={$this->host};port={$this->port};dbname={$this->dbname};options='--client_encoding=UTF8'";
                $this->conn = new PDO($dsn, $this->user, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                die("Error en la conexión: " . $e->getMessage());
            }
        }
        return $this->conn;
    }

    public function disconnect() {
        $this->conn = null;
    }
}

$db = new Database();
$conn = $db->connect();

?>
