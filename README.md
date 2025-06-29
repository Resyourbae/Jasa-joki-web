# Jasa Joki Web 🚀

Website layanan jasa pembuatan aplikasi web, mobile, dan desktop yang profesional dan terpercaya.

## 📋 Deskripsi

Jasa Joki Web adalah platform online yang menyediakan layanan pembuatan website, aplikasi mobile, dan berbagai solusi teknologi informasi lainnya. Website ini dibangun menggunakan framework Laravel untuk memberikan pengalaman pengguna yang optimal dan sistem yang robust.

## ✨ Fitur Utama

- **Katalog Layanan**: Menampilkan berbagai jenis layanan yang tersedia
- **Portfolio**: Showcase hasil karya dan proyek yang telah diselesaikan
- **Sistem Pemesanan**: Proses order yang mudah dan transparan
- **Dashboard Admin**: Panel administrasi untuk mengelola pesanan dan konten
- **Sistem Pembayaran**: Integrasi dengan berbagai metode pembayaran
- **Tracking Progress**: Klien dapat memantau progress pengerjaan proyek
- **Review & Rating**: Sistem feedback dari klien

## 🛠️ Teknologi yang Digunakan

- **Backend**: Laravel 10.x
- **Frontend**: Blade Templates, Bootstrap/Tailwind CSS
- **Database**: MySQL
- **Authentication**: Laravel Sanctum/Breeze
- **Payment Gateway**: Midtrans/Xendit (opsional)
- **File Storage**: Local/AWS S3

## 📦 Instalasi

### Prasyarat
- PHP >= 8.1
- Composer
- Node.js & NPM
- MySQL/PostgreSQL

### Langkah Instalasi

1. **Clone Repository**
   ```bash
   git clone https://github.com/Resyourbae/Jasa-joki-web.git
   cd Jasa-joki-web
   ```

2. **Install Dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Setup Environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Konfigurasi Database**
   Edit file `.env` dan sesuaikan konfigurasi database:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=jasa_joki_web
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

5. **Migrasi Database**
   ```bash
   php artisan migrate
   php artisan db:seed
   ```

6. **Build Assets**
   ```bash
   npm run build
   ```

7. **Jalankan Server**
   ```bash
   php artisan serve
   ```
   atau
    ```bash
   composer run dev
   ```

   Website akan dapat diakses di `http://localhost:8000`

## 🚀 Deployment

### Server Requirements
- PHP 8.1 atau lebih tinggi
- Apache/Nginx
- MySQL 5.7+ atau PostgreSQL 9.6+
- Composer
- Node.js (untuk build assets)

### Deployment Steps
1. Upload semua file ke server
2. Install dependencies: `composer install --optimize-autoloader --no-dev`
3. Set environment variables
4. Generate application key: `php artisan key:generate`
5. Run migrations: `php artisan migrate --force`
6. Build assets: `npm run production`
7. Set proper file permissions
8. Configure web server

## 📁 Struktur Project

```
├── app/
│   ├── Http/Controllers/     # Controllers
│   ├── Models/              # Eloquent Models
│   ├── Services/            # Business Logic
│   └── ...
├── database/
│   ├── migrations/          # Database Migrations
│   └── seeders/            # Database Seeders
├── public/                 # Public Assets
├── resources/
│   ├── views/              # Blade Templates
│   ├── css/                # Stylesheets
│   └── js/                 # JavaScript Files
├── routes/
│   ├── web.php             # Web Routes
│   └── api.php             # API Routes
└── storage/                # File Storage
```

## 🔧 Konfigurasi

### Environment Variables
```env
APP_NAME="Jasa Joki Web"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://yourdomain.com

# Database
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=jasa_joki_web
DB_USERNAME=username
DB_PASSWORD=password

# Mail Configuration
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your_email@gmail.com
MAIL_PASSWORD=your_app_password
MAIL_ENCRYPTION=tls

# Payment Gateway (Opsional)
MIDTRANS_SERVER_KEY=your_server_key
MIDTRANS_CLIENT_KEY=your_client_key
MIDTRANS_IS_PRODUCTION=false
```

## 👥 Tim Pengembang

- **Developer**: [Resyourbae](https://github.com/Resyourbae) , [faturahaman](https://github.com/faturahaman) , [firyal](https://github.com/IhateCode-Man)
- **Status**: Dalam tahap development

## 📋 Layanan yang Tersedia

- **Website Development**
  - Landing Page
  - Company Profile
  - E-commerce
  - Portal Berita
  - Sistem Informasi

- **Mobile App Development**
  - Android Native
  - iOS Native
  - Flutter/React Native

- **Desktop Application**
  - Windows Application
  - Cross-platform Desktop App

- **Jasa Lainnya**
  - Database Design
  - API Development
  - System Integration
  - Technical Consultation

## 🤝 Cara Berkontribusi

1. Fork repository ini
2. Buat branch feature baru (`git checkout -b feature/AmazingFeature`)
3. Commit perubahan (`git commit -m 'Add some AmazingFeature'`)
4. Push ke branch (`git push origin feature/AmazingFeature`)
5. Buat Pull Request

## 📄 Lisensi

Project ini dilisensikan di bawah [MIT License](LICENSE).

## 🔄 Status Development

![Development Status](https://img.shields.io/badge/Status-In%20Development-yellow)
![Laravel](https://img.shields.io/badge/Laravel-10.x-red)
![PHP](https://img.shields.io/badge/PHP-8.1+-blue)

**Catatan**: Website ini masih dalam tahap pengembangan. Beberapa fitur mungkin belum tersedia atau masih dalam proses penyempurnaan.

## 📈 Roadmap

- [x] Setup project dasar
- [x] Implementasi authentication
- [x] Sistem pemesanan
- [ ] Payment gateway integration
- [x] Dashboard admin
- [ ] Sistem tracking progress
- [x] Mobile responsive optimization
- [ ] SEO optimization
- [ ] Testing & deployment

---

**Terima kasih telah menggunakan layanan Jasa Joki Web!** 🙏
