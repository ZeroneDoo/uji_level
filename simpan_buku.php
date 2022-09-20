<?php 
include "koneksi.php";

if(isset($_POST['simpan'])){
    $kode_buku = $_POST['kode_buku'];
    $judul_buku = $_POST['judul_buku'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $thn_terbit = $_POST['thn_terbit'];

    $sql = "INSERT INTO data_buku VALUES ('$kode_buku', '$judul_buku', '$pengarang', '$penerbit', '$thn_terbit')";

    $query = mysqli_query($connect, $sql);

    if($query){
        header("Location: tampil_buku.php");
    }else{
        header("Location: simpan_buku.php?status='gagal'");
    }
}

?>