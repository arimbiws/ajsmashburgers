<div align="center">
    <a href="https://github.com/username/ajsmashburgers">
    <img src="storage\app\public\company\logo-default.png" alt="Logo AJ Smash Burger" height="200">
    </a>
    <hr />
    <p>
        <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP" /> 
        <img src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel" />
        <img src="https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white" alt="Tailwind CSS" />
        <img src="https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL" />
    </p>
    <p align="center">
        Sistem Informasi berbasis website, dibangun untuk membantu <strong>AJ Smash Burger</strong> dalam mengelola promosi digital, arsip menu, dan informasi gerai secara terpusat. Dilengkapi dengan <strong>Admin Panel</strong> untuk pengelolaan konten secara mandiri (CMS).
    </p>
    Proyek ini dikembangkan sebagai hasil dari <strong>Kegiatan Praktik Kerja Lapangan (PKL)</strong> di <strong>PT Digjaya Digital Group</strong>.

</div>

## 📸 Preview Website

|                            Halaman Utama                             |                               Halaman Admin                                |
| :------------------------------------------------------------------: | :------------------------------------------------------------------------: |
| ![Home Page](storage/app/public/screenshots/screenshot-homepage.png) | ![Admin Dashboard](storage/app/public/screenshots/screenshot-homepage.png) |

## ✨ Fitur Utama

### 👤 Halaman Pengunjung

- **Beranda & Profil:** Informasi visi misi dan cerita usaha.
- **Daftar Menu:** Katalog makanan & minuman dengan harga dan status ketersediaan.
- **Lokasi Outlet:** Informasi alamat dan link Google Maps cabang.
- **Berita & Promo:** Update terbaru mengenai promosi AJ Smash Burger.
- **Contact Us:** Formulir pesan untuk kritik dan saran.

### 🛠 Halaman Admin

- **Dashboard:** Ringkasan jumlah menu dan pesan masuk.
- **Manajemen Menu:** Tambah, Edit, Hapus (Soft Delete), dan Restore Menu.
- **Manajemen Berita:** Menulis artikel promo dengan thumbnail.
- **Profil Perusahaan Dinamis:** Edit visi, misi, link sosmed, dan info kontak tanpa coding.
- **Manajemen Pesan:** Melihat pesan masuk dari pengunjung.

## 🚀 Teknologi yang Digunakan

- **Backend:** Laravel 12.x
- **Frontend:** Blade Templates + Tailwind CSS
- **Database:** MySQL
- **Web Server:** Apache / Nginx (via Laragon)

## ⚙️ Persyaratan Sistem

Pastikan laptop Anda sudah terinstall:

- PHP >= 8.1
- Composer
- Node.js & NPM
- MySQL

## 📦 Panduan Instalasi (Langkah demi Langkah)

Ikuti langkah ini untuk menjalankan proyek di komputer lokal:

1. **Clone Repository**
    ```bash
    git clone [https://github.com/arimbiws/ajsmashburgers.git](https://github.com/arimbiws/ajsmashburgers.git)
    cd ajsmashburgers
    ```
2. **Install Dependencies** Install library PHP dan aset frontend:
    ```bash
    composer install
    npm install
    ```
3. **Setup Environment (.env)** Duplikasi file .env.example menjadi .env:
    ```bash
    cp .env.example .env
    ```
    Buka file .env dan atur konfigurasi database:
    ```bash
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=db_ajsmash
     DB_USERNAME=root
     DB_PASSWORD=
    ```
4. **Generate Application Key**
    ```bash
    php artisan key:generate
    ```
5. **Setup Database & Seeder** Jalankan migrasi tabel dan isi data awal (akun admin):
    ```bash
    php artisan migrate:fresh --seed
    ```
6. **Link Storage** Agar gambar menu/berita bisa muncul:
    ```bash
    php artisan storage:link
    ```
7. **Compile Assets (Tailwind)**
    ```bash
    npm run build
    ```
8. **Jalankan Server**
    ```bash
    php artisan serve
    ```
    Buka browser dan akses: http://127.0.0.1:8000

## 🔑 Akun Login Default

|       Email       | Password |
| :---------------: | :------: |
| admin@ajsmash.com | admin123 |

_(Akun admin telah dibuat otomatis oleh UserSeeder)_

## 🗂 Struktur Database (Skema)

- users: Data login admin.
- menus: Data produk makanan (Soft Deletes aktif).
- categories: Kategori menu (Burgers, Drinks, dll).
- news: Artikel dan promosi.
- outlets: Lokasi cabang.
- company_profiles: Data statis dinamis (Tentang kami, logo, sosmed).
- messages: Kotak masuk pesan dari form kontak.

## 🤝 Kontributor

- Arimbi Wirasetia - Full Stack Developer (Mahasiswa PKL)
- PT Digjaya Digital Group - Instansi PKL
- AJ Smash Burgers - Mitra Industri
