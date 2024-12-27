<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Peduli Stunting</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .header-container {
            background-color: #00A9E0;
            color: white;
            padding: 20px 30px;
            border-radius: 10px;
            margin-bottom: 30px;
        }
        .header-container h1 {
            font-size: 2rem;
            font-weight: bold;
            margin: 0;
        }
        .header-container p {
            margin: 0;
            font-size: 1.2rem;
        }
        .artikel-title {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }
        .card {
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        .card img {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            height: 200px;
            object-fit: cover;
        }
        .card-title {
            font-size: 1.1rem;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <!-- Header Section -->
        <div class="header-container">
            <h1>Artikel Stunting</h1>
            <p>Pilih artikel sesuai kebutuhan Anda</p>
        </div>

        <!-- Tombol Kembali ke Home -->
        <a href="{{ url('/') }}" class="btn btn-secondary mb-3">Kembali ke Home</a>
        
        <!-- Tombol Tambah Artikel Baru -->
        <a href="{{ route('articles.create') }}" class="btn btn-primary mb-3">Tambah Artikel Baru</a>

        <!-- Artikel Section -->
        <h2 class="artikel-title">Artikel Terbaru</h2>
        <div class="row">
            <!-- Artikel Card -->
            @foreach($articles as $article)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <div class="d-flex">
                                <a href="{{ url('/articles/' . $article->id . '/edit') }}" class="btn btn-warning mr-2">Edit</a>
                                <form action="{{ url('/articles/' . $article->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>