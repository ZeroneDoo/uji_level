<?php 
include "koneksi.php";

if(isset($_POST['submit'])){
    $kode_buku = $_POST['kode_buku'];
    $judul_buku = $_POST['judul_buku'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $thn_terbit = $_POST['thn_terbit'];

    $sql = "UPDATE data_buku SET judul_buku = '$judul_buku', pengarang = '$pengarang', penerbit = '$penerbit', thn_terbit = '$thn_terbit' WHERE kode_buku = '$kode_buku'";

    $query = mysqli_query($connect, $sql);

    if($query){
        header("Location: tampil_buku.php");
    }else{
        header("Location: update_buku.php?status='gagal'");
    }
    
}
?>