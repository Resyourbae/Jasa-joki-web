<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Jasa Joki Bikin Web</title>
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gradient-to-br from-blue-50 via-white to-blue-100 text-[#1b1b18] min-h-screen flex flex-col
             dark:bg-gradient-to-br dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 dark:text-gray-100">

    <!-- Navbar Fixed -->
    <nav id="main-navbar"
        class="fixed top-0 right-0 z-50 flex items-center justify-between w-full p-4 transition-colors duration-300 bg-white rounded-b-lg shadow-lg dark:bg-gray-900 dark:shadow-gray-800">
        <div class="text-lg font-bold tracking-wide text-blue-700 select-none dark:text-blue-200">
            <a href="/">AyserNii Joki</a>
        </div>
        <div class="flex items-center gap-4">
            <button id="theme-toggle" class="p-2 transition rounded-full hover:bg-blue-100 dark:hover:bg-gray-800"
                aria-label="Toggle Theme" type="button">
                <svg id="icon-sun" class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="5" stroke="currentColor" stroke-width="2" />
                    <path stroke="currentColor" stroke-width="2"
                        d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42" />
                </svg>
                <svg id="icon-moon" class="w-6 h-6 text-blue-900 dark:text-yellow-300" fill="none" stroke="currentColor"
                    stroke-width="2" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-width="2" d="M21 12.79A9 9 0 1111.21 3a7 7 0 109.79 9.79z" />
                </svg>
            </button>
            <a href="{{ route('login') }}"
                class="px-4 py-2 border border-[#19140035] rounded text-sm hover:bg-blue-50 transition dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700 dark:hover:bg-gray-800">Login</a>
            <a href="{{ route('register') }}"
                class="px-4 py-2 border border-[#19140035] rounded text-sm hover:bg-blue-50 transition dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700 dark:hover:bg-gray-800">Register</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section
        class="relative mb-12 overflow-hidden pt-28 pb-14 dark:bg-gradient-to-r dark:from-gray-900 dark:to-gray-800">
        <div
            class="absolute inset-0 z-10 bg-gradient-to-r from-blue-700/80 to-blue-900/70 dark:from-gray-900/90 dark:to-gray-800/80">
        </div>
        <div class="absolute top-0 right-0 hidden w-1/2 h-full md:block">
            <img src="{{ asset('img/koputer.jpg') }}" alt="Web Illustration"
                class="object-cover object-center w-full h-full shadow-2xl brightness-110 contrast-110 saturate-125 dark:brightness-75 dark:contrast-90" />
        </div>
        <div class="container relative z-20 px-4 mx-auto">
            <div class="grid items-center gap-8 md:grid-cols-2">
                <div
                    class="flex flex-col items-center py-8 text-center text-white md:py-16 md:items-start md:text-left">
                    <h1
                        class="mb-3 text-4xl font-extrabold leading-tight text-gray-100 drop-shadow dark:text-yellow-300">
                        Selamat Datang di
                        <span>Jasa Joki Bikin Web</span>
                    </h1>
                    <p class="max-w-lg mb-8 text-lg text-blue-100 md:text-xl dark:text-gray-200">
                        Kami siap bantu kamu bikin website Tingkat menengah dengan cepat, dan sesuai kebutuhan! Kalau
                        anda berminat silahkan login terlebih dahulu untuk melanjutkan pemesanan!😊
                    </p>
                    <a href="#tentang-kami"
                        class="inline-block px-8 py-3 font-semibold text-blue-700 transition-colors duration-300 bg-white rounded-full shadow-lg hover:bg-blue-50 hover:shadow-xl dark:bg-gray-200 dark:text-yellow-500 dark:hover:bg-gray-800">
                        Tentang Kami
                    </a>
                </div>
                <div class="block md:hidden">
                    <img src="{{ asset('img/koputer.jpg') }}" alt="Web Illustration"
                        class="object-cover w-full border border-blue-100 shadow-xl rounded-xl brightness-110 contrast-110 saturate-125 dark:brightness-75 dark:contrast-90" />
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <main class="flex-1 w-full max-w-2xl px-4 mx-auto text-center">
        <!-- Fitur Layanan -->
        <section class="mb-12">
            <h2 class="flex items-center justify-center gap-2 mb-5 text-2xl font-semibold dark:text-yellow-300">
                <span class="text-blue-600 dark:text-yellow-300">🛠️</span> Layanan Kami
            </h2>
            <ul class="grid max-w-md grid-cols-1 gap-5 mx-auto list-none sm:grid-cols-2">
                <li
                    class="relative flex items-center p-4 transition bg-white border border-blue-100 rounded-lg shadow hover:shadow-lg hover:-translate-y-1 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-100">
                    <span
                        class="absolute top-2 right-2 bg-blue-200 text-blue-800 text-xs px-2 py-0.5 rounded-full font-semibold dark:bg-blue-400 dark:text-blue-900">Favorit</span>
                    <span class="font-medium">Pembuatan website company profile</span>
                </li>
                <li
                    class="relative flex items-center p-5 transition bg-white border border-blue-100 rounded-lg shadow hover:shadow-lg hover:-translate-y-1 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-100">
                    <span
                        class="absolute top-2 right-2 bg-yellow-300 text-yellow-800 text-xs px-2 py-0.5 rounded-full font-semibold dark:bg-yellow-900 dark:text-yellow-200">Mid</span>
                    <span class="font-medium">CRUD simpel (To Do List dan lain lain)</span>
                </li>
                <li
                    class="relative flex items-center p-5 transition bg-white border border-blue-100 rounded-lg shadow hover:shadow-lg hover:-translate-y-1 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-100">
                    <span
                        class="absolute top-2 right-2 bg-yellow-300 text-yellow-800 text-xs px-2 py-0.5 rounded-full font-semibold dark:bg-yellow-900 dark:text-yellow-200">Mid</span>
                    <span class="font-medium">Dashboard Admin & CRM</span>
                </li>
                <li
                    class="relative flex items-center p-5 transition bg-white border border-blue-100 rounded-lg shadow hover:shadow-lg hover:-translate-y-1 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-100">
                    <span
                        class="absolute top-2 right-2 bg-yellow-300 text-yellow-800 text-xs px-2 py-0.5 rounded-full font-semibold dark:bg-yellow-900 dark:text-yellow-200">Mid</span>
                    <span class="font-medium">Landing page promosi produk</span>
                </li>
                <li
                    class="relative flex items-center p-5 transition bg-white border border-blue-100 rounded-lg shadow hover:shadow-lg hover:-translate-y-1 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-100">
                    <span
                        class="absolute top-2 right-2 bg-yellow-300 text-yellow-800 text-xs px-2 py-0.5 rounded-full font-semibold dark:bg-yellow-900 dark:text-yellow-200">Mid</span>
                    <span class="font-medium">Sistem Absensi Simpel</span>
                </li>
                <li
                    class="relative flex items-center p-5 transition bg-white border border-blue-100 rounded-lg shadow hover:shadow-lg hover:-translate-y-1 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-100">
                    <span
                        class="absolute top-2 right-2 bg-green-300 text-green-800 text-xs px-2 py-0.5 rounded-full font-semibold dark:bg-green-900 dark:text-green-200">Rere</span>
                    <span class="font-medium">Project Tugas Sekolah</span>
                </li>
                <li
                    class="flex items-center justify-center col-span-1 p-4 transition bg-white border border-blue-100 rounded-lg shadow hover:shadow-lg hover:-translate-y-1 sm:col-span-2 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-100">
                    <span class="font-medium">Full support & revisi ringan gratis</span>
                </li>
            </ul>
        </section>

        <!-- Kenapa Pilih Kami -->
        <section class="mb-12">
            <h2 class="flex items-center justify-center gap-2 mb-5 text-2xl font-semibold dark:text-yellow-300">
                <span class="text-yellow-500 dark:text-yellow-300">✨</span> Kenapa Harus Kami?
            </h2>
            <div
                class="p-6 text-base text-yellow-900 border border-yellow-100 rounded-lg shadow bg-yellow-50 dark:bg-gray-900 dark:border-gray-700 dark:text-yellow-200">
                Tim kami berpengalaman dengan teknologi terbaru seperti
                <span class="font-semibold text-blue-700 dark:text-yellow-300">Laravel</span>,
                <span class="font-semibold text-blue-700 dark:text-yellow-300">React</span>,
                <span class="font-semibold text-blue-700 dark:text-yellow-300">Tailwind</span>, dan
                <span class="font-semibold text-blue-700 dark:text-yellow-300">Livewire</span>.<br />
                <span
                    class="inline-block px-2 py-1 mt-2 text-xs font-semibold text-blue-800 bg-blue-100 rounded-full dark:bg-yellow-900 dark:text-yellow-200">Proses
                    cepat</span>
                <span
                    class="inline-block px-2 py-1 mt-2 text-xs font-semibold text-green-800 bg-green-100 rounded-full dark:bg-green-900 dark:text-green-200">Harga
                    terjangkau</span>
                <span
                    class="inline-block px-2 py-1 mt-2 text-xs font-semibold text-purple-800 bg-purple-100 rounded-full dark:bg-purple-900 dark:text-purple-200">Hasil
                    maksimal</span>
            </div>
        </section>
    </main>
@include('dev')


    <!-- Main Content Lanjutan -->
    <div class="flex-1 w-full max-w-2xl px-4 mx-auto text-center">
        <!-- Kontak -->
        <section class="mt-12 mb-10">
            <h2 class="flex items-center justify-center gap-2 mb-5 text-2xl font-semibold dark:text-yellow-300">
                <span class="text-green-600 dark:text-yellow-300">📞</span> Hubungi Kami
            </h2>
            <div class="flex flex-col items-center gap-3 text-base">
                <p class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-blue-500 dark:text-yellow-300" fill="none" stroke="currentColor"
                        stroke-width="2" viewBox="0 0 24 24">
                        <path d="M16 12a4 4 0 01-8 0 4 4 0 018 0z" />
                        <path d="M12 2a10 10 0 100 20 10 10 0 000-20z" />
                    </svg>
                    Email: <a href="mailto:resyaanggara98@gmail.com"
                        class="text-blue-700 hover:underline dark:text-yellow-300">resyaanggara98@gmail.com</a>
                </p>
                <p class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-green-500 dark:text-yellow-300" fill="none" stroke="currentColor"
                        stroke-width="2" viewBox="0 0 24 24">
                        <path
                            d="M3 5a2 2 0 012-2h2.28a2 2 0 011.94 1.515l.518 2.073a2 2 0 01-.45 1.947l-1.516 1.516a16.001 16.001 0 006.586 6.586l1.516-1.516a2 2 0 011.947-.45l2.073.518A2 2 0 0121 18.72V21a2 2 0 01-2 2h-1C9.163 23 1 14.837 1 5V4a2 2 0 012-2z" />
                    </svg>
                    WhatsApp: <a href="https://wa.me/6282114028613"
                        class="text-green-700 hover:underline dark:text-yellow-300">(+62)821-1402-8613</a>
                </p>
                <p class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-pink-500 dark:text-yellow-300" fill="none" stroke="currentColor"
                        stroke-width="2" viewBox="0 0 24 24">
                        <rect width="20" height="20" x="2" y="2" rx="5" />
                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z" />
                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
                    </svg>
                    Instagram: <a href="https://www.instagram.com/ayser_nii"
                        class="text-pink-700 hover:underline dark:text-yellow-300">@ayserNii</a>
                </p>
            </div>
        </section>
    </div>

    <!-- Footer -->
    <footer
        class="w-full py-4 mt-auto text-sm text-center text-gray-500 bg-white border-t border-blue-100 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700">
        &copy; {{ date('Y') }} Jasa Joki Bikin Web. All rights reserved. V1.0.0
    </footer>

    <script>
        // Navbar transparan saat scroll
        window.addEventListener('scroll', function () {
            const navbar = document.getElementById('main-navbar');
            if (window.scrollY > 10) {
                navbar.classList.add('bg-white/60', 'backdrop-blur', 'shadow-md', 'dark:bg-gray-900/80');
                navbar.classList.remove('bg-white', 'dark:bg-gray-900');
            } else {
                navbar.classList.remove('bg-white/60', 'backdrop-blur', 'shadow-md', 'dark:bg-gray-900/80');
                navbar.classList.add('bg-white', 'dark:bg-gray-900');
            }
        });

        // Theme toggle
        const themeToggle = document.getElementById('theme-toggle');
        const iconSun = document.getElementById('icon-sun');
        const iconMoon = document.getElementById('icon-moon');
        const html = document.documentElement;

        // Atur icon awal (hanya satu yang tampil)
        function updateIcons(isDark) {
            if (isDark) {
                iconSun.style.display = 'none';
                iconMoon.style.display = 'inline';
            } else {
                iconSun.style.display = 'inline';
                iconMoon.style.display = 'none';
            }
        }

        function setTheme(mode) {
            if (mode === 'dark') {
                html.classList.add('dark');
                updateIcons(true);
            } else {
                html.classList.remove('dark');
                updateIcons(false);
            }
            html.style.display = 'none';
            void html.offsetHeight;
            html.style.display = '';
        }

        function initTheme() {
            const savedTheme = localStorage.getItem('theme');
            let isDark = false;
            if (
                savedTheme === 'dark' ||
                (!savedTheme && window.matchMedia('(prefers-color-scheme: dark)').matches)
            ) {
                setTheme('dark');
                isDark = true;
            } else {
                setTheme('light');
                isDark = false;
            }
        }

        // Pastikan icon awal benar
        document.addEventListener('DOMContentLoaded', () => {
            initTheme();
            // Pastikan icon sesuai setelah inisialisasi
            updateIcons(html.classList.contains('dark'));
        });

        themeToggle.addEventListener('click', () => {
            const isDark = html.classList.contains('dark');
            if (isDark) {
                setTheme('light');
                localStorage.setItem('theme', 'light');
            } else {
                setTheme('dark');
                localStorage.setItem('theme', 'dark');
            }
         
            updateIcons(html.classList.contains('dark'));
        });

        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
            if (!localStorage.getItem('theme')) {
                setTheme(e.matches ? 'dark' : 'light');
                updateIcons(e.matches);
            }
        });

        // Smooth scroll untuk anchor link
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>

</html>
