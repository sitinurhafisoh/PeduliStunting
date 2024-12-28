<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Home - Kelola Resep MP-ASI</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .header-container {
            background-color: #00A9E0;
            color: white;
            padding: 30px;
            border-radius: 10px;
            margin-bottom: 30px;
            text-align: center;
        }
        .header-container h1 {
            font-size: 2.5rem;
            font-weight: bold;
            margin: 0;
        }
        .header-container p {
            margin: 0;
            font-size: 1.2rem;
        }
        .feature-section {
            padding: 20px 0;
        }
        .feature-card {
            background-color: #ffffff;
            border: 2px solid #00A9E0;
            border-radius: 10px;
            text-align: center;
            padding: 20px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        .feature-card:hover {
            background-color: #00A9E0;
            color: white;
            transform: translateY(-5px);
        }
        .feature-card h5 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }
        .feature-card p {
            font-size: 1rem;
        }
        .feature-card .btn {
            background-color: white;
            color: #00A9E0;
            border: 2px solid #00A9E0;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        .feature-card .btn:hover {
            background-color: white;
            color: #0077b6;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <!-- Header Section -->
        <div class="header-container">
            <h1>Selamat Datang di Kelola Resep MP-ASI</h1>
            <p>Membantu Anda membuat menu terbaik untuk si kecil</p>
        </div>

        <!-- Features Section -->
        <div class="feature-section">
            <div class="row">
                <!-- Kelola Resep -->
                <div class="col-md-6 mb-4">
                    <div class="feature-card">
                        <h5>Kelola Resep</h5>
                        <p>Lihat, tambah, edit, atau hapus resep MP-ASI sesuai kebutuhan Anda.</p>
                        <a href="{{ route('recipes.index') }}" class="btn">Kelola Resep</a>
                    </div>
                </div>

                <!-- Tambah Resep Baru -->
                <div class="col-md-6 mb-4">
                    <div class="feature-card">
                        <h5>Tambah Resep Baru</h5>
                        <p>Buat resep baru untuk si kecil dengan bahan-bahan bergizi.</p>
                        <a href="{{ route('recipes.create') }}" class="btn">Tambah Resep</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
