<?php

require_once __DIR__ . "/../classes/Layanan.php";

if (isset($_POST['simpan'])) {
    $obj = new Layanan();
    $obj->tambah($_POST['nama_layanan'], $_POST['harga']);

    header("Location: index.php");
    exit();
}
?>

<h2>Tambah Layanan</h2>

<form method="POST">
    Nama Layanan
    <input name="nama_layanan">
    <br>
    Harga
    <input name="harga">
    <br>
    <button name="simpan">Simpan</button>
</form>
