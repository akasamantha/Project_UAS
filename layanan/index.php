<?php

require_once __DIR__ . "/../classes/Layanan.php";

$obj = new Layanan();
$data = $obj->tampil();
?>

<h2>Data Layanan</h2>

<a href="tambah.php">Tambah</a>

<table border="1">
    <tr>
        <th>No</th>
        <th>Layanan</th>
        <th>Harga</th>
        <th>Aksi</th>
    </tr>

    <?php $no = 1; foreach ($data as $l): ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= htmlspecialchars($l['nama_layanan']) ?></td>
        <td><?= htmlspecialchars($l['harga']) ?></td>
        <td>
            <a href="hapus.php?id=<?= $l['id'] ?>">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>