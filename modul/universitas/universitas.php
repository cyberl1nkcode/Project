<div class="text-section">
    <h1>Data Universitas</h1>
    <p>Ini adalah halaman menu data universitas
    </p>
</div>
<div class="text-isi">
    <?php
    $link = "modul/universitas/proses_universitas.php";

    switch ($_GET[aksi]) {
        default:
            ?>

            <table width="100%" bgcolor="#ccc" cellpadding="2" cellspacing="1" class="listview">
                <tr bgcolor="#D6F3FF" align="center">
                    <th>No.</th>
                    <th>Nama Universitas</th>
                    <th>Akreditasi</th>
                    <th>Website</th>
                    <th>No Telp</th>
                    <th colspan="1">Aksi</th>
                </tr>
                <?php
                $no = 1;
                $query = mysql_query("select * from tbl_universitas");
                while ($data = mysql_fetch_array($query)) {
                    ?>
                    <tr bgcolor='#fff'>
                        <td align='center'><?php echo $no; ?></td>
                        <td><?php echo $data['nama_pt']; ?></td>
                        <td align="center"><?php echo $data['akreditasi']; ?></td>
                        <td align="center"><a href="<?php echo $data['website']; ?>" target="_blank"><?php echo $data['website']; ?></a></td>
                        <td align="center"><?php echo $data['telp']; ?></td>
                        <td align="center"><a href="?mod=universitas&aksi=edit&id=<?php echo $data['id']; ?>" tittle="Edit Data Universitas"><img src='media/images/edit-icon.gif' border='0'/></a></td>

                    </tr>
                    <?php
                    $no++;
                }
                ?>
            </table><br/>

            <?php
            break;
        case 'edit':
            $id = (int) $_GET['id'];
            $q = mysql_query("select * from tbl_universitas where id='$id'");
            $data = mysql_fetch_array($q);
            ?>
            <div id="form-container">
                <h2>Edit Data Universitas</h2>
                <form action="<?php echo $link; ?>?mod=universitas&aksi=update" method="post">
                    <fieldset>
                        <div class="field">
                            <label for="Name">Nama Universitas </label>
                            <input type="text" value="<?php echo $data['nama_pt'] ?>" id="nama_pt" name="nama_pt" />
                            <input type="hidden" value="<?php echo $data['id'] ?>" name="id" />
                        </div>
                        <div class="field">
                            <label for="akreditasi">Akreditasi</label>
                            <input type="text" value="<?php echo $data['akreditasi'] ?>" name="akreditasi" />
                        </div>
                        <div class="field">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat"><?php echo $data['alamat'] ?></textarea>
                        </div>
                        <div class="field">
                            <label for="fakultas_terbaik">Fakultas Terbaik</label>
                            <textarea name="fakultas"><?php echo $data['fakultas_terbaik'] ?></textarea>
                        </div>
                        <div class="field">
                            <label for="Fasilitas">Fasilitas</label>
                            <textarea name="fasilitas"><?php echo $data['fasilitas'] ?></textarea>
                        </div>
                        <div class="field">
                            <label for="komunitas">Komunitas</label>
                            <textarea name="komunitas"><?php echo $data['komunitas'] ?></textarea>
                        </div>
                        <div class="field">
                       <div class="field">
                            <label for="biaya">Biaya</label>
                            <input type="text" value="<?php echo $data['biaya'] ?>" name="biaya" />
                        </div>
                            <label for="website">Website</label>
                            <input type="text" value="<?php echo $data['website'] ?>" name="website" />
                        </div>
                        <div class="field">
                            <label for="email">Email</label>
                            <input type="text" value="<?php echo $data['email'] ?>" name="email" />
                        </div>
                        <div class="field">
                            <label for="telp">No Telp</label>
                            <input type="text" value="<?php echo $data['no_telp'] ?>" name="telp" />
                        </div>
                        <div class="field">
                            <label for="fax">No Fax</label>
                            <input type="text" value="<?php echo $data['no_fax'] ?>" name="fax" />
                        </div>
                        
                        <div class="field">
                            <label for="pmb">Info PMB</label>
                            <textarea name="pmb"><?php echo $data['info_pmb'] ?></textarea>
                            </div>
                        
                        <div class="field">
                            <input type="submit" value="Update Data" class="submit-button" />
                        </div>
                    </fieldset>
            </div>
            <?php
            break;
    }
    ?>
</div>	