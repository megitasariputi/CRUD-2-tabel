<?php 
    require_once 'mysqli_koneksi.php';

    // perintah SQL farmasi
    $id = $_GET['id_farmasi'];

    // Perintah SQL
    $sql = "DELETE FROM tb_farmasi WHERE id_farmasi = '$id'";

    // Eksekusi Perintah menerapkan ke tabel
    if ($conn->query($sql) === true) {
        echo "<script>alert('Berhasil Terhapus');
            location.assign('admin.php');
            </script>";
    } else {
        echo "<script>alert('Gagal Terhapus');
            location.assign('admin.php');
            </script>";
    }
?>