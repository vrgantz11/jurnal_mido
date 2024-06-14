<?php
include "koneksi.php";

// Pastikan ID dikirim melalui URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Query untuk menghapus data berdasarkan ID
    $query = "DELETE FROM jurnal1 WHERE id = $id";
    $result = mysqli_query($koneksi, $query);
    
    // Periksa apakah penghapusan berhasil
    if($result) {
        // Redirect kembali ke halaman utama atau tampilkan pesan sukses
        header("Location: index.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($koneksi);
    }
} else {
    echo "ID tidak ditemukan.";
}
?>
