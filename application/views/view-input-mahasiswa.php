<html>
    <head>
        <title>Menginput Data Mahasiswa</title>
    </head>

<body>
    <center>
        <?php echo validation_errors(); ?>
        <form action="<?= base_url ('mahasiswa/cetak'); ?>" method = "post">

        <table>
            <tr>
                <th colspan = "3">
                    Form Menginput Data Mahasiswa
                </th>
            </tr>
            <tr>
                <td colspan = "3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Nama Mahasiswa</th>
                <th>:</th>
                <td>
                    <input type="text" name="nama" id="nama">
                </td>
            </tr>
            <tr>
                <th>NIS Mahasiswa</th>
                <th>:</th>
                <td>
                    <input type="text" name="nis" id="nis">
                </td>
            </tr>
            <tr>
                <th>Kelas Mahasiswa</th>
                <th>:</th>
                <td>
                    <input type="text" name="kelas" id="kelas">
                </td>
            </tr>

            <tr>
                <th>Tanggal Lahir</th>
                <th>:</th>
                <td>
                    <input type="text" name="tanggal" id="tanggal">
                </td>
            </tr>
            
            <tr>
                <th>Tempat Lahir</th>
                <th>:</th>
                <td>
                    <input type="text" name="tempat" id="tempat">
                </td>
            </tr>
            

            <tr>
                <th>Alamat Tinggal</th>
                <th>:</th>
                <td>
                    <input type="text" name="alamat" id="alamat">
                </td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <th>:</th>
                <td><input type= "radio" name="kelamin" value="laki-laki">laki-laki 
                <input type="radio" name="kelamin" value="perempuan">perempuan    
                </td>
            </tr>
            <tr>
                <th>Agama</th>
                <td>:</td>
                <td>
                    <select name="agama" id="agama">
                        <option value="">Agama</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Budha">Budha</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Khonghucu">Khonghucu</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan = "3" align = "center">
                    <input type="submit" value="submit">
                </td>
            </tr>
        </table>
        </form>
    </center>
</body>
</html> 