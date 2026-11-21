<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pastel POS</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-[#fff8fb] text-[#4a4050]">

    <header class="flex items-center justify-between px-8 py-6">
        <div class="flex items-center gap-3">
            <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-[#f8c8dc] text-xl">
                🛍️
            </div>

            <div>
                <h1 class="text-xl font-bold text-[#704c66]">Pastel POS</h1>
                <p class="text-xs text-[#a4869b]">Simple sales management</p>
            </div>
        </div>

        @if (Route::has('login'))
            <nav class="flex items-center gap-3">
                @auth
                    <a href="{{ url('/dashboard') }}"
                       class="rounded-full bg-[#c9b8e8] px-5 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-[#b5a0dc]">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}"
                       class="rounded-full px-5 py-2.5 text-sm font-semibold text-[#8b6680] transition hover:bg-[#fce3ed]">
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                           class="rounded-full bg-[#f3aecb] px-5 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-[#e995b7]">
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </header>

    <main class="mx-auto grid max-w-6xl items-center gap-12 px-8 py-16 md:grid-cols-2">

        <section>
            <p class="mb-4 inline-block rounded-full bg-[#fce3ed] px-4 py-2 text-sm font-semibold text-[#a66788]">
                Welcome to your POS workspace
            </p>

            <h2 class="text-5xl font-extrabold leading-tight text-[#624b63]">
                Manage your store with
                <span class="text-[#d989ad]">ease and style.</span>
            </h2>

            <p class="mt-6 max-w-lg text-lg leading-8 text-[#8d778a]">
                Organize customers, user accounts, and daily sales in one soft,
                simple, and easy-to-use point-of-sale system.
            </p>

            <div class="mt-8 flex flex-wrap gap-4">
                @guest
                    <a href="{{ route('register') }}"
                       class="rounded-full bg-[#c9b8e8] px-7 py-3 font-semibold text-white shadow-md transition hover:bg-[#b5a0dc]">
                        Get Started
                    </a>

                    <a href="{{ route('login') }}"
                       class="rounded-full border-2 border-[#f3aecb] px-7 py-3 font-semibold text-[#b76c91] transition hover:bg-[#fce3ed]">
                        Sign In
                    </a>
                @else
                    <a href="{{ url('/dashboard') }}"
                       class="rounded-full bg-[#c9b8e8] px-7 py-3 font-semibold text-white shadow-md transition hover:bg-[#b5a0dc]">
                        Open Dashboard
                    </a>
                @endguest
            </div>
        </section>

        <section class="relative">
            <div class="rounded-[2.5rem] bg-[#f8d9e6] p-8 shadow-xl">
                <div class="rounded-[2rem] bg-white p-6 shadow-sm">
                    <div class="mb-6 flex items-center justify-between">
                        <div>
                            <p class="text-sm text-[#a4869b]">Today's overview</p>
                            <h3 class="text-2xl font-bold text-[#624b63]">Store Summary</h3>
                        </div>

                        <div class="rounded-2xl bg-[#dcecf4] px-4 py-3 text-2xl">
                            ✨
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="rounded-2xl bg-[#fff1c9] p-5">
                            <p class="text-sm text-[#a48670]">Customers</p>
                            <p class="mt-2 text-3xl font-bold text-[#866b54]">128</p>
                        </div>

                        <div class="rounded-2xl bg-[#e3dafa] p-5">
                            <p class="text-sm text-[#83739e]">Orders</p>
                            <p class="mt-2 text-3xl font-bold text-[#665783]">246</p>
                        </div>

                        <div class="col-span-2 rounded-2xl bg-[#d9f0e4] p-5">
                            <p class="text-sm text-[#719982]">Today's sales</p>
                            <p class="mt-2 text-3xl font-bold text-[#51765f]">₱24,580.00</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="absolute -right-4 -top-5 rounded-2xl bg-[#c9b8e8] px-4 py-3 text-2xl shadow-md">
                💜
            </div>

            <div class="absolute -bottom-5 -left-4 rounded-2xl bg-[#f8c8dc] px-4 py-3 text-2xl shadow-md">
                🌸
            </div>
        </section>

    </main>

    <footer class="pb-8 text-center text-sm text-[#ad94a7]">
        Pastel POS · Laravel Point-of-Sale Application
    </footer>

</body>
</html>