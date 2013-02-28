<?php

include "../../config/koneksi.php";
error_reporting(0);
$modul = $_GET[mod];
$aksi = $_GET[aksi];
if ($_SESSION['status'] == 1) {
    if ($modul == 'kontak' AND $aksi == 'update') {
        mysql_query("UPDATE tbl_user SET username   = '$_POST[username]',
                                         nama       = '$_POST[nama]',
                                         alamat     = '$_POST[alamat]',
                                         email      = '$_POST[email]',
                                         telp       = '$_POST[telp]'
                           WHERE  id_user       = '$_POST[id]'");
        echo "<script type='text/javascript'>alert('Data berhasil diuabah!');</script>";
        echo "<meta http-equiv='REFRESH' content='0;url=../../?mod=$modul'>";
    }
}
?>