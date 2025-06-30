<x-app-layout>
    <x-slot name="header">
        <h2 class="p-6 text-xl font-semibold leading-tight text-gray-800 bg-white rounded-lg shadow-sm dark:text-gray-200 dark:bg-gray-800">
            {{ __('Buat Pesanan Baru') }}
        </h2>
    </x-slot>

    <div class="min-h-screen py-12 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <div class="p-8">
                    <div class="mb-8">
                        <h3 class="mb-2 text-lg font-medium text-gray-900 dark:text-gray-100">Detail Pesanan</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Lengkapi informasi berikut untuk membuat pesanan website Anda</p>
                    </div>

                    <form action="{{ route('orders.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                        @csrf

                        <!-- Website Name -->
                        <div>
                            <label for="website_name" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">
                                Nama Website <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="website_name" id="website_name"
                                class="block w-full px-4 py-3 text-gray-900 transition-colors duration-200 bg-white border border-gray-300 rounded-md shadow-sm dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:focus:ring-blue-400 dark:focus:border-blue-400"
                                placeholder="Masukkan nama website" required>
                        </div>

                        <!-- Website Type -->
                        <div>
                            <label for="website_type" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">
                                Tipe Website <span class="text-red-500">*</span>
                            </label>
                            <select name="website_type" id="website_type"
                                class="block w-full px-4 py-3 text-gray-900 transition-colors duration-200 bg-white border border-gray-300 rounded-md shadow-sm dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:focus:ring-blue-400 dark:focus:border-blue-400" required>
                                <option value="">Pilih tipe website</option>
                                <option value="company_profile">Company Profile</option>
                                <option value="online_shop">Toko Online</option>
                                <option value="blog">Blog</option>
                                <option value="portfolio">Portfolio</option>
                                <option value="other">Lainnya</option>
                            </select>
                        </div>

                        <!-- Desired Features -->
                        <div>
                            <label for="desired_features" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">
                                Fitur yang Diinginkan <span class="text-red-500">*</span>
                            </label>
                            <textarea name="desired_features" id="desired_features" rows="4"
                                class="block w-full px-4 py-3 text-gray-900 transition-colors duration-200 bg-white border border-gray-300 rounded-md shadow-sm resize-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:focus:ring-blue-400 dark:focus:border-blue-400"
                                placeholder="Contoh: Login system, Admin panel, Contact form, Gallery, Payment gateway, dll." required></textarea>
                            <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">Jelaskan fitur yang dibutuhkan dengan detail</p>
                        </div>

                        <!-- Design Reference -->
                        <div>
                            <label for="design_reference" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">
                                Referensi Desain (URL)
                            </label>
                            <input type="url" name="design_reference" id="design_reference"
                                class="block w-full px-4 py-3 text-gray-900 transition-colors duration-200 bg-white border border-gray-300 rounded-md shadow-sm dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:focus:ring-blue-400 dark:focus:border-blue-400"
                                placeholder="https://example.com">
                            <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">URL website sebagai inspirasi desain (opsional)</p>
                        </div>

                        <!-- Budget & Deadline -->
                        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                            <div>
                                <label for="budget" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">
                                    Budget (Rp) <span class="text-red-500">*</span>
                                </label>
                                <input type="number" name="budget" id="budget" min="0" step="100000"
                                    class="block w-full px-4 py-3 text-gray-900 transition-colors duration-200 bg-white border border-gray-300 rounded-md shadow-sm dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:focus:ring-blue-400 dark:focus:border-blue-400"
                                    placeholder="5000000" required>
                            </div>

                            <div>
                                <label for="deadline" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">
                                    Deadline <span class="text-red-500">*</span>
                                </label>
                                <input type="date" name="deadline" id="deadline"
                                    class="block w-full px-4 py-3 text-gray-900 transition-colors duration-200 bg-white border border-gray-300 rounded-md shadow-sm dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:focus:ring-blue-400 dark:focus:border-blue-400" required>
                            </div>
                        </div>

                        <!-- Additional File -->
                        <div>
                            <label for="additional_file" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">
                                File Tambahan
                            </label>
                            <input type="file" name="additional_file" id="additional_file"
                                class="block w-full px-4 py-3 text-gray-900 bg-white border border-gray-300 rounded-md shadow-sm dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:focus:ring-blue-400 dark:focus:border-blue-400 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-medium file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 dark:file:bg-blue-900/20 dark:file:text-blue-300 dark:hover:file:bg-blue-900/30">
                            <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">File pendukung seperti logo, konten, atau requirement (Max. 10MB)</p>
                        </div>

                        <!-- Submit Button -->
                        <div class="pt-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center justify-between">
                                <p class="text-sm text-gray-500 dark:text-gray-400">
                                    <span class="text-red-500">*</span> Wajib diisi
                                </p>
                                <button type="submit"
                                    class="inline-flex items-center px-6 py-3 text-base font-medium text-white transition-colors duration-200 bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 dark:focus:ring-blue-400">
                                    Buat Pesanan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Info Card -->
            <div class="p-4 mt-6 border border-blue-200 rounded-lg bg-blue-50 dark:bg-blue-900/20 dark:border-blue-800">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="w-5 h-5 text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-blue-800 dark:text-blue-200">
                            Tips Pengisian Form
                        </h3>
                        <div class="mt-1 text-sm text-blue-700 dark:text-blue-300">
                            <p>• Deskripsikan fitur yang dibutuhkan dengan jelas untuk estimasi yang akurat</p>
                            <p>• Sertakan referensi website yang disukai untuk memudahkan proses desain</p>
                            <p>• Budget yang realistis membantu kami memberikan solusi terbaik</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>