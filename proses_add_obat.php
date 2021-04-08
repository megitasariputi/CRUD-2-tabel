<?php 
    require_once 'mysqli_koneksi.php';

    // perintah SQL obat
    $id_obat = $_POST['id_obat'];
    $kategori = $_POST['kategori'];
    $nama_obat = $_POST['nama_obat'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $farmasi = $_POST['farmasi'];

    $sql = "INSERT INTO tb_obat VALUES('$id_obat','$kategori','$nama_obat','$harga','$stok','$farmasi')";

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