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
    <link rel="stylesheet" href="css/tampil_siswa.css">
    <title>Tampil Data Siswa</title>
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

    <div class="judul">
        <p>Data Siswa</p>
    </div>
    
    <!-- card -->
    <div class="card">
        <a href="tambah_siswa.html" class="btn_add">Add Siswa</a>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>NO</th>
                <th>ID SISWA</th>
                <th>NAMA SISWA</th>
                <th>KELAS</th>
                <th>JURUSAN</th>
                <th>ACTION</th>
            </tr>
        <?php 
        $sql = "SELECT * FROM data_siswa";
        $query = mysqli_query($connect, $sql);
        $no = 1;
    
        while($pel = mysqli_fetch_array($query)){
            echo "
            <tr>
                <td>$no.</td>
                <td>$pel[id_siswa]</td>
                <td>$pel[nama_siswa]</td>
                <td>$pel[kelas]</td>
                <td>$pel[jurusan]</td>
                <td>
                    <a href='edit_siswa.php?id=$pel[id_siswa]' class = \"btn_edit\">Edit</a>
                    <a href='hapus.php?id=$pel[id_siswa]' class = \"btn_delete\" onClick = \" return confirm('Apakah anda yakin ingin menghapus data ini?')\">Delete</a>
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