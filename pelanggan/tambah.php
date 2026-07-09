<?php

require_once "../classes/Pelanggan.php";


if(isset($_POST['simpan']))
{

$obj=new Pelanggan();


$obj->tambah(

$_POST['nama'],
$_POST['alamat'],
$_POST['telepon']

);


header("location:index.php");


}

?>


<form method="POST">


Nama

<input name="nama">


<br>


Alamat

<textarea name="alamat"></textarea>


<br>


Telepon

<input name="telepon">


<br>


<button name="simpan">

Simpan

</button>


</form>