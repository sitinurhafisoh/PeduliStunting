<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 400px; /* Membatasi lebar form */
            width: 100%; /* Agar tetap responsif */
        }

        .form-control {
            background-color: #d6f8f9;
            border: none;
            border-radius: 30px;
            padding: 15px 20px;
            font-size: 0.9rem;
            color: #00A4C7;
            text-align: left;
        }

        .form-control:focus {
            outline: none;
            box-shadow: 0 0 5px #00A4C7;
        }

        .btn-primary {
            background-color: #00acc1;
            border: none;
            border-radius: 30px;
            padding: 15px 20px;
            font-size: 0.9rem;
        }

        .btn-primary:hover {
            background-color: #00838f;
        }

        .text-muted a {
            color: #00acc1;
        }

        .text-muted a:hover {
            text-decoration: underline;
        }

        h2 {
            font-size: 1.5rem;
            font-family: 'Poppins', sans-serif;
            color: #00a5b8;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Sign Up</h2>
        <form action="process_signup.php" method="POST">
            <!-- Nama Lengkap -->
            <div class="mb-3">
                <input type="text" name="namaLengkap" class="form-control" placeholder="Nama Lengkap" required>
            </div>
            <!-- Email -->
            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
            <!-- Nomor Telepon -->
            <div class="mb-3">
                <input type="text" name="nomorTelepon" class="form-control" placeholder="Nomor Telepon" required>
            </div>
            <!-- Kata Sandi -->
            <div class="mb-3">
                <input type="password" name="kataSandi" class="form-control" placeholder="Kata Sandi" required>
            </div>
            <!-- Konfirmasi Kata Sandi -->
            <div class="mb-3">
                <input type="password" name="kataSandi_confirmation" class="form-control" placeholder="Konfirmasi Kata Sandi" required>
            </div>
            <!-- Role -->
            <div class="mb-3">
                <select name="role" id="role" class="form-control" placeholder="Login sebagai" required>
                    <option value="" disabled selected>Pilih Role</option>
                    <option value="parent">Parent</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary w-100">Sign Up</button>
            <p class="text-center text-muted mt-3">Sudah punya akun? <a href="login.php">Login</a></p>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
