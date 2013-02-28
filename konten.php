<?php

include "config/koneksi.php";
include "config/indotgl_function.php";

if (empty($_SESSION['username']) AND empty($_SESSION['status'])) {
    echo "<script type='text/javascript'>window.location = 'login.php';</script>";
} else {

    $modul = $_GET['mod'];
    switch ($modul) {
//menu default [home]
        default:
            include "modul/home/home.php";
            break;
//menu Universitas Umum
        case 'universitas':
            include "modul/universitas/universitas.php";
            break;
//Menu data Fakultas UGM
        case 'fakultas_ugm':
            include "modul/fakultas_ugm/fakultas_ugm.php";
            break;
//Menu Info Terbaru
        case 'info_terbaru':
            include "modul/info/info.php";
            break;
    
         case 'kontak':
            include "modul/kontak/kontak.php";
            break;
    }
}
?>