<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Edit Artikel</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mb-4">Edit Artikel</h1>
        <form action="{{ url('/articles/' . $article->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Judul Artikel</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $article->title }}" required>
            </div>
            <div class="form-group">
                <label for="content">Konten Artikel</label>
                <textarea class="form-control" id="content" name="content" rows="5" required>{{ $article->content }}</textarea>
            </div>
            <div class="form-group">
                <label for="image">Gambar Artikel</label>
                <input type="file" class="form-control-file" id="image" name="image">
                <small class="form-text text-muted">Gambar saat ini: <img src="{{ asset('storage/' . $article->image) }}" alt="Current Image" style="max-width: 150px;"></small>
            </div>
            <button type="submit" class="btn btn-primary">Perbarui Artikel</button>
            <a href="{{ url('//manage') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>php