<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Link ke Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Rowdies&display=swap" rel="stylesheet">

    <!-- Link CSS Bootstrap (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Tambahkan gaya umum di sini */
        
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
            background-color: #e0f8f9;
            border: 1px solid #00acc1;
            border-radius: 10px;
            padding: 0.6rem 0.8rem;
            font-size: 0.9rem;
        }

        .form-control:focus {
            outline: none;
            box-shadow: 0 0 5px #00acc1;
        }

        .btn-primary {
            background-color: #00acc1;
            border: none;
            border-radius: 10px;
            padding: 0.6rem 0.8rem;
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
    </style>
</head>
<body>
    @yield('content')
    <!-- Bootstrap JS (CDN) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
