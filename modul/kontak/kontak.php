<?php
$q = mysql_query("select * from tbl_user where id_user='$_SESSION[id_user]'");
$data = mysql_fetch_array($q);
$link="modul/kontak/proses_kontak.php";
?>
<div class="text-section">
    <h1>Setting Kontak Admin</h1>
    <p>Halaman untuk mengganti data kontak admin</p>
</div>
<div class="text-isi">
    <div id="form-container">
        <form action="<?php echo $link;?>?mod=kontak&aksi=update" method="post">
            <table width="100%"> 
                <tr>
                    <td>Username<br/>
                        <input type="text" name="username" value="<?php echo $data['username'] ?>" size="40" />
                        <input type="hidden" name="id" value="<?php echo $data['id_user'] ?>"  size="40" />
                    </td>
                </tr>
                <tr>
                    <td>Nama Lengkap<br/>
                        <input type="text" name="nama" value="<?php echo $data['nama'] ?>" size="40" />
                    </td>
                </tr>
                <tr>
                    <td>Alamat<br/>
                        <input type="text" name="alamat" value="<?php echo $data['alamat'] ?>" size="80" />
                    </td>
                </tr>
                <tr>
                    <td>No Telp<br/>
                        <input type="text" name="telp" value="<?php echo $data['telp'] ?>"  size="40" />
                    </td>
                </tr>
                <tr>
                    <td>Email<br/>
                        <input type="text" name="email" value="<?php echo $data['email'] ?>" size="40" />
                    </td>
                </tr>

                <tr height="30px">
                    <td><input type="submit" value="Update Data" name="simpan" class="submit-button"/></td>
                </tr>
            </table>
        </form>
    </div>
</div>
