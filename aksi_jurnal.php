<?php
include "koneksi.php";

// Ambil data dari form
$timing = $_POST['ttiming'];
$kategori = $_POST['tkategori'];
$instruksi = $_POST['tinstruksi'];
$target = $_POST['ttarget'];
$status = $_POST['tstatus'];
$deskripsi = $_POST['tdeskripsi'];

// Cek apakah data sudah lengkap
if ($timing && $kategori && $instruksi && $target && $status && $deskripsi) {
    // Query untuk menambahkan data ke database
    $query = "INSERT INTO jurnal1 (timing, kategori, instruksi, target, status, deskripsi) 
              VALUES ('$timing', '$kategori', '$instruksi', '$target', '$status', '$deskripsi')";
    
    // Jalankan query
    $result = mysqli_query($koneksi, $query);

    // Cek apakah query berhasil dijalankan
    if ($result) {
        // Redirect kembali ke halaman utama atau tampilkan pesan sukses
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
} else {
    echo "Semua kolom harus diisi.";
}
?>
