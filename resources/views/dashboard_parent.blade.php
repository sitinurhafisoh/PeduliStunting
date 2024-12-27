<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PeduliStunting</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #e0f7fa;
            color: #333;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #b2ebf2;
            padding: 20px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            color: #00A0B2;
        }
        nav {
            background-color: #80deea;
            padding: 10px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        nav a {
            margin: 0 15px;
            color: #fff;
            text-decoration: none;
        }
        .container {
            display: flex;
            justify-content: space-around;
            padding: 20px;
            flex-wrap: wrap;
        }
        .feature {
            background-color: #00bcd4;
            border-radius: 10px;
            padding: 20px;
            width: 220px;
            text-align: center;
            color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin: 10px;
            transition: transform 0.3s;
        }
        .feature img {
            width: 100%; /* Memperbesar gambar */
            height: auto; /* Menjaga proporsi gambar */
            max-height: 120px; /* Mengatur tinggi maksimum */
            margin-bottom: 10px;
        }
        .feature:hover {
            transform: scale(1.05);
        }
        footer {
            background-color: #bdbdbd;
            text-align: center;
            padding: 10px;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>PeduliStunting</header>
    <nav>
        <a href="#">Artikel Stunting</a>
        <a href="#">Resep MPASI</a>
        <a href="#">Nutrisi Ibu Hamil</a>
        <a href="#">Input Data Bayi</a>
    </nav>
    <div class="container">
        <div class="feature">
            <img src="./img/artikelstunting.jpg" alt="Artikel Stunting">
            <h3>Artikel Stunting</h3>
            <p>Informasi terkini tentang stunting.</p>
        </div>
        <div class="feature">
            <img src="./img/resepmpasi.png" alt="Resep MPASI">
            <h3>Resep MPASI</h3>
            <p>Resep sehat untuk MPASI.</p>
        </div>
        <div class="feature">
            <img src="./img/ibuhamil.jpg" alt="Nutrisi Ibu Hamil">
            <h3>Nutrisi Ibu Hamil</h3>
            <p>Panduan nutrisi untuk ibu hamil.</p>
        </div>
        <div class="feature">
            <img src="./img/databayi.jpg" alt="Input Data Bayi">
            <h3>Input Data Bayi</h3>
            <p>Masukkan data pertumbuhan bayi.</p>
        </div>
    </div>
    <footer>© 2024 Aplikasi Stunting</footer>
</body>
</html>