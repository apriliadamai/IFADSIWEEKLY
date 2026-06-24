<?php
 require 'fungsi.php';
 //if($koneksi)
//  {
//     echo "Koneksi Berhasil";
// }
$qmahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>WEB INFORMATIKA</h1>
    <hr>
    <table border="1" cellspacing="0" cellpadding="5px"> 
        <tr>
            <td><a href="index.php">Home</a>
            <td><a href="profile.php">Profile</a></td>
            <td><a href="contact.php">Contact</a></td>
        </tr>
    </table>
    <h2>Data Mahasiswa</h2>
    <a href="inputdata.php">
        <button>Tambah Data Mahasiswa</button>
    </a>
    <table border="1" cellpadding="5px">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jurusan</th>
                <th>Email</th>
                <th>no_hp</th>
                <th>Foto</th> 
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            foreach($qmahasiswa as $row) :
            ?>
        <tr>
            <td align="center"><?= $no++; ?></td>
            <td><?= htmlspecialchars($row['nama']);  ?></td>
            <td><?= htmlspecialchars($row['nim']);  ?></td>
            <td><?= htmlspecialchars($row['jurusan']);  ?></td>
            <td><?= htmlspecialchars($row['email']);  ?></td>
            <td><?= htmlspecialchars($row['no_hp']);  ?></td>
            <td align="center">
                <?php if (!empty($row['foto'])): ?>
                    <img src="assets/images/<?= $row['foto']; ?>"width="120px" alt="Foto <?= $row['nama']; ?>">
                <?php else: ?>
                    <img src="assets/images/fotomh.jpg" width="120px" alt="No Image">
                <?php endif; ?>
            </td>
            <td>
                <a href="editdata.php?id=<?= $row['id']; ?>">
                    <button>EDIT</button>
                </a> 
            <a href="deletedata.php?id=<?= $row['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                <button>DELETE</button>
            </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</body>
</html>