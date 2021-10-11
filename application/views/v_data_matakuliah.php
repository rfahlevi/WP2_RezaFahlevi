<html>
    <head>
        <title>Tampil Data Matakuliah</title>
    </head>
    <style>
        html, body {
            font-family: poppins;
        }

        table {
            border: 1px solid #cfdbd5;
            padding: 20px;
            border-radius: 10px;
        }
    </style>

    <body>
        <center>
            <table>
            <tr>
                <th colspan="3">
                Tampil Data Mata Kuliah
                </th>
            </tr>
            <tr>
                <td colspan="3">
                <hr>
                </td>
            </tr>
            <tr>
                <th>Kode MTK</th>
                <th>:</th>
                <td>
                <?= $kode; ?>
                </td>
            </tr>
            <tr>
                <td>Nama MTK</td>
                <td>:</td>
                <td>
                <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <td>SKS</td>
                <td>:</td>
                <td>
                <?= $sks; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                <a href="<?= base_url('matakuliah'); 
                ?>">Kembali</a>
                </td>
            </tr>
            </table>
        </center>
    </body>
</html>
