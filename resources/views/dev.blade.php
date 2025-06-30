<!-- Developer Section Component -->
<section id="developer-section" class="w-full py-16 bg-gradient-to-b from-white to-gray-100 dark:bg-gradient-to-b dark:from-gray-900 dark:to-gray-800">
    <div class="container px-4 mx-auto">
        <h2 class="mb-4 text-4xl font-extrabold text-center text-blue-800 drop-shadow-lg dark:text-blue-200">
            Tim Developer Kami
        </h2>
        <p class="max-w-2xl mx-auto mb-12 text-lg text-center text-gray-700 dark:text-gray-200">
            Kenali tim developer profesional yang siap membantu mewujudkan website impian Anda dengan teknologi terdepan.
        </p>

        <!-- Developer Cards -->
        <div id="developer-cards" class="flex flex-wrap justify-center gap-10">
            <!-- Developer cards akan di-generate oleh JavaScript -->
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Data developer
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

        // Render developer cards
        const container = document.getElementById('developer-cards');
        if (container) {
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
        }
    });
</script>
