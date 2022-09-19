<?php 
include "koneksi.php";

if(isset($_POST['submit'])){
    $id_siswa = $_POST['id_siswa'];
    $nama_siswa = $_POST['nama_siswa'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    $sql = "UPDATE data_siswa SET nama_siswa = '$nama_siswa', kelas = '$kelas', jurusan = '$jurusan' WHERE id_siswa = '$id_siswa'";
    $query = mysqli_query($connect, $sql);

    if($query){
        echo "
        <script>
        document.location.href = 'tampil_siswa.php';
        </script>
        ";
    }else{
        header("Location: edit.php?status='gagal'");
    }
}

?>