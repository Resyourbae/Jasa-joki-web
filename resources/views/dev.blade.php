<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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

    <!-- Navbar -->
    <nav id="main-navbar"
        class="fixed top-0 right-0 z-50 flex items-center justify-between w-full p-4 transition-colors duration-300 bg-white rounded-b-lg shadow-lg dark:bg-gray-900 dark:shadow-gray-800">
        <div class="text-lg font-bold tracking-wide text-blue-700 select-none dark:text-blue-200"><a href="/">AyserNii Joki</a></div>
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
    <section id="hero"
        class="min-h-screen py-16 pt-24 bg-gradient-to-b from-white to-gray-100 dark:bg-gradient-to-b dark:from-gray-900 dark:to-gray-800">
        <div class="container px-4 mx-auto">
            <h1 class="mb-4 text-4xl font-extrabold text-center text-blue-800 drop-shadow-lg dark:text-blue-200">Tentang Website Kami</h1>
            <p class="max-w-2xl mx-auto mb-12 text-lg text-center text-gray-700 dark:text-gray-200">
                Website ini adalah platform yang menyediakan jasa pembuatan website profesional. Kami berkomitmen untuk
                memberikan solusi terbaik untuk kebutuhan online Anda.
            </p>

            <!-- Tempat menampilkan card developer -->
            <div id="developers" class="flex flex-wrap justify-center gap-10"></div>
        </div>
    </section>

    <!-- Script Theme & Developer -->
    <script>
        // Navbar scroll effect
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

        function updateIcons(isDark) {
            iconSun.style.display = isDark ? 'none' : 'inline';
            iconMoon.style.display = isDark ? 'inline' : 'none';
        }

        function setTheme(mode) {
            if (mode === 'dark') {
                html.classList.add('dark');
                updateIcons(true);
            } else {
                html.classList.remove('dark');
                updateIcons(false);
            }
        }

        function initTheme() {
            const savedTheme = localStorage.getItem('theme');
            let isDark = savedTheme === 'dark' || (!savedTheme && window.matchMedia('(prefers-color-scheme: dark)').matches);
            setTheme(isDark ? 'dark' : 'light');
        }

        document.addEventListener('DOMContentLoaded', () => {
            initTheme();
            updateIcons(html.classList.contains('dark'));

            // Tampilkan data developer dari array
            const developers = [
                {
                    name: "Resya Anggara",
                    role: "Front End Developer",
                    image: "{{ asset('img/resya.jpeg') }}",
                    color: "from-blue-400 to-blue-200",
                    textColor: "text-blue-700 dark:text-blue-300"
                },
                {
                    name: "Firyal",
                    role: "Front End Developer",
                    image: "{{ asset('img/firyal.jpg') }}",
                    color: "from-pink-400 to-pink-200",
                    textColor: "text-pink-700 dark:text-pink-300"
                },
                {
                    name: "Riffa",
                    role: "Full Stack Developer",
                    image: "{{ asset('img/riffa.jpg') }}",
                    color: "from-green-400 to-green-200",
                    textColor: "text-green-700 dark:text-green-300"
                },
            ];

            const container = document.getElementById('developers');
            developers.forEach(dev => {
                const card = document.createElement('div');
                card.className = `
                    w-80 bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-shadow duration-300 
                    p-6 flex flex-col items-center group dark:bg-gray-800 dark:text-gray-100
                `;
                card.innerHTML = `
                    <div class="bg-gradient-to-tr ${dev.color} p-0.5 rounded-lg mb-4 transition-transform duration-300 group-hover:scale-105">
                        <img src="${dev.image}" alt="${dev.name}"
                            class="object-cover w-48 transition-transform duration-300 border-4 border-white rounded-lg shadow-lg h-80 group-hover:scale-110">
                    </div>
                    <h2 class="text-xl font-semibold text-center ${dev.textColor}">${dev.name}</h2>
                    <p class="text-center text-gray-500 dark:text-gray-400">${dev.role}</p>
                `;
                container.appendChild(card);
            });
        });

        themeToggle.addEventListener('click', () => {
            const isDark = html.classList.contains('dark');
            setTheme(isDark ? 'light' : 'dark');
            localStorage.setItem('theme', isDark ? 'light' : 'dark');
            updateIcons(!isDark);
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
