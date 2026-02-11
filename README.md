<div align="center">
    <a href="https://github.com/arimbiws/ajsmashburgers">
    <img src="public/company/logo-default.png" alt="Logo AJ Smash Burger" height="200">
    </a>
    <hr />
    <p>
        <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP" /> 
        <img src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel" />
        <img src="https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white" alt="Tailwind CSS" />
        <img src="https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL" />
    </p>
    <p align="center">
        Sistem Informasi berbasis website, dibangun untuk membantu <strong>AJ Smash Burger</strong> dalam mengelola promosi digital, arsip menu, dan informasi gerai secara terpusat. Dilengkapi dengan <strong>Admin Panel</strong> untuk pengelolaan konten.
    </p>
    Proyek ini dikembangkan sebagai hasil dari <strong>Kegiatan Praktik Kerja Lapangan (PKL)</strong> di <strong>PT Digjaya Digital Group</strong>.

</div>

## 💻 Preview Website

|                      Halaman Utama                       |                         Halaman Admin                          |
| :------------------------------------------------------: | :------------------------------------------------------------: |
| ![Home Page](public/screenshots/screenshot-homepage.png) | ![Admin Dashboard](public/screenshots/screenshot-homepage.png) |

## ✨ Fitur Utama

### 👤 Pengunjung (Public)

- Melihat profil usaha (About Us, Visi Misi).
- Melihat daftar Menu lengkap dengan harga & kategori.
- Cek lokasi Outlet (terintegrasi Google Maps).
- Membaca Berita/Promo terbaru mengenai promosi AJ Smash Burger.
- Mengirim pesan via fitur Contact Us.

### 🛠 Admin (Mitra)

- **Dashboard:** Ringkasan jumlah menu dan pesan masuk.
- **Manajemen Menu:** Tambah, Edit, Hapus, dan set status stok (Ada/Habis).
- **Manajemen Berita:** Menulis artikel promo dengan thumbnail.
- **Profil Perusahaan Dinamis:** Edit visi, misi, link sosmed, dan info kontak tanpa coding.
- **Manajemen Pesan:** Melihat pesan masuk dari pengunjung.

## 🚀 Teknologi yang Digunakan

- **Backend:** Laravel 12.x
- **Frontend:** Blade Templates + Tailwind CSS
- **Database:** MySQL
- **Web Server:** Apache (via Laragon)

## ⚙️ Persyaratan Sistem

Pastikan laptop Anda sudah terinstall:

- PHP >= 8.1
- Composer
- Node.js & NPM
- MySQL

## 📦 Panduan Instalasi

Ikuti langkah ini untuk menjalankan proyek di komputer lokal:

1. **Clone Repository**
    ```bash
    git clone https://github.com/arimbiws/ajsmashburgers.git
    cd ajsmashburgers
    ```
2. **Install Dependencies**
    ```bash
    composer install
    npm install
    ```
3. **Setup Environment (.env)**\
   Duplikasi file .env.example menjadi .env:
    ```bash
    cp .env.example .env
    ```
    Buka file .env dan atur konfigurasi database:
    ```bash
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=ajsmashburgers
     DB_USERNAME=root
     DB_PASSWORD=
    ```
4. **Generate Key & Storage Link**
    ```bash
    php artisan key:generate
    php artisan storage:link
    ```
5. **Migrate & Seed Database**\
   Pastikan database `ajsmashburgers` sudah dibuat di MySQL, lalu jalankan:
    ```bash
    php artisan migrate:fresh --seed
    ```
6. **Jalankan Project**\
   Buka dua terminal terpisah:
    - Terminal 1 (Compile Assets):

    ```bash
    npm run build
    ```

    - Terminal 2 (Server Laravel):

    ```bash
    php artisan serve
    ```

7. **Akses Website**\
   Buka browser dan akses: http://127.0.0.1:8000

## 🗂 Struktur Database

- `users`: Menyimpan data login Admin.
- `menus`: Data makanan/minuman (Relasi ke Categories).
- `categories`: Kategori menu (Burger, Snacks, Drinks).
- `news`: Artikel berita dan promo.
- `outlets`: Data lokasi cabang.
- `company_profiles`: Data dinamis profil usaha (Logo, Sosmed, Alamat).
- `messages`: Kotak masuk pesan dari pengunjung.

## 🤝 Kontributor
Proyek ini dikembangkan sebagai bagian dari Laporan PKL/Pengabdian Masyarakat.

- **Pengembang:** Arimbi Wirasetia (Mahasiswa PKL)
- **Instansi PKL:** PT Digjaya Digital Group
- **Mitra UMKM:** AJ Smash Burger
