<footer id="kontak" class="bg-gray-900 text-gray-300 mt-0">
    <div class="max-w-7xl mx-auto px-6 py-14 grid md:grid-cols-3 gap-10">
        <div>
            <h3 class="text-white text-2xl font-bold mb-3">{{ $company['name'] }}</h3>
            <p class="text-sm leading-7 text-gray-400">
                Solusi layanan digital dan teknisi untuk kebutuhan pulsa, paket data, token listrik, pembayaran tagihan,
                top up e-wallet, pembayaran online, internet WiFi, CCTV, dan instalasi jaringan dengan pelayanan cepat dan terpercaya.
            </p>
        </div>

        <div>
            <h4 class="text-white text-lg font-semibold mb-4">Kontak Kami</h4>
            <div class="space-y-2 text-sm text-gray-400">
                <p><span class="text-white font-medium">WhatsApp:</span> {{ $company['phone'] }}</p>
                <p><span class="text-white font-medium">Email:</span> {{ $company['email'] }}</p>
                <p><span class="text-white font-medium">Lokasi Offline:</span> {{ $company['address'] }}</p>
            </div>
        </div>

        <div>
            <h4 class="text-white text-lg font-semibold mb-4">Jam Operasional</h4>
            <div class="space-y-2 text-sm text-gray-400">
                <p>Senin - Minggu</p>
                <p>08.00 - 21.00 WIB</p>
                <a href="{{ $company['wa_link'] }}" target="_blank"
                   class="inline-block mt-4 bg-brandRed text-white px-5 py-3 rounded-xl font-semibold hover:bg-red-700 transition">
                    Hubungi Sekarang
                </a>
            </div>
        </div>
    </div>

    <div class="border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-6 py-5 text-sm text-center text-gray-500">
            © {{ date('Y') }} {{ $company['name'] }}. All rights reserved.
        </div>
    </div>
</footer>