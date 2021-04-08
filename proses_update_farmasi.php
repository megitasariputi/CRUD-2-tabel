<?php
    require_once 'mysqli_koneksi.php';

    // perintah SQL farmasi
    $id_farmasi = $_POST['id_farmasi'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $telepon = $_POST['telepon'];

        $sql = "UPDATE tb_farmasi SET id_farmasi='$id_farmasi', nama='$nama', alamat='$alamat', kota='$kota', telepon='$telepon' WHERE id_farmasi='$id_farmasi'";

    // Eksekusi Perintah menampilkan ke tabel
    if ($conn->query($sql) === true) {
        echo "<script>alert('Berhasil Tersimpan');
                location.assign('admin.php');
                </script>";
    } else {
        echo "<script>alert('Gagal Tersimpan');
                location.assign('admin.php');
                </script>";
}
?>