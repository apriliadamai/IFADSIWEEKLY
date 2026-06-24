<?php
$koneksi = mysqli_connect(
    "localhost",
    "root",
    "root",
    "IFADSI"
);
function query($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi,$query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result))
        {
            $rows[] = $row;
        }
        return $rows;
}

function inputdata($data)
{
    global $koneksi;
    $nama = htmlspecialchars($_data["nama"]);
    $nim = $_data["nim"];
    $jurusan = $_data["jurusan"];
    $email = $_data["email"];
    $nohp = $_data["nohp"];
    $foto = $_data["foto"];

    $query = "INSERT INTO mahasiswa (nama,nim,jurusan,email,no_hp,foto)
    values ('$nama', '$nim', '$jurusan', '$email', '$no_hp', '$foto')";
}
?>