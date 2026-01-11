<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // app/Http/Controllers/HomeController.php

    $data = [
        'meta' => [
            "title" => "EdwarMaker | Partner Digital Bisnis Kamu",
            "desc" => "Tempat di mana ide bisnis UKM dan perusahaan berkembang diubah menjadi aplikasi canggih yang mudah digunakan.",
            "url" => url('/'),
        ],
        'hero' => [
            "headline_pre" => "Halo, Calon Raksasa Bisnis.",
            "headline_main" => "Bikin Bisnis Kamu Punya 'Sayap' Digital", // Lebih imajinatif & sederhana
            "subheadline" => "Punya ide liar tapi bingung cara bikinnya? Atau pengen sistem HRD yang gak bikin pusing? Tenang, di sini tempatnya teknologi dibuat jadi sederhana dan membumi.",
            "cta_primary" => "Lihat Karya Saya",
            "cta_secondary" => "Ngobrol Santai Dulu",
            "stats" => [
                ["label" => "Aplikasi Jadi", "val" => "15+"],
                ["label" => "Partner Happy", "val" => "100%"],
                ["label" => "Akurasi Genetik", "val" => "STIFIn"]
            ]
        ],
        'profile' => [
            "intro" => "Kenalin, Saya Edwar.",
            "story" => "Saya percaya teknologi itu gak harus rumit. Misi saya cuma satu : Membantu bisnis Anda (ya, Anda!) naik kelas lewat aplikasi yang pas di hati dan pas di logika. Dari urusan karyawan sampai urusan jodoh, saya buat sistemnya. Disinilah tempat tumbuh akar masa depan dimulai 'Karena keberlanjutan tidak lahir dari permukaan.'",
            "philosophy" => "Canggih itu wajib. Tapi 'dimengerti manusia' itu segalanya.",
            "skills" => ["Pawang Coding", "Konsultan STIFIn", "Strategi Bisnis", "Desain UI/UX"]
        ],
        'products' => [
            [
                "category" => "HRD System",
                "title" => "HRD Anti-Ribet",
                "desc" => "Ngurus karyawan gak perlu drama. Sistem ini ngenalin karakter tim kamu (STIFIn), jadi nempatin orang gak bakal salah posisi lagi.",
                "status" => "Unggulan"
            ],
            [
                "category" => "Komunitas",
                "title" => "Green Cycle Hub",
                "desc" => "Buat kamu yang peduli bumi. Komunitas daur ulang dengan sistem poin digital. Jadi pahlawan lingkungan makin seru.",
                "status" => "Konsep"
            ],
            [
                "category" => "Lifestyle",
                "title" => "Jodoh Genetik (SoulMate)",
                "desc" => "Cari pasangan kok coba-coba? Pakai algoritma genetik biar nemu yang 'klik' secara alamiah. Ilmiah banget, nih!",
                "status" => "Segera"
            ],
            [
                "category" => "Bisnis UKM",
                "title" => "Kasir Pintar (POS)",
                "desc" => "Aplikasi kasir yang tau cara ngerayu pelanggan balik lagi. Bukan cuma catat duit, tapi catat peluang.",
                "status" => "Siap Pakai"
            ],
            [
                "category" => "Sosial",
                "title" => "Edu-Connect",
                "desc" => "Sosmednya para pembelajar. Isinya ilmu daging semua, bebas dari konten joget-joget yang gak jelas.",
                "status" => "Development"
            ],
            [
                "category" => "Amal",
                "title" => "Jariyah Tech",
                "desc" => "Platform donasi yang transparan. Pahala ngalir terus, laporannya update real-time.",
                "status" => "Non-Profit"
            ]
        ],
        // BAGIAN BAWAH BARU: KHUSUS UKM & PERUSAHAAN BERKEMBANG
        'ukm_offer' => [
            "title" => "UKM Waktunya Scale-Up!",
            "desc" => "Masih pakai cara manual? Sayang energinya. Yuk, buatkan aplikasi khusus untuk bisnis Anda. Biar sistem yang kerja keras, Anda yang nikmati hasilnya.",
            "cta" => "Konsultasi Gratis Sekarang"
        ]
    ];

        return view('home', $data);
    }
}