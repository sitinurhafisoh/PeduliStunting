<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function showLandingPage()
    {
        $data = [
            'logo' => 'PeduliStunting',
            'menu' => [
                'Home' => '#home',
                'About' => '#about',
                'Service' => '#service',
                'Contact' => '#contact',
            ],
            'heroTitle' => 'Cegah Stunting Sejak Dini, Demi Masa Depan Negeri',
            'heroDescription' => 'Kami hadir untuk membantu masyarakat mendapatkan informasi yang tepat dan akses ke program-program yang mendukung tumbuh kembang anak secara optimal.',
            'buttonText' => 'Sign Up',
            'imagePath' => './img/rb_2148974790.png',
        ];

        return view('landingpage', $data);
    }
}
