<?php
session_start();
include '../koneksi.php'; 
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $role = trim($_POST['role']);

    // Validasi input
    if (empty($email) || empty($password) || empty($role)) {
        echo "Semua field harus diisi!";
        exit;
    }

    // Query untuk memeriksa pengguna berdasarkan email dan role
    $query = "SELECT * FROM users WHERE Email = ? AND role = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $email, $role);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // Verifikasi password
        if (password_verify($password, $user['sandi'])) {
            // Login berhasil
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_role'] = $user['role'];
            $_SESSION['user_name'] = $user['NM_Lengkap'];

            if ($role === 'admin') {
                header("Location: dashboard_admin.php");
            } elseif ($role === 'parent') {
                header("Location: dashboard_parent.php");
            }
            exit;
        } else {
            echo "Kata sandi salah!";
        }
    } else {
        echo "Email atau role tidak ditemukan!";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Metode tidak valid!";
    exit;
}
?>
