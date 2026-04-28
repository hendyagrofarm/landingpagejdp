<header class="sticky top-0 z-50 bg-white/95 backdrop-blur border-b border-gray-200 shadow-sm">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
        <div>
            <a href="{{ route('home') }}" class="block">
                <h1 class="text-xl md:text-2xl font-extrabold text-brandRed">
                    {{ $company['name'] }}
                </h1>
                <p class="text-sm text-gray-500">Pulsa • PPOB • WiFi • CCTV • Pembayaran Online</p>
            </a>
        </div>

        <nav class="hidden md:flex items-center gap-6 text-sm font-semibold text-gray-700">
            <a href="#home" class="hover:text-brandRed transition">Home</a>
            <a href="#layanan" class="hover:text-brandRed transition">Layanan</a>
            <a href="#cara-order" class="hover:text-brandRed transition">Cara Order</a>
            <a href="#keunggulan" class="hover:text-brandRed transition">Keunggulan</a>
            <a href="#testimoni" class="hover:text-brandRed transition">Testimoni</a>
            <a href="#kontak" class="hover:text-brandRed transition">Kontak</a>
        </nav>

        <a href="{{ $company['wa_link'] }}" target="_blank"
           class="hidden md:inline-flex bg-brandRed text-white px-5 py-2.5 rounded-xl font-semibold shadow hover:bg-red-700 transition">
            WhatsApp
        </a>
    </div>
</header>