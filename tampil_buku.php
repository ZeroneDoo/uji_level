<?php 
include "koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- font quicksand -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/e1031afe90.js" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>


    <!-- link css -->
    <style>
        <?php include "css/tampil_buku.css"; ?>
    </style>
    <title>Tampil Data Buku</title>
</head>
<body>
    <!-- sidebar -->
    <div class="sidebar">
        <div class="head">
            <p>Zerone App</p>
        </div>

        <ul>
            <li><a href="tampil_siswa.php"  class="side-siswa"><i class="fa-solid fa-users"></i>Data Siswa</a></li>
            <li><a href=""  class="side-buku"><i class="fa-solid fa-book"></i>Data Buku</a></li>
        </ul>
    </div>
    <!-- judul -->
    <div class="judul">
        <p>Data <span>Buku</span></p>
    </div>
    
    <!-- card -->
    <div class="card">
        <div class="top">
            <a href="tambah_buku.php" class="btn_add">Add Buku <i class="fa-solid fa-plus-circle"></i></a>
        
            <form action="tampil_buku.php" method="get">
                <input type="text" class="search-box" name="cari" placeholder="Cari..." value="<?php if(isset($_GET['cari'])){ echo $_GET['cari']; }?>">
                <button type="submit" class="btn-search"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>

        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Kode Buku</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Action</th>
            </tr>
        <?php 
        if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
            $sql = "SELECT * FROM data_buku WHERE kode_buku LIKE '%$cari%' OR judul_buku LIKE '%$cari%' OR pengarang LIKE '%$cari%' OR penerbit LIKE '%$cari%' OR thn_terbit LIKE '%$cari%'";
        }else{
            $sql = "SELECT * FROM data_buku";
        }
        $query = mysqli_query($connect, $sql);
        $no = 1;
    
        while($pel = mysqli_fetch_array($query)){
            echo "
            <tr>
                <td style=\" text-align : center;\">$no.</td>
                <td>$pel[kode_buku]</td>
                <td>$pel[judul_buku]</td>
                <td>$pel[pengarang]</td>
                <td>$pel[penerbit]</td>
                <td>$pel[thn_terbit]</td>
                <td>
                    <a href='edit_buku.php?id=$pel[kode_buku]' class = \"btn_edit\">Edit<i class=\"fa-solid fa-pen-to-square\"></i></a>
                    <a href='hapus_buku.php?id=$pel[kode_buku]' class = \"btn_delete\" onClick = \" return confirm('Apakah anda yakin ingin menghapus data ini?')\">Delete <i class=\"fa-solid fa-circle-minus\"></i></a>
                </td>
            </tr>
            ";
    
            $no++;
        }
        ?>
        </table>
    </div>

</body>
</html>