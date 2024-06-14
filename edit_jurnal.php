<?php
// Panggil koneksi database
include "koneksi.php";

// Pastikan ID dikirim melalui URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk mengambil data berdasarkan ID
    $query = "SELECT * FROM jurnal1 WHERE id = $id";
    $result = mysqli_query($koneksi, $query);

    // Periksa apakah data ditemukan
    if (mysqli_num_rows($result) == 1) {
        // Ambil data dari hasil query
        $row = mysqli_fetch_assoc($result);
?>
        <!doctype html>
        <html lang="en">

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Edit Jurnal</title>
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
            <style>
                body {
                    background-image: url('../crudmodal/img/13.jpg');
                    /* Ganti 'nama_gambar.jpg' dengan path gambar yang ingin Anda gunakan */
                    background-size: cover;
                    /* Untuk menyesuaikan ukuran gambar dengan ukuran window browser */
                    background-position: center;
                    /* Untuk memposisikan gambar di tengah halaman */
                }
            </style>

        </head>

        <body>
            <div class="container">
                <h1 class="text-center mt-4 mb-4">Edit Jurnal</h1>
                <form method="POST" action="aksi_edit_jurnal.php">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <div class="modal-body">
                        <div class="mb-2">
                            <select class="form-select" name="ttiming">
                                <option value="Sebelum Istirahat" <?php if ($row['timing'] == "Sebelum Istirahat") echo "selected"; ?>>Sebelum istirahat</option>
                                <option value="Setelah Istirahat" <?php if ($row['timing'] == "Setelah Istirahat") echo "selected"; ?>>Setelah istirahat</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <select class="form-select" name="tkategori">
                                <option value="Webinar" <?php if ($row['kategori'] == "Webinar") echo "selected"; ?>>Webinar</option>
                                <option value="Penilaian" <?php if ($row['kategori'] == "Penilaian") echo "selected"; ?>>Penilaian</option>
                                <option value="Admin" <?php if ($row['kategori'] == "Admin") echo "selected"; ?>>Admin</option>
                                <option value="Referensi" <?php if ($row['kategori'] == "Referensi") echo "selected"; ?>>Referensi</option>
                                <option value="Grafis" <?php if ($row['kategori'] == "Grafis") echo "selected"; ?>>Grafis</option>
                                <option value="Website" <?php if ($row['kategori'] == "Website") echo "selected"; ?>>Website</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <input type="text" class="form-control" name="tinstruksi" value="<?php echo $row['instruksi']; ?>">
                        </div>
                        <div class="mb-2">
                            <input type="text" class="form-control" name="ttarget" value="<?php echo $row['target']; ?>">
                        </div>
                        <div class="mb-2">
                            <select class="form-select" name="tstatus">
                                <option value="Tercapai" <?php if ($row['status'] == "Tercapai") echo "selected"; ?>>Tercapai</option>
                                <option value="Belum Tercapai" <?php if ($row['status'] == "Belum Tercapai") echo "selected"; ?>>Belum Tercapai</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <textarea class="form-control" name="tdeskripsi" rows="3"><?php echo $row['deskripsi']; ?></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary me-2" name="bsimpan">Simpan</button>
                        <a href="index.php" class="btn btn-danger">Batal</a>
                    </div>
                </form>
            </div>

        </body>

        </html>
<?php
    } else {
        echo "Data tidak ditemukan.";
    }
} else {
    echo "ID tidak ditemukan.";
}
?>