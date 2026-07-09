<?php

require_once __DIR__ . "/../config/Database.php";

class User
{
    private $db;

    public function __construct()
    {
        $this->db = (new Database())->connect();
    }

    public function login($username, $password)
    {
        $sql = "SELECT users.*, roles.nama_role FROM users JOIN roles ON users.role_id = roles.id WHERE users.username = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$username]);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }

        return false;
    }

    public function tambah($username, $password, $role)
    {
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (username, password, role_id) VALUES (?, ?, ?)";
        $stmt = $this->db->prepare($sql);

        return $stmt->execute([$username, $hash, $role]);
    }

    public function tampil()
    {
        $sql = "SELECT users.*, roles.nama_role FROM users JOIN roles ON users.role_id = roles.id";

        return $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function hapus($id)
    {
        $stmt = $this->db->prepare("DELETE FROM users WHERE id = ?");

        return $stmt->execute([$id]);
    }
}
?>