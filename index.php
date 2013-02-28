<?php
include "config/koneksi.php";
error_reporting(0);
if(empty($_SESSION['username']) AND empty($_SESSION['id_user']) ){
    echo "<script type='text/javascript'>window.location = 'login.php';</script>";
} else {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="media/images/lab-uin.png"/> 
        <title>
            Admin Panel Sistem Informasi Kampus
        </title>
        <link media="all" rel="stylesheet" type="text/css" href="media/css/all.css" />
        <link media="all" rel="stylesheet" type="text/css" href="media/css/tcal.css" />
        <link href="media/css/backoff.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="media/js/jquery.min.js"></script>
        <script type="text/javascript">window.jQuery || document.write('<script type="text/javascript" src="media/js/jquery-1.7.2.min.js"><\/script>');</script>
        <script type="text/javascript" src="media/js/jquery.main.js"></script>
        <script type="text/javascript" src="media/js/tcal.js"></script>
        <!--[if lt IE 9]><link rel="stylesheet" type="text/css" href="media/css/ie.css" /><![endif]-->
    </head>
    <body>
        <div id="wrapper">
            <div id="content">
                <div class="c1">
                    <div class="controls">
                        <nav class="links">
                            <ul>

                                <li><a href="index.php" class="home">Home</a></li>

                                <li><a href="?mod=universitas" class="ico3">Data Universitas Umum</a></li>
                                <li><a href="?mod=fakultas_ugm" class="ico3">Data Jurusan di UGM</a></li>
                                <li><a href="?mod=info_terbaru" class="ico3">Info Terbaru</a></li>
                                <li><a href="?mod=kontak" class="settings">Setting Kontak</a></li>
                            </ul>
                        </nav>
                        <div class="profile-box">
                            <span class="profile">
                                <div class="section">
                                    <img class="image" src="media/images/img1.png" alt="image description" width="26" height="26" />
                                    <span class="text-box">

                                        <strong class="name"><?php echo $_SESSION['nama']; ?></strong>
                                        <?php
                                        $st = $_SESSION['status'];
                                        if ($st == 1):
                                            echo "Administrator";
                                        endif;
                                        ?>
                                    </span>
                                </div>

                            </span>
                            <a href="cek_login.php?op=out" class="btn-on" alt="Logout/keluar dari Sistem" tooltip="Logout/keluar dari Sistem">On</a>
                        </div>
                    </div>
                    <div class="tabs">
                        <div class="tab">

                            <article>
                                <!-- isi konten !-->
                                <?php include "konten.php"; ?> 
                            </article>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Menu Sidebar !-->
            <aside id="sidebar">

            </aside>
        </div>
    </body>
</html>
<?php } ?>
