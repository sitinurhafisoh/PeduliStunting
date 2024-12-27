<?php
include '../koneksi.php';

// Periksa apakah form dikirim
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $namaLengkap = $_POST['namaLengkap'];
    $email = $_POST['email'];
    $nomorTelepon = $_POST['nomorTelepon'];
    $kataSandi = password_hash($_POST['kataSandi'], PASSWORD_BCRYPT);
    $role = $_POST['role']; // Ambil role dari form

    // Query untuk menyimpan data ke database
    $sql = "INSERT INTO users (NM_Lengkap, Email, No_Tlpn, sandi, role) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'sssss', $namaLengkap, $email, $nomorTelepon, $kataSandi, $role);

    if (mysqli_stmt_execute($stmt)) {
        echo "<script>alert('Pendaftaran berhasil!');</script>";
    } else {
        echo "script>alrt('Gagal mendaftar: " . mysqli_error($conn) . ");</script>";
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>
