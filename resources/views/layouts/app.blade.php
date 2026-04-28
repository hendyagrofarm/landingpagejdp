<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $company['name'] ?? 'PT Java Digital Ponorogo' }}</title>
    <meta name="description" content="Layanan pulsa, PPOB, pembayaran tagihan, top up e-wallet, jasa internet WiFi, jasa pasang CCTV, dan instalasi jaringan oleh PT Java Digital Ponorogo.">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brandRed: '#b91c1c',
                        softRed: '#ef4444',
                        lightGray: '#f3f4f6',
                        darkGray: '#374151',
                    }
                }
            }
        }
    </script>
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-white text-gray-800">
    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>