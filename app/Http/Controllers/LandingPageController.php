<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $company = [
            'name' => 'PT Java Digital Ponorogo',
            'phone' => '085156379282',
            'wa_link' => 'https://wa.me/6285156379282',
            'email' => 'admin@javadigitalponorogo.com',
            'address' => 'Jl. Kamukten RT 002 RW 002 Desa Karangan Kecamatan Balong Kabupaten Ponorogo',
        ];

        $services = [
            [
                'icon' => '📱',
                'title' => 'Pulsa All Operator',
                'description' => 'Melayani isi ulang pulsa semua operator dengan proses cepat, aman, dan terpercaya.',
            ],
            [
                'icon' => '🌐',
                'title' => 'Paket Data Internet',
                'description' => 'Pembelian paket internet berbagai operator dengan pilihan nominal yang lengkap.',
            ],
            [
                'icon' => '💡',
                'title' => 'Token Listrik PLN',
                'description' => 'Layanan pembelian token listrik prabayar untuk kebutuhan rumah tangga maupun usaha.',
            ],
            [
                'icon' => '🧾',
                'title' => 'Pembayaran Tagihan',
                'description' => 'Bayar BPJS, listrik pascabayar, PDAM, internet, TV kabel, dan tagihan bulanan lainnya.',
            ],
            [
                'icon' => '💳',
                'title' => 'Top Up E-Wallet',
                'description' => 'Top up DANA, OVO, GoPay, ShopeePay, dan dompet digital lainnya secara mudah.',
            ],
            [
                'icon' => '🛒',
                'title' => 'Pembayaran Online',
                'description' => 'Membantu pembayaran transaksi online seperti Shopee, marketplace, dan kebutuhan digital lainnya.',
            ],
            [
                'icon' => '📶',
                'title' => 'Jasa Internet WiFi',
                'description' => 'Melayani pemasangan internet WiFi rumah, toko, kantor, dan kebutuhan jaringan usaha.',
            ],
            [
                'icon' => '📹',
                'title' => 'Jasa Pasang CCTV',
                'description' => 'Melayani pemasangan CCTV untuk rumah, toko, kantor, gudang, dan area usaha lainnya.',
            ],
            [
                'icon' => '🛠️',
                'title' => 'Maintenance Jaringan',
                'description' => 'Perbaikan gangguan jaringan, setting ulang router, troubleshooting internet, dan perawatan berkala.',
            ],
            [
                'icon' => '🖥️',
                'title' => 'Instalasi Perangkat IT',
                'description' => 'Pemasangan perangkat pendukung seperti switch, modem, router, access point, dan perlengkapan jaringan lainnya.',
            ],
            [
                'icon' => '🏠',
                'title' => 'Layanan Teknisi Rumah & Usaha',
                'description' => 'Melayani kebutuhan teknisi untuk instalasi WiFi, CCTV, dan perangkat digital untuk rumah maupun tempat usaha.',
            ],
        ];

        $advantages = [
            'Proses transaksi cepat dan praktis',
            'Layanan digital dan teknisi dalam satu tempat',
            'Melayani pemasangan WiFi dan CCTV',
            'Cocok untuk kebutuhan pribadi, rumah, toko, dan kantor',
            'Pelayanan ramah dan responsif',
            'Siap melayani kebutuhan harian maupun instalasi lapangan',
        ];

        $steps = [
            [
                'number' => '01',
                'title' => 'Hubungi Admin',
                'description' => 'Silakan hubungi admin melalui WhatsApp untuk menyampaikan kebutuhan transaksi atau jasa pemasangan Anda.',
            ],
            [
                'number' => '02',
                'title' => 'Pilih Layanan',
                'description' => 'Pilih layanan yang Anda butuhkan, mulai dari pulsa, pembayaran online, WiFi, CCTV, hingga instalasi jaringan.',
            ],
            [
                'number' => '03',
                'title' => 'Konfirmasi Kebutuhan',
                'description' => 'Admin akan memberikan detail layanan, harga, dan jadwal pengerjaan sesuai kebutuhan Anda.',
            ],
            [
                'number' => '04',
                'title' => 'Layanan Diproses',
                'description' => 'Setelah konfirmasi, transaksi atau jasa pemasangan akan segera diproses dengan cepat dan profesional.',
            ],
        ];

        $testimonials = [
            [
                'name' => 'Rina',
                'message' => 'Pelayanannya cepat dan sangat membantu untuk pembayaran online. Respon admin juga ramah.',
            ],
            [
                'name' => 'Dimas',
                'message' => 'Pemasangan internet dan setting jaringannya rapi. Sangat membantu untuk usaha saya.',
            ],
            [
                'name' => 'Siti',
                'message' => 'Pemasangan CCTV bagus dan hasilnya memuaskan. Cocok untuk rumah maupun toko.',
            ],
        ];

        return view('landing', compact('company', 'services', 'advantages', 'steps', 'testimonials'));
    }
}