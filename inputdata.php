<?php
require "fungsi.php";
if(isset($_POST['submit']))
{
    if(inputdata($_POST) > 0)
    {
        echo "<script>
             alert('Data Berhasil Ditambahkan!');
             window.location.href='mahasiswa.php';
        </script>
        ";
    }
    else
    {
        echo "<script>
        alert('Data Gagal Ditambahkan!);
        window.location.href='mahasiswa.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <body>
    <h2>Tambah Data Mahasiswa</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <table cellpadding="5px">
            <tr>
                <td><label for="nama">Nama</label></td>
                <td>:</td>
                <td><input type="text" name="nama" id="nama" required /></td>
            </tr>
            <tr>
                <td><label for="nim">Nim</label></td>
                <td>:</td>
                <td><input type="number" name="nim" id="nim" required /></td>
            </tr>
            <tr>
                <td><label for="jurusan">Jurusan</label></td>
                <td>:</td>
                <td><input type="text" name="jurusan" id="jurusan" required /></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td>:</td>
                <td><input type="email" name="email" id="email" required /></td>
            </tr>
            <tr>
                <td><label for="nohp">No. HP</label></td>
                <td>:</td>
                <td><input type="number" name="no_hp" id="nohp" rquired /></td>
            </tr>
            <tr>
                <td><label for="foto">Foto</label></td>
                <td>:</td>
                <td><input type="file" name="foto" id="foto"/></td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <br>
                    <button type="submit" name="submit">Simpan</button>
                    <button type="reset">Reset</button>
                    <a href="mahasiswa.php"><button type="button">Kembali</button></a>
                </td>
            </tr>
        </table>
        <button type="submit" name="submit" id="submit">Tambah Data</button>
    </form>
</body>
</html>