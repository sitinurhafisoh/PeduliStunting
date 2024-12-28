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
        .container {
            margin-top: 50px;
            background-color: #e0f7fa;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #00acc1;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mb-4">Tambah Resep MP-ASI</h1>
        <form action="{{ url('/mpasi') }}" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="Judul_Resep">Judul Resep</label>
                <input type="text" class="form-control" id="Judul_Resep" name="Judul_Resep" required>
            </div>
            <div class="form-group">
                <label for="Deskripsi_Resep">Deskripsi Resep</label>
                <textarea class="form-control" id="Deskripsi_Resep" name="Deskripsi_Resep" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="Bahan_Resep">Bahan-Bahan</label>
                <textarea class="form-control" id="Bahan_Resep" name="Bahan_Resep" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="Langkah_Resep">Langkah-Langkah</label>
                <textarea class="form-control" id="Langkah_Resep" name="Langkah_Resep" rows="6" required></textarea>
            </div>
            <div class="form-group">
                <label for="Gambar_Resep">Gambar Resep</label>
                <input type="file" class="form-control-file" id="Gambar_Resep" name="Gambar_Resep">
            </div>
            <button type="submit" class="btn btn-success">Simpan Resep</button>
            <a href="{{ url('/mpasi/manage') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>
