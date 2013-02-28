<?php

include "../../config/koneksi.php";
error_reporting(0);
$modul = $_GET[mod];
$aksi = $_GET[aksi];
if ($_SESSION['status'] == 1) {
    if ($modul == 'universitas' AND $aksi == 'update') {
        mysql_query("UPDATE tbl_universitas SET nama_pt   = '$_POST[nama_pt]',
                                         akreditasi       = '$_POST[akreditasi]',
                                         alamat     = '$_POST[alamat]',
                                         fakultas_terbaik      = '$_POST[fakultas]',
                                         fasilitas       = '$_POST[fasilitas]',
                                         komunitas       = '$_POST[komunitas]',
                                         biaya       = '$_POST[biaya]',
                                         website       = '$_POST[website]',
                                         email       = '$_POST[email]',
                                         no_telp       = '$_POST[telp]',
                                         no_fax       = '$_POST[fax]',
                                         info_pmb       = '$_POST[pmb]'
                
                           WHERE  id       = '$_POST[id]'");
        echo "<script type='text/javascript'>alert('Data berhasil diuabah!');</script>";
        echo "<meta http-equiv='REFRESH' content='0;url=../../?mod=$modul'>";
    }
}
?>