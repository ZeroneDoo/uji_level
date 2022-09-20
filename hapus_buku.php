<?php 
include "koneksi.php";

if(isset($_GET['id'])){
    $sql = "DELETE FROM data_buku WHERE kode_buku = '$_GET[id]'";
    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: tampil_buku.php');
    }else{
        header('Location: hapus_buku.php?status="gagal"');
    }
}
?>