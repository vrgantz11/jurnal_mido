<?php

include "koneksi.php";

$query = "SELECT * FROM jurnal1";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query Error: " . mysqli_error($koneksi));
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jurnal Harian Siswa</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
    <style>
        body {
            background-image: url('../crudmodal/img/11.jpg');
            background-size: cover;
            background-position: center;
        }

        th {
            text-align: center;
        }
    </style>

</head>

<body>

    <div class="container">

        <div class="mt-3">
            <h2 class="text-center">Jurnal Harian Mido</h2>
            <h3 class="text-center">Semangat Mengerjakan Jangan lupa di isi setiap hari</h3>
        </div>

        <div class="card mt-3">
            <div class="card-header bg-dark text-white">
                Jurnal Harian Saya
            </div>
            <div class="card-body">

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-custom mb-3" data-bs-toggle="modal" data-bs-target="#modalTambah">
                    Tambah Data
                </button>

                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Timing</th>
                            <th>Kategori</th>
                            <th>Instruksi Dari</th>
                            <th>Target</th>
                            <th>Status</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Loop melalui setiap baris hasil query
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td><?php echo $row['timing']; ?></td>
                                <td><?php echo $row['kategori']; ?></td>
                                <td><?php echo $row['instruksi']; ?></td>
                                <td><?php echo $row['target']; ?></td>
                                <td><?php echo $row['status']; ?></td>
                                <td><?php echo $row['deskripsi']; ?></td>
                                <td>
                                    <div class="btn-group">
                                        <a href="edit_jurnal.php?id=<?php echo $row['id']; ?>" class="btn btn-success me-2"><i class="bi bi-pencil"></i></a>
                                        <a href="hapus_jurnal.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

                <!-- Awal Modal -->
                <div class="modal fade modal-lg" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data Jurnal</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form method="POST" action="aksi_jurnal.php">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Timing</label>
                                        <select class="form-select" name="ttiming">
                                            <option></option>
                                            <option value="Sebelum Istirahat">Sebelum istirahat</option>
                                            <option value="Setelah Istirahat">Setelah istirahat</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Kategori</label>
                                        <select class="form-select" name="tkategori">
                                            <option></option>
                                            <option value="Webinar">Webinar</option>
                                            <option value="Penilaian">Penilaian</option>
                                            <option value="Admin">Admin</option>
                                            <option value="Referensi">Referensi</option>
                                            <option value="Grafis">Grafis</option>
                                            <option value="Website">Website</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Instruksi Dari</label>
                                        <input type="text" class="form-control" name="tinstruksi" placeholder="Masukkan nama instruktur">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Target</label>
                                        <input type="text" class="form-control" name="ttarget" placeholder="Masukkan target Anda">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Status</label>
                                        <select class="form-select" name="tstatus">
                                            <option></option>
                                            <option value="Tercapai">Tercapai</option>
                                            <option value="Belum Tercapai">Belum Tercapai</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Deskripsi</label>
                                        <textarea class="form-control" name="tdeskripsi" rows="3"></textarea>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-custom" name="bsimpan">Simpan</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Akhir Modal -->
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>