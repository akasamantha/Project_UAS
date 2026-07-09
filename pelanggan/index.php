<?php

require_once "../classes/Pelanggan.php";

$obj=new Pelanggan();

$data=$obj->tampil();

?>


<h2>
Data Pelanggan
</h2>


<a href="tambah.php">
Tambah
</a>


<table border="1">


<tr>

<th>Nama</th>
<th>Alamat</th>
<th>Telepon</th>
<th>Aksi</th>

</tr>


<?php foreach($data as $p): ?>


<tr>

<td>
<?=htmlspecialchars($p['nama'])?>
</td>


<td>
<?=htmlspecialchars($p['alamat'])?>
</td>


<td>
<?=htmlspecialchars($p['telepon'])?>
</td>


<td>


<a href="edit.php?id=<?=$p['id']?>">
Edit
</a>


<a href="hapus.php?id=<?=$p['id']?>">
Hapus
</a>


</td>


</tr>


<?php endforeach; ?>


</table>