@extends('layouts.app')

@section('content')
    <section id="home" class="relative overflow-hidden bg-gradient-to-r from-brandRed via-red-700 to-gray-700 text-white">
        <div class="max-w-7xl mx-auto px-6 py-20 md:py-28 grid md:grid-cols-2 gap-12 items-center">
            <div>
                <span class="inline-block bg-white/15 border border-white/20 text-white text-sm px-4 py-2 rounded-full mb-5">
                    Layanan Digital Cepat & Praktis
                </span>

                <h2 class="text-4xl md:text-5xl font-extrabold leading-tight mb-6">
                    Solusi Pulsa, PPOB, dan Pembayaran Online dalam Satu Tempat
                </h2>

                <p class="text-lg text-red-50 leading-8 mb-8">
                    {{ $company['name'] }} hadir untuk membantu kebutuhan transaksi digital Anda,
                    mulai dari isi pulsa, paket data, token listrik, pembayaran tagihan,
                    top up e-wallet, hingga pembayaran online seperti Shopee dan layanan marketplace lainnya.
                </p>

                <div class="flex flex-wrap gap-4">
                    <a href="#layanan"
                       class="bg-white text-brandRed px-6 py-3.5 rounded-xl font-bold shadow hover:bg-gray-100 transition">
                        Lihat Layanan
                    </a>

                    <a href="{{ $company['wa_link'] }}" target="_blank"
                       class="bg-gray-900 text-white px-6 py-3.5 rounded-xl font-bold shadow hover:bg-black transition">
                        Chat WhatsApp
                    </a>
                </div>

                <div class="mt-10 grid grid-cols-2 md:grid-cols-3 gap-4 text-sm">
                    <div class="bg-white/10 rounded-2xl px-4 py-4 border border-white/10">
                        <p class="font-bold text-xl">⚡</p>
                        <p class="mt-2">Proses cepat</p>
                    </div>
                    <div class="bg-white/10 rounded-2xl px-4 py-4 border border-white/10">
                        <p class="font-bold text-xl">🔒</p>
                        <p class="mt-2">Transaksi aman</p>
                    </div>
                    <div class="bg-white/10 rounded-2xl px-4 py-4 border border-white/10">
                        <p class="font-bold text-xl">💬</p>
                        <p class="mt-2">Respon cepat</p>
                    </div>
                </div>
            </div>

            <div>
                <div class="bg-white rounded-3xl shadow-2xl p-8 text-gray-800">
                    <div class="mb-6">
                        <h3 class="text-2xl font-bold text-brandRed mb-2">Tentang Kami</h3>
                        <p class="text-gray-600 leading-7">
                            Kami melayani berbagai kebutuhan transaksi digital masyarakat dengan sistem yang praktis,
                            efisien, dan mudah diakses. Cocok untuk kebutuhan pribadi, keluarga, maupun usaha.
                        </p>
                    </div>

                    <div class="space-y-4">
                        <div class="flex items-start gap-3 p-4 rounded-2xl bg-gray-50 border border-gray-100">
                            <span class="text-2xl">📱</span>
                            <div>
                                <h4 class="font-bold">Pulsa & Paket Data</h4>
                                <p class="text-sm text-gray-600">Isi ulang cepat untuk kebutuhan komunikasi harian.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3 p-4 rounded-2xl bg-gray-50 border border-gray-100">
                            <span class="text-2xl">💡</span>
                            <div>
                                <h4 class="font-bold">Token & Tagihan</h4>
                                <p class="text-sm text-gray-600">Mudah untuk pembelian token dan pembayaran tagihan rutin.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3 p-4 rounded-2xl bg-gray-50 border border-gray-100">
                            <span class="text-2xl">🛒</span>
                            <div>
                                <h4 class="font-bold">Pembayaran Online</h4>
                                <p class="text-sm text-gray-600">Membantu pembayaran digital termasuk marketplace seperti Shopee.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-white/10 rounded-full blur-3xl"></div>
        <div class="absolute top-10 right-0 w-56 h-56 bg-red-400/20 rounded-full blur-3xl"></div>
    </section>

    <section id="layanan" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="text-brandRed font-semibold uppercase tracking-wider text-sm">Layanan Utama</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-3 mb-4">
                    Layanan Digital yang Kami Sediakan
                </h2>
                <p class="text-gray-600 leading-7">
                    Kami menyediakan berbagai layanan transaksi digital untuk memudahkan kebutuhan pembayaran Anda sehari-hari.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($services as $service)
                    <div class="group bg-white border border-gray-200 rounded-3xl p-7 shadow-sm hover:shadow-xl hover:-translate-y-1 transition duration-300">
                        <div class="w-16 h-16 rounded-2xl bg-red-50 flex items-center justify-center text-3xl mb-5 group-hover:scale-110 transition">
                            {{ $service['icon'] }}
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">{{ $service['title'] }}</h3>
                        <p class="text-gray-600 leading-7">{{ $service['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="cara-order" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="text-brandRed font-semibold uppercase tracking-wider text-sm">Proses Mudah</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-3 mb-4">
                    Cara Order Layanan
                </h2>
                <p class="text-gray-600 leading-7">
                    Langkah transaksi dibuat sederhana agar pelanggan dapat melakukan pemesanan dengan mudah dan cepat.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach($steps as $step)
                    <div class="bg-white rounded-3xl p-7 shadow-sm border border-gray-200">
                        <div class="text-brandRed text-4xl font-extrabold mb-4">{{ $step['number'] }}</div>
                        <h3 class="text-xl font-bold mb-3">{{ $step['title'] }}</h3>
                        <p class="text-gray-600 leading-7">{{ $step['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="keunggulan" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
            <div>
                <span class="text-brandRed font-semibold uppercase tracking-wider text-sm">Nilai Lebih</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-3 mb-6">
                    Kenapa Memilih {{ $company['name'] }}?
                </h2>

                <div class="space-y-4">
                    @foreach($advantages as $advantage)
                        <div class="flex items-start gap-4 bg-gray-50 border border-gray-200 rounded-2xl p-4">
                            <span class="text-brandRed text-xl">✔</span>
                            <p class="text-gray-700 leading-7">{{ $advantage }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="bg-gradient-to-br from-brandRed to-gray-700 text-white rounded-[2rem] p-8 shadow-xl">
                <h3 class="text-2xl font-bold mb-6">Siap Melayani Kebutuhan Anda</h3>

                <div class="grid grid-cols-2 gap-4 text-sm">
                    <div class="bg-white/10 rounded-2xl p-4 border border-white/10">Pulsa Semua Operator</div>
                    <div class="bg-white/10 rounded-2xl p-4 border border-white/10">Paket Data Internet</div>
                    <div class="bg-white/10 rounded-2xl p-4 border border-white/10">Token Listrik PLN</div>
                    <div class="bg-white/10 rounded-2xl p-4 border border-white/10">Pembayaran BPJS</div>
                    <div class="bg-white/10 rounded-2xl p-4 border border-white/10">Top Up E-Wallet</div>
                    <div class="bg-white/10 rounded-2xl p-4 border border-white/10">Pembayaran Shopee</div>
                </div>

                <a href="{{ $company['wa_link'] }}" target="_blank"
                   class="inline-block mt-8 bg-white text-brandRed px-6 py-3.5 rounded-xl font-bold hover:bg-gray-100 transition">
                    Konsultasi via WhatsApp
                </a>
            </div>
        </div>
    </section>

    <section id="testimoni" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="text-brandRed font-semibold uppercase tracking-wider text-sm">Kepercayaan Pelanggan</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-3 mb-4">
                    Apa Kata Pelanggan Kami
                </h2>
                <p class="text-gray-600 leading-7">
                    Kepuasan pelanggan menjadi bagian penting dari komitmen pelayanan kami.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                @foreach($testimonials as $testimonial)
                    <div class="bg-white rounded-3xl p-7 shadow-sm border border-gray-200">
                        <div class="text-4xl text-brandRed mb-4">“</div>
                        <p class="text-gray-600 leading-7 mb-5">{{ $testimonial['message'] }}</p>
                        <h3 class="font-bold text-gray-900">{{ $testimonial['name'] }}</h3>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-20 bg-brandRed text-white">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-extrabold mb-5">
                Butuh Transaksi Cepat, Mudah, dan Terpercaya?
            </h2>
            <p class="text-red-100 text-lg leading-8 mb-8">
                Hubungi {{ $company['name'] }} sekarang juga untuk layanan pulsa, pembayaran tagihan,
                top up e-wallet, token listrik, dan pembayaran online lainnya.
            </p>

            <a href="{{ $company['wa_link'] }}" target="_blank"
               class="inline-flex items-center justify-center bg-white text-brandRed px-8 py-4 rounded-xl font-bold shadow-lg hover:bg-gray-100 transition">
                Hubungi WhatsApp {{ $company['phone'] }}
            </a>
        </div>
    </section>
@endsection