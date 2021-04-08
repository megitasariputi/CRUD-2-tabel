<?php
require_once 'mysqli_koneksi.php';

    // perintah SQL obat
    $id_obat = $_POST['id_obat'];
    $kategori = $_POST['kategori'];
    $nama_obat = $_POST['nama_obat'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $farmasi = $_POST['farmasi'];

        $sql = "UPDATE tb_obat SET id_obat='$id_obat', kategori='$kategori', nama_obat='$nama_obat', harga='$harga', stok='$stok', farmasi='$farmasi' WHERE id_obat='$id_obat'";

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