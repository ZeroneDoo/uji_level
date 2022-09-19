<?php 
include "koneksi.php";

if(isset($_POST['simpan'])){
    $id_siswa = $_POST['id_siswa'];
    $nama_siswa = $_POST['nama_siswa'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];



    $sql = "INSERT INTO data_siswa VALUES ('$id_siswa', '$nama_siswa', '$kelas', '$jurusan')";
    $query = mysqli_query($connect, $sql);

    if($query){
        header("Location: tampil_siswa.php");
    }else{
        header("Location: simpan.php?status='gagal'");
    }
}

?>