<?php 
    require_once 'mysqli_koneksi.php';

    // perintah SQL obat
    $id = $_GET['id_obat'];

    // Perintah SQL
    $sql = "DELETE FROM tb_obat WHERE id_obat = '$id'";

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