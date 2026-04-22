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
            'email' => 'admin@javadigital.my.id',
            'address' => 'Ponorogo, Jawa Timur, Indonesia',
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
        ];

        $advantages = [
            'Proses transaksi cepat dan praktis',
            'Pelayanan ramah dan responsif',
            'Layanan digital lengkap dalam satu tempat',
            'Cocok untuk kebutuhan pribadi maupun usaha',
            'Siap melayani transaksi harian secara konsisten',
            'Bisa digunakan sebagai solusi layanan PPOB dan pembayaran online',
        ];

        $steps = [
            [
                'number' => '01',
                'title' => 'Hubungi Admin',
                'description' => 'Silakan hubungi admin melalui WhatsApp untuk menyampaikan kebutuhan transaksi Anda.',
            ],
            [
                'number' => '02',
                'title' => 'Pilih Layanan',
                'description' => 'Pilih layanan yang Anda butuhkan, mulai dari pulsa, token, tagihan, hingga pembayaran online.',
            ],
            [
                'number' => '03',
                'title' => 'Lakukan Pembayaran',
                'description' => 'Admin akan memberikan detail pembayaran sesuai nominal layanan yang dipilih.',
            ],
            [
                'number' => '04',
                'title' => 'Transaksi Diproses',
                'description' => 'Setelah pembayaran dikonfirmasi, pesanan Anda akan segera diproses dengan cepat.',
            ],
        ];

        $testimonials = [
            [
                'name' => 'Rina',
                'message' => 'Pelayanannya cepat dan sangat membantu untuk pembayaran online. Respon admin juga ramah.',
            ],
            [
                'name' => 'Dimas',
                'message' => 'Beli pulsa dan token listrik di sini praktis. Cocok untuk langganan harian.',
            ],
            [
                'name' => 'Siti',
                'message' => 'Top up e-wallet dan bayar tagihan jadi lebih mudah, tidak perlu repot keluar rumah.',
            ],
        ];

        return view('landing', compact('company', 'services', 'advantages', 'steps', 'testimonials'));
    }
}