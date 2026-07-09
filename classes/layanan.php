<?php

require_once "../config/Database.php";


class Layanan
{

private $db;


public function __construct()
{
$this->db=(new Database())->connect();
}



public function tampil()
{

return $this->db
->query("SELECT * FROM layanan")
->fetchAll(PDO::FETCH_ASSOC);

}



public function tambah($nama,$harga)
{

$sql="
INSERT INTO layanan
(nama_layanan,harga)

VALUES(?,?)
";


$stmt=$this->db->prepare($sql);


return $stmt->execute([

$nama,

$harga

]);

}



public function hapus($id)
{

$stmt=$this->db->prepare(
"DELETE FROM layanan WHERE id=?"
);


return $stmt->execute([$id]);

}


}

?>