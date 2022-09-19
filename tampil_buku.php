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
    <!-- link css -->
    <link rel="stylesheet" href="css/tampil_buku.css">
    <title>Tampil Data Buku</title>
</head>
<body>
    <!-- sidebar -->
    <div class="sidebar">
        <div class="head">
            <p>Zerone App</p>
        </div>

        <ul>
            <li><a href="tampil_siswa.php"  class="side-siswa">Data Siswa</a></li>
            <li><a href=""  class="side-buku">Data Buku</a></li>
        </ul>
    </div>
    <!-- judul -->
    <div class="judul">
        <p>Data Buku</p>
    </div>
    
    <!-- card -->
    <div class="card">
        <a href="tambah_buku.html" class="btn_add">Add Buku</a>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>NO</th>
                <th>KODE BUKU</th>
                <th>JUDUL BUKU</th>
                <th>PENGARANG</th>
                <th>PENERBIT</th>
                <th>TAHUN TERBIT</th>
                <th>ACTION</th>
            </tr>
        <?php 
        $sql = "SELECT * FROM data_buku";
        $query = mysqli_query($connect, $sql);
        $no = 1;
    
        while($pel = mysqli_fetch_array($query)){
            echo "
            <tr>
                <td>$no</td>
                <td>$pel[kode_buku]</td>
                <td>$pel[judul_buku]</td>
                <td>$pel[pengarang]</td>
                <td>$pel[penerbit]</td>
                <td>$pel[thn_terbit]</td>
                <td>
                    <a href='edit_siswa.php?id=$pel[kode_buku]' class = \"btn_edit\">Edit</a>
                    <a href='hapus.php?id=$pel[kode_buku]' class = \"btn_delete\" onClick = \" return confirm('Apakah anda yakin ingin menghapus data ini?')\">Delete</a>
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