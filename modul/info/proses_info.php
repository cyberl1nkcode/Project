<?php

include "../../config/koneksi.php";

$modul = $_GET[mod];
$aksi = $_GET[aksi];
$id = (int) $_GET[id];
if ($_SESSION[status] == 1) {
    if ($modul == 'info_terbaru' AND $aksi == 'hapus') {
        mysql_query("delete from tbl_info where id_info='$id'");
        echo "<script type='text/javascript'>alert('Data kamar berhasil dihapus!');</script>";
        header('location:../../?mod=' . $modul);
    }

// Input datakamar
    elseif ($modul == 'info_terbaru' AND $aksi == 'input') {
        mysql_query("INSERT INTO tbl_info(tgl_info,isi_info) 
	                       VALUES(now(),'$_POST[info]')");
        header('location:../../?mod=' . $modul);
    }
}
?>