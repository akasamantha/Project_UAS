<?php

require_once __DIR__ . "/../config/Database.php";

class Role
{
    private $db;

    public function __construct()
    {
        $this->db = (new Database())->connect();
    }

    public function tampil()
    {
        $stmt = $this->db->query("SELECT * FROM roles");

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>