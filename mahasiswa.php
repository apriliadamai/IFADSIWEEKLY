<?php
 $koneksi = mysqli_connect("localhost", "root", "root", "ifadsi");

 //if($koneksi)
//  {
//     echo "Koneksi Berhasil";
// }
$query = "SELECT * FROM mahasiswa";

$result = mysqli_query($koneksi, $query);

// while ($mhs = mysqli_fetch_assoc($result));
//     {
//         var_dump($mhs);
//     }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <body>
    <h1>WEB INFORMATIKA</h1>
    <hr>
    <table border="1" cellspacing="0" cellpadding="5px"> 
        <tr>
            <td>
                <a href="index.html">Home</a>
                <td><a href="profile.html">Profile</a></td>
                <td><a href="contact.html">Contact</a></td>
            </td>
        </tr>
    </table>
    <h2>Data Mahasiswa</h2>
    <a href="inputdata.html">
        <button>Tambah Data</button>
    </a>
    <table border="1" cellpadding="5px">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Email</th>
            <th>no_hp</th>
            <th>Foto</th> 
            
        </tr>
        
        <?php 
            while($mhs = mysqli_fetch_assoc($result))
            {
        
        ?>
        <tr>
            <td align="center">1</td>
            <td>Aprilia Damai</td>
            <td align="center">13182420020</td>
            <td align="center">Informatika</td>
            <td align="center">amecintaunimus@gmail.com</td>
            <td align="center">1234567890</td>
            <td align="center"><img src="assets/images/<?php echo $mhs["fotomh.jpg"] ?>" width="70" /></td>
            <td><a href="editdata.php"><button>EDIT</button></a> <a href="deletedata.php"><button>DELETE</button></a></td>

        </tr>
        <?php
            } 
        ?>
</body>
</html>