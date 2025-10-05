<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- tailwind -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
    @else
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            min-height: 100vh;
            min-width: 100vw;
            height: 100vh;
            width: 100vw;
            font-family: "Raleway", sans-serif;
            position: relative;
            overflow: hidden;
        }
    </style>
    @endif
</head>

<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex items-center lg:justify-center min-h-screen flex-col relative overflow-hidden" style="min-height:100vh;min-width:100vw;">
    <!-- Background image covers the whole content -->
    <div class="fixed inset-0 z-0 w-full h-full">
        <img src="https://media.cntraveler.com/photos/6543ead9e16709b10ae84318/16:9/w_2560,c_limit/The%20Greenwich%20Hotel__DSC7384brandonlajoie.jpg" alt="Konnect" class="w-full h-full object-cover object-center" style="width:100vw;height:100vh;object-fit:cover;object-position:center;" />

        <div class="absolute inset-0 bg-black/40"></div>
    </div>

    <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden z-10 relative">
        @if (Route::has('login'))
        <nav class="flex items-center justify-end gap-4">
            @auth
            <a
                href="{{ url('/admin') }}"
                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                Dashboard
            </a>
            @else
            <a
                href="{{ route('login') }}"
                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal">
                Log in
            </a>

            @if (Route::has('register'))
            <a
                href="{{ route('register') }}"
                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                Register
            </a>
            @endif
            @endauth
        </nav>
        @endif
    </header>

    <main class="relative z-10 flex flex-col items-center justify-center w-full h-full flex-1">
        <div class="text-center text-white">
            <h1 class="font-bold" style="font-size: clamp(2rem, 2vw, 2rem); font-family: DM Serif Display, sans-serif;">Konnect Management System</h1>

            <p class="mb-4" style="font-size: clamp(1rem, 1vw, 1rem); font-family: Raleway, sans-serif;">We are excited to have you on-board</p>

            <a href="/admin/login" class="bg-white text-black px-4 py-2 rounded-md transition duration-200 ease-in-out transform hover:bg-black hover:text-white hover:scale-105 hover:shadow-lg cursor-pointer hover:font-bold border border-2-white" style="font-family: Raleway, sans-serif;">
                Get Started
            </a>
        </div>
    </main>

    @if (Route::has('login'))
    <div class="h-14.5 hidden lg:block z-10 relative"></div>
    @endif
</body>

</html>