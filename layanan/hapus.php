<?php

require_once __DIR__ . "/../classes/Layanan.php";

$obj = new Layanan();
$obj->hapus($_GET['id']);

header("Location: index.php");
exit();
?>