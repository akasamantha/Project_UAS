<?php

session_start();

require_once __DIR__ . "/../classes/User.php";


$user = new User();


$data = $user->login(

$_POST['username'],

$_POST['password']

);



if($data)
{

$_SESSION['login']=true;
$_SESSION['id']=$data['id'];
$_SESSION['username']=$data['username'];
$_SESSION['role']=$data['nama_role'];


header("location:../index.php");

exit();

}
else
{

echo "
Login gagal
<br>
<a href='login.php'>
Kembali
</a>
";

}

?>