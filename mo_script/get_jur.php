<?php

include "../config/koneksi.php";

if (isset($_GET)) {
//mengambil nilai id
$id = (int) $_GET["kode"];

$sql = mysql_query("select * from tbl_jurusan where id_jurusan='$id'");
$data = mysql_fetch_array($sql);

echo "Nama Jurusan : ".$data['nm_jurusan'];
echo "\nAkreditasi : ".$data['akreditasi'];
echo "\nBiaya per Semester : ".$data['biaya'];

}
mysql_close($konek);

?>