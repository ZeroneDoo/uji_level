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
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/e1031afe90.js" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    
    <!-- font quicksadn -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <!-- link css -->
    <style>
        <?php include "css/edit_siswa.css"; ?>
    </style>
    <title>Ubah Data <span>Siswa</span></title>
</head>
<body>
     <!-- sidebar -->
    <div class="sidebar">
        <div class="head">
            <p>Zerone App</p>
        </div>

        <ul>
            <li><a href="tampil_siswa.php"  class="side-siswa"><i class="fa-solid fa-users"></i>Data Siswa</a></li>
            <li><a href="tampil_buku.php"  class="side-buku"><i class="fa-solid fa-book"></i>Data Buku</a></li>
        </ul>
    </div>
    <!-- contetn -->
    <div class="judul">
            <p>Ubah Data <span>Siswa</span></p>
        </div>

    <form action="edit.php" method="POST">
        <!-- card -->
        <div class="card">
            <table cellpadding="10" cellspacing="0">
                <tr>
                    <th></th>
                    <th></th>
                    <th><input type="hidden" class="text-box" name="id_siswa" value="<?= $pel['id_siswa']?>"></th>
                </tr>
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
            <button type="submit" class="btn_edit" name="submit" onclick=" return confirm('Apakah anda yakin ingin mengubah data tersebut?');"><i class="fa-solid fa-floppy-disk"></i> Save Edit</button>
            <a href="tampil_siswa.php" class="btn_back">Back</a>
        </div>
    </form>
</body>
</html>