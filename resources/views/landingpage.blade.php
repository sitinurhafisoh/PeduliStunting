@extends('layouts.app')

@section('title', 'Landing Page - Peduli Stunting')

@section('content')
    <!-- Header -->
    <header>
        <div class="logo"><?php echo $logo; ?></div>
        <nav>
            <ul>
                <?php foreach ($menu as $name => $link): ?>
                    <li>
                        <a href="<?php echo $link; ?>"><?php echo $name; ?></a>
                    </li>
                <?php endforeach; ?>
                <?php if (!in_array('Service', array_keys($menu))): ?>
                    <li>
                        <a href="#">Service</a>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>
        <div>
            <div class="profile-icon">
                &#128100;
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-text">
            <!-- Tambahkan kalimat "Layanan Kesehatan Ibu dan Anak" -->
            <h2>Layanan Kesehatan Ibu dan Anak</h2>
            <h1><?php echo $heroTitle; ?></h1>
            <p><?php echo $heroDescription; ?></p>
            <button onclick="window.location.href='{{ route('signup') }}'"><?php echo $buttonText; ?></button>
        </div>
        <div class="hero-image">
          <img src="{{ asset($imagePath) }}" alt="Ilustrasi Anak Sehat">
        </div>
    </section>

        <!-- Bootstrap JS (CDN) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


    <section id="about" class="py-5" style="background-color: #f8f9fa; padding: 50px 80px;">
        <div class="container">
        <h1 class="text-center" style="color: #00A4C7;">About</h1>
            <div class="row align-items-center">
                <!-- Gambar Ilustrasi -->
                <div class="col-md-6 text-center">
                    <img src="./img/Gambarabout.png" alt="Ilustrasi Keluarga" class="img-fluid" style="max-width: 80%; height: auto;">
                </div>
                <!-- Teks Keterangan -->
                <div class="col-md-6">
                    <p>
                        Peduli Stunting adalah platform yang dirancang untuk mendukung pencegahan dan penanganan kasus stunting pada anak. Sistem ini dilengkapi berbagai fitur interaktif yang membantu pengguna, baik individu maupun admin, untuk mengakses informasi dan memantau perkembangan anak.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="service" class="py-5" >
        <div class="container text-center">
            <h2 class="mb-4" style="color: #00A4C7;">Service</h2>
            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="service-card">
                        <img src="{{ asset('img/data_perkembangan.png') }}" alt="Data Perkembangan Bayi">
                        <h5>Data Perkembangan Bayi</h5>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="service-card">
                        <img src="{{ asset('img/resep_mpasi.png') }}" alt="Resep MP-ASI">
                        <h5>Resep MP-ASI</h5>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="service-card">
                        <img src="{{ asset('img/nutrisi_ibu_hamil.png') }}" alt="Nutrisi Ibu Hamil">
                        <h5>Nutrisi Ibu Hamil</h5>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="service-card">
                        <img src="{{ asset('img/artikel_stunting.png') }}" alt="Artikel Stunting">
                        <h5>Artikel Stunting</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-container">
        <h1>Contact</h1>
        <div class="contact-grid">
            <div class="contact-column">
                <h2>Alamat Kantor</h2>
                <p>Jl. Sejahtera No. 45,</p>
                <p>Kelurahan Harmoni, Kecamatan Tumbuh Kembang,</p>
                <p>Kota Mandiri, Indonesia</p>
            </div>
            <div class="contact-column">
                <h2>Telepon</h2>
                <p>📞 (021) 123-4567</p>
                <h2>Email</h2>
                <p>📧 <a href="mailto:info@pedulistunting.id">info@pedulistunting.id</a></p>
            </div>
            <div class="contact-column">
                <h2>Sosial Media</h2>
                <p>Facebook: <a href="#">Peduli Stunting</a></p>
                <p>Instagram: <a href="#">@pedulistunting</a></p>
                <p>Twitter: <a href="#">@pedulistunting</a></p>
            </div>
        </div>
    </section>
@endsection
