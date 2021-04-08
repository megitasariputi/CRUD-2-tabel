<?php
require_once 'mysqli_koneksi.php';
?>
<!doctype html>
<html lang="en">

<head>
    <title>Apotek Mart</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">
</head>

<body>
    <div class="card">
        <div class="card-header">
            <h3>Admin</h3>
        </div>

        <div class="card-body">
            <h3 align="center">MASTER DATA OBAT</h3>
            <form action="proses_add_obat.php" method="POST">
                <div class="form-group">
                    <input type="text" name="id_obat" class="form-control" placeholder="Masukan Id Obat" required />
                </div>
                <div class="form-group">
                    <input type="text" name="kategori" class="form-control" placeholder="Masukan Kategori" required />
                </div>
                <div class="form-group">
                    <input type="text" name="nama_obat" class="form-control" placeholder="Masukan Nama Obat" required></input>
                </div>
                <div class="form-group">
                    <input type="number" name="harga" class="form-control" placeholder="Masukan harga" required />
                </div>
                <div class="form-group">
                    <input type="number" name="stok" class="form-control" placeholder="Masukan stok" required />
                </div>
                <div class="form-group">
                    <input type="text" name="farmasi" class="form-control" placeholder="Masukan farmasi" required />
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-outline-dark">Submit</button>
                </div>
            </form>

            <?php
            $sql = "SELECT * FROM tb_obat ORDER BY id_obat ASC";
            $result = $conn->query($sql);
            ?>
            <table class="table table-bordered" id="myTable">
                <thead>
                    <tr align="center">
                        <th>No</th>
                        <th>Id Obat</th>
                        <th>Kategori</th>
                        <th>Nama Obat</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Farmasi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        $no = 1;
                        while ($row = $result->fetch_assoc()) {
                    ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $row['id_obat']; ?></td>
                                <td><?= $row['kategori']; ?></td>
                                <td><?= $row['nama_obat']; ?></td>
                                <td><?= $row['harga']; ?></td>
                                <td><?= $row['stok']; ?></td>
                                <td><?= $row['farmasi']; ?></td>
                                <td align="center">
                                    <div class="btn-group">
                                        <a href="proses_delete_obat.php?id_obat=<?= $row['id_obat']; ?>" onclick="return confirm('Sudah yakin dengan pilihan mu? yakin mau apus?')" class="btn btn-dark btn-sm"><i class="fas fa-trash"></i></a>

                                        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#obat" data-id_obat="<?= $row['id_obat']; ?>" data-kategori="<?= $row['kategori']; ?>" data-nama_obat="<?= $row['nama_obat']; ?>" data-harga="<?= $row['harga']; ?>" data-stok="<?= $row['stok']; ?>" data-farmasi="<?= $row['farmasi']; ?>"><i class="fas fa-edit" onclick="return confirm('Sudah yakin dengan pilihan mu? yakin mau edit?')"></i></button>
                                    </div>
                                </td>
                            </tr>
                    <?php
                            $no++;
                        }
                    }
                    ?>
                </tbody>
            </table>

            <br>
            <hr><br>
            <h3 align="center">MASTER DATA FARMASI</h3>
            <form action="proses_add_farmasi.php" method="POST">

                <div class="form-group">
                    <input type="text" name="id_farmasi" class="form-control" placeholder="Masukan Id Farmasi" required />
                </div>
                <div class="form-group">
                    <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required />
                </div>
                <div class="form-group">
                    <input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat" required></input>
                </div>
                <div class="form-group">
                    <input type="text" name="kota" class="form-control" placeholder="Masukan Kota" required></input>
                </div>
                <div class="form-group">
                    <input type="text" name="telepon" class="form-control" placeholder="Masukan Telepon" required></input>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-outline-dark">Submit</button>
                </div>
            </form>

            <?php
            $sql = "SELECT * FROM tb_farmasi ORDER BY id_farmasi ASC";
            $result = $conn->query($sql);
            ?>
            <table class="table table-bordered" id="myTable">
                <thead>
                    <tr align="center">
                        <th>No</th>
                        <th>Id Farmasi</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Kota</th>
                        <th>Telepon</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        $no = 1;
                        while ($row = $result->fetch_assoc()) {
                    ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $row['id_farmasi']; ?></td>
                                <td><?= $row['nama']; ?></td>
                                <td><?= $row['alamat']; ?></td>
                                <td><?= $row['kota']; ?></td>
                                <td><?= $row['telepon']; ?></td>
                                <td align="center">
                                    <div class="btn-group">
                                        <a href="proses_delete_farmasi.php?id_obat=<?= $row['id_farmasi']; ?>" onclick="return confirm('Sudah yakin dengan pilihan mu? yakin mau apus?')" class="btn btn-dark btn-sm"><i class="fas fa-trash"></i></a>

                                        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#farmasi" data-id_farmasi="<?= $row['id_farmasi']; ?>" data-nama="<?= $row['nama']; ?>" data-alamat="<?= $row['alamat']; ?>" data-kota="<?= $row['kota']; ?>" data-telepon="<?= $row['telepon']; ?>"><i class="fas fa-edit" onclick="return confirm('Sudah yakin dengan pilihan mu? yakin mau edit?')"></i></button>
                                    </div>
                                </td>
                            </tr>
                    <?php
                            $no++;
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- MODAL EDIT OBAT -->
    <div class="modal fade" id="obat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="obatLabel">Edit Obat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="proses_update_obat.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="id_obat" class="form-control edit-id_obat" placeholder="Masukan Id Obat" required readonly />
                        </div>
                        <div class="form-group">
                            <input type="text" name="kategori" class="form-control edit-kategori" placeholder="Masukan Kategori" required />
                        </div>
                        <div class="form-group">
                            <input type="text" name="nama_obat" class="form-control edit-nama_obat" placeholder="Masukan Nama Obat" required></input>
                        </div>
                        <div class="form-group">
                            <input type="number" name="harga" class="form-control edit-harga" placeholder="Masukan harga" required />
                        </div>
                        <div class="form-group">
                            <input type="number" name="stok" class="form-control edit-stok" placeholder="Masukan stok" required />
                        </div>
                        <div class="form-group">
                            <input type="text" name="farmasi" class="form-control edit-farmasi" placeholder="Masukan farmasi" required />
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-dark">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL EDIT FARMASI -->
    <div class="modal fade" id="farmasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="farmasiLabel">Edit Obat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="proses_update_farmasi.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="id_farmasi" class="form-control edit-id_farmasi" placeholder="Masukan Id Farmasi" required readonly />
                        </div>
                        <div class="form-group">
                            <input type="text" name="nama" class="form-control edit-nama" placeholder="Masukan Nama" required />
                        </div>
                        <div class="form-group">
                            <input type="text" name="alamat" class="form-control edit-alamat" placeholder="Masukan Alamat" required></input>
                        </div>
                        <div class="form-group">
                            <input type="text" name="kota" class="form-control edit-kota" placeholder="Masukan Kota" required></input>
                        </div>
                        <div class="form-group">
                            <input type="text" name="telepon" class="form-control edit-telepon" placeholder="Masukan Telepon" required></input>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-dark">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

    <script>
        $('#obat').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var id_obat = button.data('id_obat') // Extract info from data-* attributes
            var kategori = button.data('kategori')
            var nama_obat = button.data('nama_obat')
            var harga = button.data('harga')
            var stok = button.data('stok')
            var farmasi = button.data('farmasi')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-body .edit-id_obat').val(id_obat)
            modal.find('.modal-body .edit-kategori').val(kategori)
            modal.find('.modal-body .edit-nama_obat').val(nama_obat)
            modal.find('.modal-body .edit-harga').val(harga)
            modal.find('.modal-body .edit-stok').val(stok)
            modal.find('.modal-body .edit-farmasi').val(farmasi)
        });

        $('#farmasi').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var id_farmasi = button.data('id_farmasi') // Extract info from data-* attributes
            var nama = button.data('nama')
            var alamat = button.data('alamat')
            var kota = button.data('kota')
            var telepon = button.data('telepon')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-body .edit-id_farmasi').val(id_farmasi)
            modal.find('.modal-body .edit-nama').val(nama)
            modal.find('.modal-body .edit-alamat').val(alamat)
            modal.find('.modal-body .edit-kota').val(kota)
            modal.find('.modal-body .edit-telepon').val(telepon)
        });
    </script>
</body>

</html>