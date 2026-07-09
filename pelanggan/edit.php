<?php

require_once "../classes/Pelanggan.php";

$obj=new Pelanggan();


if(isset($_POST['edit']))
{


$obj->edit(

$_POST['id'],
$_POST['nama'],
$_POST['alamat'],
$_POST['telepon']

);


header("location:index.php");


}

?>


<form method="POST">


<input type="hidden"
name="id"
value="<?= $_GET['id']?>">


Nama

<input name="nama">


<br>


Alamat

<textarea name="alamat"></textarea>


<br>


Telepon

<input name="telepon">


<br>


<button name="edit">

Update

</button>


</form>

