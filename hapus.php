<?php 
include "koneksi.php";

if(isset($_GET['id'])){
    $sql = "DELETE FROM data_siswa WHERE id_siswa = '$_GET[id]'";
    $query =mysqli_query($connect, $sql);

    if($query){
        header('Location: tampil_siswa.php');
    }
}

?>