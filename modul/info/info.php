<div class="text-section">
    <h1>Info Terbaru</h1>
    <p>Ini adalah halaman menu info terbaru
    </p>
</div>
<div class="text-isi">
    <?php
    $link = "modul/info/proses_info.php";

    switch ($_GET[aksi]) {
        default:
            ?>

            <table width="100%" bgcolor="#ccc" cellpadding="2" cellspacing="1" class="listview">
                <tr bgcolor="#D6F3FF" align="center">
                    <th>No.</th>
                    <th>Info</th>
                    <th>Tgl Info</th>

                    <th colspan="1">Aksi</th>
                </tr>
                <?php
                $no = 1;
                $query = mysql_query("select * from tbl_info");
                while ($data = mysql_fetch_array($query)) {
                    if ($data['status'] == "A"):
                        $st = "Aktif";
                    else:
                        $st = "Tidak Aktif";
                    endif;
                    ?>
                    <tr bgcolor='#fff'>
                        <td align='center'><?php echo $no; ?></td>
                        <td><?php echo $data['isi_info']; ?></td>
                        <td align="center"><?php echo tgl_indo($data['tgl_info']); ?></td>

                        <td align="center"><a href="<?php echo $link; ?>?mod=info_terbaru&aksi=hapus&id=<?php echo $data['id_info']; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')" tittle="Hapus Data Info"><img src='media/images/hapus-icon.gif' border='0'/></a></td>

                    </tr>
                    <?php
                    $no++;
                }
                ?>
            </table><br/>
            <a href="?mod=info_terbaru&aksi=tambah" class="button large teal">Tambah Info Terbaru</a>
            <?php
            break;
        case 'tambah':
            ?>
            <div id="form-container">
                <h2>Tambah Info Terbaru</h2>
                <form action="<?php echo $link; ?>?mod=info_terbaru&aksi=input" method="post">
                   <fieldset>
                        <div class="field">
                            <label for="Name">ISI INFO </label>
                            <textarea name="info"></textarea>
                        </div>
                        <div class="field">
                            <input type="submit" value="Tambah" class="submit-button" />
                        </div>
                    </fieldset>
                </form>
            </div>
            <?php
            break;
    }
    ?>
</div>	