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
        class="top-0 right-0 p-4 flex items-center justify-between bg-white shadow-lg fixed w-full z-50 rounded-b-lg transition-colors duration-300 dark:bg-gray-900 dark:shadow-gray-800">
        <div class="text-lg font-bold text-blue-700 tracking-wide select-none dark:text-blue-200"><a href="/">AyserNii Joki</a></div>
        <div class="flex gap-4 items-center">
            <button id="theme-toggle" class="p-2 rounded-full hover:bg-blue-100 transition dark:hover:bg-gray-800"
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
    <section id="hero"
        class="pt-24 bg-gradient-to-b from-white to-gray-100 min-h-screen py-16 dark:bg-gradient-to-b dark:from-gray-900 dark:to-gray-800">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-extrabold text-center mb-4 text-blue-800 drop-shadow-lg dark:text-blue-200">Tentang
                Website Kami</h1>
            <p class="text-gray-700 text-center mb-12 max-w-2xl mx-auto text-lg dark:text-gray-200">
                Website ini adalah platform yang menyediakan jasa pembuatan website profesional. Kami berkomitmen untuk
                memberikan solusi terbaik untuk kebutuhan online Anda.
            </p>

            <div class="flex flex-wrap justify-center gap-10">
                <!-- Developer 1 -->
                <div
                    class="w-80 bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-shadow duration-300 p-6 flex flex-col items-center group dark:bg-gray-800 dark:text-gray-100">
                    <div
                        class="bg-gradient-to-tr from-blue-400 to-blue-200 p-0.5 rounded-lg mb-4 transition-transform duration-300 group-hover:scale-105">
                        <img src="{{ asset('img/resya.jpeg') }}" alt="Developer 1"
                            class="w-48 h-80 object-cover rounded-lg border-4 border-white shadow-lg transition-transform duration-300 group-hover:scale-110">
                    </div>
                    <h2 class="text-xl font-semibold text-center text-blue-700 dark:text-blue-300">Resya Anggara</h2>
                    <p class="text-gray-500 text-center dark:text-gray-400">Front End Developer</p>
                </div>

                <!-- Developer 2 -->
                <div
                    class="w-80 bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-shadow duration-300 p-6 flex flex-col items-center group dark:bg-gray-800 dark:text-gray-100">
                    <div
                        class="bg-gradient-to-tr from-pink-400 to-pink-200 p-0.5 rounded-lg mb-4 transition-transform duration-300 group-hover:scale-105">
                        <img src="{{ asset('img/firyal.jpg') }}" alt="Developer 2"
                            class="w-48 h-80 object-cover rounded-lg border-4 border-white shadow-lg transition-transform duration-300 group-hover:scale-110">
                    </div>
                    <h2 class="text-xl font-semibold text-center text-pink-700 dark:text-pink-300">Firyal</h2>
                    <p class="text-gray-500 text-center dark:text-gray-400">Front End Developer</p>
                </div>

                <!-- Developer 3 -->
                <div
                    class="w-80 bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-shadow duration-300 p-6 flex flex-col items-center group dark:bg-gray-800 dark:text-gray-100">
                    <div
                        class="bg-gradient-to-tr from-green-400 to-green-200 p-0.5 rounded-lg mb-4 transition-transform duration-300 group-hover:scale-105">
                        <img src="{{ asset('img/riffa.jpg') }}" alt="Developer 3"
                            class="w-48 h-80 object-cover rounded-lg border-4 border-white shadow-lg transition-transform duration-300 group-hover:scale-110">
                    </div>
                    <h2 class="text-xl font-semibold text-center text-green-700 dark:text-green-300">Riffa</h2>
                    <p class="text-gray-500 text-center dark:text-gray-400">Full Stack Developer</p>
                </div>
            </div>
        </div>
    </section>

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
            // updateIcons(isDark); // Sudah dipanggil di setTheme
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
            // Pastikan icon langsung berubah
            updateIcons(html.classList.contains('dark'));
        });

        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
            if (!localStorage.getItem('theme')) {
                setTheme(e.matches ? 'dark' : 'light');
                updateIcons(e.matches);
            }
        });
    </script>

</body>

</html>