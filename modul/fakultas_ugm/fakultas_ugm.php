<div class="text-section">
    <h1>Data Jurusan di UGM</h1>
    <p>Ini adalah halaman menu data jurusan di ugm
    </p>
</div>
<div class="text-isi">
    <?php
    $link = "modul/fakultas_ugm/proses_fakultas_ugm.php";

    switch ($_GET[aksi]) {
        default:
            ?>

            <table width="100%" bgcolor="#ccc" cellpadding="2" cellspacing="1" class="listview">
                <tr bgcolor="#D6F3FF" align="center">
                    <th>No.</th>
                    <th>Nama Jurusan</th>
                    <th>Akreditasi</th>
                    <th>Biaya Tiap Semester</th>
                    
                    <th>Aksi</th>
                </tr>
                <?php
                $no = 1;
                $query = mysql_query("select * from tbl_jurusan");
                while ($data = mysql_fetch_array($query)) {
                    ?>
                    <tr bgcolor='#fff'>
                        <td align='center'><?php echo $no; ?></td>
                        <td><?php echo $data['nm_jurusan']; ?></td>
                        <td align="center"><?php echo $data['akreditasi']; ?></td>
                        <td align="center"><?php echo $data['biaya']; ?></td>
                        <td align="center"><a href="?mod=fakultas_ugm&aksi=edit&id=<?php echo $data['id_jurusan']; ?>" tittle="Edit Data Jurusan di UGM"><img src='media/images/edit-icon.gif' border='0'/></a></td>

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
            $q = mysql_query("select * from tbl_jurusan where id_jurusan='$id'");
            $data = mysql_fetch_array($q);
            ?>
            <div id="form-container">
                <h2>Edit Data Jurusan</h2>
                <form action="<?php echo $link; ?>?mod=fakultas_ugm&aksi=update" method="post">
                    <fieldset>
                        <div class="field">
                            <label for="Name">Nama Jurusan</label>
                            <input type="text" value="<?php echo $data['nm_jurusan'] ?>" name="nm_jurusan" />
                            <input type="hidden" value="<?php echo $data['id_jurusan'] ?>" name="id" />
                        </div>
                        <div class="field">
                            <label for="akreditasi">Akreditasi</label>
                            <input type="text" value="<?php echo $data['akreditasi'] ?>" name="akreditasi" />
                        </div>
                        <div class="field">
                            <label for="biaya">Biaya</label>
                            <input type="text" value="<?php echo $data['biaya'] ?>" name="biaya" />
                        </div>
                        <div class="field">
                            <input type="submit" value="Update Data" class="submit-button" />
                        </div>
                    </fieldset>
            </div>
            <?php
            break;
        case 'tambah':
            ?>
            <div id="form-container">
                <h2>Input Data Jurusan</h2>
                <form action="<?php echo $link; ?>?mod=fakultas_ugm&aksi=input" method="post">
                    <fieldset>
                        <div class="field">
                            <label for="Name">Nama Jurusan</label>
                            <input type="text" name="nm_jurusan" />
                        </div>
                        <div class="field">
                            <label for="akreditasi">Akreditasi</label>
                            <input type="text" name="akreditasi" />
                        </div>
                        <div class="field">
                            <label for="biaya">Biaya</label>
                            <input type="text" name="biaya" />
                        </div>
                        <div class="field">
                            <input type="submit" value="Tambah Data" class="submit-button" />
                        </div>
                    </fieldset>
            </div>
            <?php
    }
    ?>
</div>	