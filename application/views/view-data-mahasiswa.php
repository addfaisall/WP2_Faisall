<html>
    <head>
        <title>Tampilan Data Mahasiswa</title>
        <link rel="stylesheet" type="text"href=<?php echo base_url()?>>
    </head>

    <body>
        <center>
            <table>
                <tr>
                    <th colspan = "3">
                        Tampilan Data Mahasiswa
                    </th>
                </tr>

                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>

                <tr>
                    <th>Nama Mahasiswa</th>
                    <th>:</th>
                    <td>
                        <?= $nama; ?>
                    </td>
                </tr>

                <tr>
                    <td>NIS Mahasiswa</td>
                    <td>:</td>
                    <td>
                        <?= $nis; ?>
                    </td>
                </tr>

                <tr>
                    <td>Kelas Mahasiswa</td>
                    <td>:</td>
                    <td>
                        <?= $kelas; ?>
                    </td>
                </tr>

                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td>
                        <?= $tanggal; ?>
                    </td>
                </tr>

                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td>
                        <?= $tempat; ?>
                    </td>
                </tr>

                <tr>
                    <td>Alamat Tinggal</td>
                    <td>:</td>
                    <td>
                        <?= $alamat; ?>
                    </td>
                </tr>
                
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <?= $kelamin; ?>
                    </td>
                </tr>

                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td>
                        <?= $agama; ?>
                    </td>
                </tr>
                
                <tr>
                    <td colspan = "3" align = "center">
                        <a href="<?= base_url('mahasiswa');?>">Kembali Ke Menu</a>
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>