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
    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->

    <style>
        body {
            font-family: "Raleway", sans-serif;
        }

        h1 {
            font-size: clamp(2rem, 2vw, 2rem);
            font-family: "DM Serif Display", sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100" style="background-image: url('https://media.cntraveler.com/photos/6543ead9e16709b10ae84318/16:9/w_2560,c_limit/The%20Greenwich%20Hotel__DSC7384brandonlajoie.jpg'); background-size: cover;">
    <div class="flex items-center justify-center min-h-screen">
        <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-lg shadow-md">
            <a href="/" class="underline underline-offset-4 text-sm hover:font-bold">&#8592; Home</a>

            <h1 class="font-bold">Login</h1>

            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf
                <div>
                    <label for="email" class="text-sm font-bold text-gray-700">Email</label>
                    <input id="email" name="email" type="email" autocomplete="email" required class="block w-full px-3 py-2 mt-1 text-gray-900 placeholder-gray-500 border border-gray-300 rounded-md shadow-sm appearance-none focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>

                <div>
                    <label for="password" class="text-sm font-bold text-gray-700">Password</label>
                    <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full px-3 py-2 mt-1 text-gray-900 placeholder-gray-500 border border-gray-300 rounded-md shadow-sm appearance-none focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember-me" name="remember-me" type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                        <label for="remember-me" class="block ml-2 text-sm font-bold text-gray-900">Remember me</label>
                    </div>

                    <div class="text-sm">
                        <a href="#" class="font-bold text-indigo-600 hover:text-indigo-500">Forgot your password?</a>
                    </div>
                </div>

                <p class="text-center text-sm">Contact admin for credentials.</p>

                <div>
                    <button type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 hover:font-bold cursor-pointer">Log in</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>