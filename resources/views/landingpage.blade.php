@extends('layouts.app')

@section('title', 'Landing Page - Peduli Stunting')

@section('content')
<header>
    <div class="container d-flex justify-content-between align-items-center py-3">
        <h1 class="text-primary">PeduliStunting</h1>
        <nav>
            <ul class="nav">
                <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#service">Service</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

<section class="hero py-5" style="background-color: #e0f8f9;">
    <div class="container d-flex align-items-center">
        <div class="text-start">
            <h2 class="text-muted">Layanan Kesehatan Ibu dan Anak</h2>
            <h1 class="text-primary">Cegah Stunting Sejak Dini, Demi Masa Depan Negeri</h1>
            <p>Kami hadir untuk membantu masyarakat mendapatkan informasi yang tepat dan akses ke program-program yang mendukung tumbuh kembang anak secara optimal.</p>
            <a href="{{ route('signup') }}" class="btn btn-primary">Sign Up</a>
        </div>
        <div>
            <img src="{{ asset('img/rb_2148974790.png') }}" alt="Ilustrasi Anak Sehat" class="img-fluid">
        </div>
    </div>
</section>
@endsection
