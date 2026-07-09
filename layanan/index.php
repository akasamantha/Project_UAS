<?php

require_once "../classes/Layanan.php";


$obj=new Layanan();


$data=$obj->tampil();

?>


<h2>Data Layanan</h2>


<a href="tambah.php">
Tambah
</a>


<table border="1">


<tr>

<th>No</th>
<th>Layanan</th>
<th>Harga</th>
<th>Aksi</th>

</tr>


<?php

$no=1;

foreach($data as $l){

?>


<tr>

<td><?= $no++ ?></td>

<td>
<?= $l['nama_layanan'] ?>
</td>


<td>
<?= $l['harga'] ?>
</td>


<td>

<a href="hapus.php?id=<?= $l['id'] ?>">
Hapus
</a>

</td>

</tr>


<?php } ?>


</table>