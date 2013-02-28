<?php

include "../config/koneksi.php";
if (isset($_GET)) {
//mengambil nilai id
    $id = (int) $_GET["kode"];
    if ($id == 10) {
        $q = mysql_query("select * from tbl_info where status='A' order by id_info desc");
        $no = 1;
        while ($dt = mysql_fetch_array($q)) {
            echo $no . " " . $dt['isi_info'] . "\n";

            $no++;
        }
    } elseif ($id == 11) {
        $q = mysql_query("select * from tbl_user where id_user='1'");
        $data = mysql_fetch_array($q);
        echo "Nama : " . $data['nama'];
        echo "\nNo Telp : " . $data['telp'];
        echo "\nAlamat : " . $data['alamat'];
        echo "\nEmail : " . $data['email'];
    }
    $nilai = (int) $_GET["data"];

    $sql = mysql_query("select * from tbl_universitas where id='$id'");
    $data = mysql_fetch_array($sql);

    switch ($nilai) {
        case 1:
            echo $data['alamat'];
            break;
        case 2:
            echo $data['info_pmb'];
            break;
        case 3:
            echo $data['akreditasi'];
            break;
        case 4:
            echo $data['fakultas_terbaik'];
            break;
        case 5:
            echo $data['biaya'];
            break;
        case 6:
            echo $data['komunitas'];
            break;
        case 7:
            echo $data['fasilitas'];
            break;
        case 8:
            echo "No Telp : " . $data['no_telp'];
            echo "\nNo Fax : " . $data['no_fax'];
            echo "\nEmail : " . $data['email'];
            echo "\nWebsite : " . $data['website'];
            break;
    }
    
}
mysql_close($konek);
?>