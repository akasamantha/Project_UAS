<?php


require_once "../classes/Pelanggan.php";


$obj=new Pelanggan();


$obj->hapus($_GET['id']);


header(
"location:index.php"
);


?>