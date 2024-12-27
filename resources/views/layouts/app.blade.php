<?php
    // Data untuk menu navigasi dan teks
    $logo = "PeduliStunting";
    $menu = [
        'Home' => '#home',
        'About' => '#about',
        'Service' => '#service',
        'Contact' => '#contact'
    ];
    $heroTitle = "Cegah Stunting Sejak Dini, Demi Masa Depan Negeri";
    $heroDescription = "Kami hadir untuk membantu masyarakat mendapatkan informasi yang tepat dan akses ke program-program yang mendukung tumbuh kembang anak secara optimal.";
    $buttonText = "Sign Up";
    $imagePath = "rb_2148974790.png";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $logo; ?></title>
    <!-- Link ke Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Rowdies&display=swap" rel="stylesheet">

    <!-- Link CSS Bootstrap (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    
    <style>
        /* Reset margin dan padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body styling */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        /* Header container */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
            background-color: #f8fafa;
        }

        /* Logo styling */
        .logo {
            color: #00A0B2;
            font-family: 'Poppins', sans-serif;
            font-size: 1.5;
            font-weight: bold;
        }
        
        /* Navigation Menu */
        nav ul {
            list-style: none;
            display: flex;
            gap: 30px;
        }

        nav ul li a {
            text-decoration: none;
            color: #555;
            font-weight: bold;
        }

        nav ul li a:hover {
            color: #00A4C7;
        }

        /* Profile Icon */
        .profile-icon {
            width: 40px;
            height: 40px;
            background-color: #ddd;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2em;
            color: #777;
        }

        /* Main Content */
        .hero {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 50px;
            background-color: #e0f8f9;
        }
        /* Styling untuk Hero Text (Rata kiri) */
        .hero-text {
            text-align: left; /* Menambahkan rata kiri pada semua teks dalam .hero-text */
        }

        .hero-text h1 {
            font-family: 'Rowdies', cursive; /* Menggunakan font Rowdies */
            color: #00A4C7;
            font-size: 2.5em;
            margin-bottom: 10px;
        }
        .hero-text p {
            margin-bottom: 20px;
            color: #555;
            font-size: 1em;
            font-family: 'Poppins', sans-serif;
        }

        .hero-text button {
            padding: 10px 20px;
            background-color: #00A4C7;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
        }

        .hero-text button:hover {
            background-color: #008ba3;
        }

        /* Image Section */
        .hero-image img {
            max-width: 100%;
            height: auto;
        }

        /* Styling untuk Layanan Kesehatan Ibu dan Anak */
        .hero-text h2 {
            font-size: 1em;
            color: #555;
            margin-bottom: 10px;
            font-family: 'Poppins', sans-serif;
        }

        /* Contact Section */
        .contact-container {
            background-color: #00a5b8;
            color: white;
            padding: 50px 20px;
            text-align: center;
        }
        .contact-container h1 {
            font-size: 2rem;
            margin-bottom: 30px;
        }
        .contact-grid {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            max-width: 800px;
            margin: 0 auto;
        }
        .contact-column {
            flex: 1;
            margin: 10px;
            min-width: 200px;
            text-align: left;
        }
        .contact-column h2 {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }
        .contact-column p {
            margin: 5px 0;
        }
        .contact-column a {
            color: white;
            text-decoration: none;
        }
        .contact-column a:hover {
            text-decoration: underline;
        }
        /* Styling untuk bagian Service */
        #service {
            background-color: #e0f8f9; /* Warna yang sama dengan About */
            padding: 50px 0; /* Tambahkan padding jika diperlukan */
        }
        .service-card {
            border: 1px solid #f8fafa;
            border-radius: 15px;
            padding: 20px;
            transition: transform 0.3s;
            background-color: #fff; /* Latar belakang putih */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        .service-card:hover {
            transform: scale(1.05);
        }
        .service-card img {
            max-width: 100%; /* Maksimal lebar gambar 100% dari kontainer */
            height: auto;    /* Pertahankan proporsi gambar */
            display: block;  /* Menghindari spasi di bawah gambar */
            margin: 0 auto; /* Pusatkan gambar jika diperlukan */
        }
        .service-card img {
            width: 100%; /* Atur lebar 100% dari kontainer */
            height: 150px; /* Atur tinggi sesuai kebutuhan */
            object-fit: cover; /* Memotong gambar agar sesuai dengan kontainer */
        }
            </style> 
</head>
<body>
    @yield('content')
    <!-- Bootstrap JS (CDN) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
