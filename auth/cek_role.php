<?php


if(session_status() == PHP_SESSION_NONE)
{
    session_start();
}



function cekRole($role)
{


if(!isset($_SESSION['role']))
{
    echo "Role belum login";
    exit();
}



if($_SESSION['role'] != $role)
{

echo "Akses Ditolak";
exit();

}


}

?>