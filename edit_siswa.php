<?php 
include "koneksi.php";

$id_siswa = $_GET['id'];
$sql = "SELECT * FROM data_siswa WHERE id_siswa = '$id_siswa'";
$query = mysqli_query($connect, $sql);

$pel = mysqli_fetch_array($query);

if(mysqli_num_rows($query) < 1){
    die('Data tidak ditemukan');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- font quicksadn -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <!-- link css -->
    <link rel="stylesheet" href="css/edit_siswa.css">
    <title>Ubah Data Siswa</title>
</head>
<body>
<div class="judul">
        <p>Ubah Data Siswa</p>
    </div>

    <form action="edit.php">
        <div class="card">
            <table cellpadding="10" cellspacing="0">
                <tr>
                    <th>NAMA SISWA</th>
                    <th>:</th>
                    <th><input type="text" class="text-box" name="nama_siswa" value="<?= $pel['nama_siswa']?>"></th>
                </tr>
                <tr>
                    <th>KELAS</th>
                    <th>:</th>
                    <th><input type="text" class="text-box" name="kelas" value="<?= $pel['kelas']?>"></th>
                </tr>
                <tr>
                    <th>JURUSAN</th>
                    <th>:</th>
                    <th><input type="text" class="text-box" name="jurusan" value="<?= $pel['jurusan']?>"></th>
                </tr>
            </table>
            <input type="submit" class="btn_edit" name="submit" value="Save Edit">
            <a href="tampil_siswa.php" class="btn_back">Back</a>
        </div>
    </form>
</body>
</html>