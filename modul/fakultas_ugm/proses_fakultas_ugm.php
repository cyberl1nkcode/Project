<?php

include "../../config/koneksi.php";
error_reporting(0);

$modul = $_GET[mod];
$aksi = $_GET[aksi];
$id = (int) $_GET[id];
if ($_SESSION[status] == 1) {
    if ($modul == 'fakultas_ugm' AND $aksi == 'update') {
        mysql_query("UPDATE tbl_jurusan SET nm_jurusan   = '$_POST[nm_jurusan]',
                                         akreditasi      = '$_POST[akreditasi]',
                                              biaya      = '$_POST[biaya]'
                           WHERE  id_jurusan       = '$_POST[id]'");
        echo "<script type='text/javascript'>alert('Data berhasil diuabah!');</script>";
        echo "<meta http-equiv='REFRESH' content='0;url=../../?mod=$modul'>";
    }
}
?>