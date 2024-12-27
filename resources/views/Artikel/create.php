<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Tambah Artikel</title>
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
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mb-4" style="color: #00acc1;">Tambah Artikel</h1>
        <form action="{{ url('/Artikel') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="Judul_Article">Judul Artikel</label>
                <input type="text" class="form-control" id="Judul_Article" name="Judul_Article" required>
            </div>
            <div class="form-group">
                <label for="Konten_Art">Konten Artikel</label>
                <textarea class="form-control" id="Konten_Art" name="Konten_Art" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="Gambar_Art">Gambar Artikel</label>
                <input type="file" class="form-control-file" id="Gambar_Art" name="Gambar_Art">
            </div>
            <button type="submit" class="btn btn-primary">Simpan Artikel</button>
            <a href="{{ url('/Artikel/manage') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>
