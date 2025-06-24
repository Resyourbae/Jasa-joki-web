<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-100 leading-tight bg-white dark:bg-gray-800 p-4 rounded-t-2xl shadow-md">
            {{ __('Buat Pesanan Baru') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-white dark:bg-gray-900 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-slate-800 rounded-lg overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <form action="{{ route('orders.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-4 ">
                            <label for="website_name"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-200">Nama
                                Website</label>
                            <input type="text" name="website_name" id="website_name"
                                class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 rounded-md"
                                required>
                        </div>

                        <div class="mb-4">
                            <label for="website_type"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-200">Tipe
                                Website</label>
                            <select name="website_type" id="website_type"
                                class="mt-1 block w-full py-2 px-3 border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                <option value="company_profile">Company Profile</option>
                                <option value="online_shop">Toko Online</option>
                                <option value="blog">Blog</option>
                                <option value="portfolio">Portfolio</option>
                                <option value="other">Lainnya</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="desired_features"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-200">Fitur yang
                                Diinginkan</label>
                            <textarea name="desired_features" id="desired_features" rows="4"
                                class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 rounded-md"
                                placeholder="Contoh: Login, Admin Panel, API, dll." required></textarea>
                        </div>

                        <div class="mb-4">
                            <label for="design_reference"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-200">Referensi
                                Desain (URL)</label>
                            <input type="url" name="design_reference" id="design_reference"
                                class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 rounded-md"
                                placeholder="https://...">
                        </div>

                        <div class="mb-4">
                            <label for="budget"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-200">Budget (Rp)</label>
                            <input type="number" name="budget" id="budget" min="0" step="100000"
                                class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 rounded-md"
                                required>
                        </div>

                        <div class="mb-4">
                            <label for="deadline"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-200">Deadline</label>
                            <input type="date" name="deadline" id="deadline"
                                class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 rounded-md"
                                required>
                        </div>

                        <div class="mb-4">
                            <label for="additional_file"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-200">File
                                Tambahan</label>
                            <input type="file" name="additional_file" id="additional_file"
                                class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 rounded-md">
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Max. 10MB</p>
                        </div>

                        <div class="flex justify-end mt-6">
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Buat Pesanan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>