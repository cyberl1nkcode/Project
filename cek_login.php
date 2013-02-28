<?php

include 'config/koneksi.php';
$aksi = $_GET['op'];
if ($aksi == "in") {
    if (isset($_POST['username'], $_POST['password'])) {
        if (get_magic_quotes_gpc()) {
            $username = mysql_real_escape_string(stripslashes($_POST['username']));
            $password = stripslashes($_POST['password']);
        } else {
            $username = mysql_real_escape_string($_POST['username']);
            $password = $_POST['password'];
        }
        $req = mysql_query('select nama,password,id_user, status from tbl_user where username="' . $username . '"');
        $dn = mysql_fetch_array($req);
        if ($dn['password'] == md5($password) and mysql_num_rows($req) > 0) {

            $_SESSION['username'] = $_POST['username'];
            $_SESSION['id_user'] = $dn['id_user'];
            $_SESSION['status'] = $dn['status'];
            $_SESSION['nama'] = $dn['nama'];
            echo "<script type='text/javascript'>window.location = 'index.php';</script>";
        } else {
            echo "<script type='text/javascript'>alert('username atau password salah!');</script>
		 <meta http-equiv='REFRESH' content='0;url=login.php'>";
        }
    } else {
        echo "<script type='text/javascript'>window.location = 'login.php';</script>";
    }
} else if ($aksi == "out") {
    unset($_SESSION['username'], $_SESSION['id_user'], $_SESSION['status'], $_SESSION['nama']);
    $_SESSION = array();
    session_destroy();
    echo "<script type='text/javascript'>alert('Logout Berhasil! Terimakasih telah menggunakan sistem kami');</script>
			<meta http-equiv='REFRESH' content='0;url=login.php'>";
}
?>