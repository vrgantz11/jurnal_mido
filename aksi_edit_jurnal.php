<?php
// Panggil koneksi database
include "koneksi.php";

// Pastikan ID dikirim melalui POST
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Ambil data dari form
    $timing = $_POST['ttiming'];
    $kategori = $_POST['tkategori'];
    $instruksi = $_POST['tinstruksi'];
    $target = $_POST['ttarget'];
    $status = $_POST['tstatus'];
    $deskripsi = $_POST['tdeskripsi'];

    // Query untuk mengupdate data di database
    $query = "UPDATE jurnal1 SET timing='$timing', kategori='$kategori', instruksi='$instruksi', target='$target', status='$status', deskripsi='$deskripsi' WHERE id=$id";

    // Jalankan query
    $result = mysqli_query($koneksi, $query);

    // Periksa apakah query berhasil dijalankan
    if ($result) {
        // Redirect kembali ke halaman utama atau tampilkan pesan sukses
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
} else {
    echo "ID tidak ditemukan.";
}
?>
