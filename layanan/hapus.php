<?php

require_once "../classes/Layanan.php";


$obj=new Layanan();


$obj->hapus($_GET['id']);


header("location:index.php");


?>