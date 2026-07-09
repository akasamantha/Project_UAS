<?php

require_once __DIR__."/../config/Database.php";


class Pelanggan
{

private $db;


public function __construct()
{
    $this->db=(new Database())->connect();
}



public function tampil()
{

$sql="SELECT * FROM pelanggan";

$stmt=$this->db->query($sql);

return $stmt->fetchAll(PDO::FETCH_ASSOC);

}



public function tambah($nama,$alamat,$telepon)
{

$sql="
INSERT INTO pelanggan
(nama,alamat,telepon)

VALUES(?,?,?)
";


$stmt=$this->db->prepare($sql);


return $stmt->execute([

$nama,
$alamat,
$telepon

]);

}



public function edit($id,$nama,$alamat,$telepon)
{

$sql="
UPDATE pelanggan SET

nama=?,
alamat=?,
telepon=?

WHERE id=?
";


$stmt=$this->db->prepare($sql);


return $stmt->execute([

$nama,
$alamat,
$telepon,
$id

]);

}



public function hapus($id)
{

$sql="
DELETE FROM pelanggan
WHERE id=?
";


$stmt=$this->db->prepare($sql);


return $stmt->execute([$id]);

}


}

?>