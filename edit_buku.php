<?php 
include "koneksi.php";

$buku = $_GET['id'];
$sql = "SELECT * FROM data_buku WHERE kode_buku = '$buku'";
$query = mysqli_query($connect, $sql);

$dabuk = mysqli_fetch_array($query);

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
    
    <style>
        <?php include "css/edit_buku.css" ?>
    </style>
    <title>Ubah Data Buku</title>
</head>
<body>
     <!-- sidebar -->
     <div class="sidebar">
        <div class="head">
            <p>Zerone App</p>
        </div>

        <ul>
            <li><a href="tampil_siswa.php"  class="side-siswa">Data Siswa</a></li>
            <li><a href="tampil_buku.php"  class="side-buku">Data Buku</a></li>
        </ul>
    </div>
    <!-- contetn -->
    <div class="judul">
            <p>Ubah Data Buku</p>
        </div>

    <form action="update_buku.php" method="POST">
        <!-- card -->
        <div class="card">
            <table cellpadding="10" cellspacing="0">
                <tr>
                    <th></th>
                    <th></th>
                    <th><input type="hidden" class="text-box" name="kode_buku" value="<?= $dabuk['kode_buku']?>"></th>
                </tr>
                <tr>
                    <th>JUDUL BUKU</th>
                    <th>:</th>
                    <th><input type="text" class="text-box" name="judul_buku" value="<?= $dabuk['judul_buku']?>"></th>
                </tr>
                <tr>
                    <th>PENGARANG</th>
                    <th>:</th>
                    <th><input type="text" class="text-box" name="pengarang" value="<?= $dabuk['pengarang']?>"></th>
                </tr>
                <tr>
                    <th>PENERBIT</th>
                    <th>:</th>
                    <th><input type="text" class="text-box" name="penerbit" value="<?= $dabuk['penerbit']?>"></th>
                </tr>
                <tr>
                    <th>TAHUN TERBIT</th>
                    <th>:</th>
                    <th><input type="text" class="text-box" name="thn_terbit" value="<?= $dabuk['thn_terbit']?>"></th>
                </tr>
            </table>
            <input type="submit" class="btn_edit" name="submit" onclick=" return confirm('Apakah anda yakin ingin mengubah data tersebut?');" value="Save Edit">
            <a href="tampil_buku.php" class="btn_back">Back</a>
        </div>
    </form>
</body>
</html>