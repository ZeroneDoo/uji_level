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


    <!-- font quicksand -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">

    <!-- link css -->
    <style>
        <?php include "css/tambah_siswa.css"; ?>
    </style>
    <title>Tambah Data Siswa</title>
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
    
    <!-- card -->
    <div class="judul">
        <p>Tambah Data <span>Siswa</span></p>
    </div>
    <form action="simpan.php" method="post">
        <div class="card">
            <table cellpadding="12" cellspacing="0">
                <tr>
                    <th>ID SISWA</th>
                    <th>:</th>
                    <th><input type="text" required="required" placeholder="Id Siswa" name="id_siswa" class="text-box"></th>
                </tr>
                <tr>
                    <th>NAMA SISWA</th>
                    <th>:</th>
                    <th><input type="text" required="required" placeholder="Nama Siswa" name="nama_siswa" class="text-box"></th>
                </tr>
                <tr>
                    <th>KELAS</th>
                    <th>:</th>
                    <th><input type="text" required="required" placeholder="Kelas" name="kelas" class="text-box"></th>
                </tr>
                <tr>
                    <th>JURUSAN</th>
                    <th>:</th>
                    <th><input type="text" required="required" placeholder="Jurusan" name="jurusan" class="text-box"></th>
                </tr>
            </table>
            <button type="submit" name="simpan" class="btn_create">Crate Siswa<i class="fa-solid fa-plus-circle"></i></button>
            <a href="tampil_siswa.php" class="btn_back">Back</a>
        </div>
    </form>
</body>
</html>