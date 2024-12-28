<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Tambah Resep MP-ASI</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .header-container {
            background-color: #00A9E0;
            color: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 30px;
        }
        .header-container h1 {
            font-size: 2.5rem;
            font-weight: bold;
        }
        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            background-color: #00A9E0;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0077b6;
        }
        .btn-secondary {
            border-color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <!-- Header Section -->
        <div class="header-container">
            <h1>Tambah Resep MP-ASI</h1>
            <p>Masukkan informasi resep MP-ASI dengan lengkap</p>
        </div>

        <!-- Form Section -->
        <div class="form-container">
            <form action="{{ url('/mpasi') }}" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="Judul_Resep">Judul Resep</label>
                    <input type="text" class="form-control" id="Judul_Resep" name="Judul_Resep" required>
                </div>
                <div class="form-group">
                    <label for="Deskripsi_Resep">Deskripsi Resep</label>
                    <textarea class="form-control" id="Deskripsi_Resep" name="Deskripsi_Resep" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label for="Bahan_Resep">Bahan-Bahan</label>
                    <textarea class="form-control" id="Bahan_Resep" name="Bahan_Resep" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <label for="Langkah_Resep">Langkah-Langkah</label>
                    <textarea class="form-control" id="Langkah_Resep" name="Langkah_Resep" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <label for="Gambar_Resep">Gambar Resep (Opsional)</label>
                    <input type="file" class="form-control-file" id="Gambar_Resep" name="Gambar_Resep">
                </div>
                <div class="d-flex justify-content-between">
                    <a href="{{ url('/mpasi/manage') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan Resep</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
