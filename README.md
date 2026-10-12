# Tugas Rutin 9 — Setup Laravel

## Identitas Proyek

- **Nama Tugas:** Tugas Rutin 9 — Setup Laravel
- **Repository:** `TugasWeb-P9-LaravelSetup`
- **Framework:** Laravel
- **Database:** MySQL
- **Tools:** PHP, Composer, MySQL/XAMPP, dan Visual Studio Code

## Deskripsi

Proyek ini dibuat untuk memenuhi Tugas Rutin 9 pada mata kuliah Pemrograman Web. Tujuannya adalah memahami proses instalasi Laravel, struktur direktori, konfigurasi database, routing, Blade View, serta konsep dasar Model-View-Controller (MVC).

## Fitur dan Implementasi

- Instalasi proyek menggunakan Composer.
- Konfigurasi database MySQL melalui file `.env`.
- Menjalankan aplikasi menggunakan Laravel Artisan.
- Route `/` untuk halaman utama.
- Route `/about` untuk halaman About.
- Route `/contact` untuk halaman Contact.
- Route `/hello/{nama}` untuk halaman Hello.
- Blade View yang menampilkan data dinamis dari route.
- Pengenalan pembuatan Controller dan Model beserta migration.

## Teknologi

- PHP
- Laravel
- MySQL
- Composer
- Blade Template Engine

## Struktur Direktori Laravel

- `app/` — Model, Controller, dan kode utama aplikasi.
- `bootstrap/` — Proses bootstrap aplikasi.
- `config/` — Konfigurasi aplikasi.
- `database/` — Migration, factory, dan seeder.
- `public/` — Entry point dan aset publik.
- `resources/views/` — File Blade View.
- `routes/web.php` — Definisi route web.
- `storage/` — File log dan penyimpanan aplikasi.
- `tests/` — Pengujian aplikasi.
- `vendor/` — Dependency Composer yang dipasang secara lokal.

## Persiapan dan Instalasi

1. Pastikan PHP, Composer, dan MySQL sudah terpasang.
2. Clone repository ini.
3. Masuk ke folder proyek.
4. Jalankan:

   ```bash
   composer install
   ```

5. Salin `.env.example` menjadi `.env`.
6. Buat database MySQL melalui phpMyAdmin dan sesuaikan nama database pada `.env`.
7. Buat application key:

   ```bash
   php artisan key:generate
   ```

8. Jalankan migration jika diperlukan:

   ```bash
   php artisan migrate
   ```

9. Jalankan server:

   ```bash
   php artisan serve
   ```

10. Buka `http://127.0.0.1:8000` pada browser.

## Catatan

File `.env` tidak disertakan dalam repository. Setiap pengguna perlu membuat konfigurasi `.env` lokal sesuai database masing-masing.

## Repository

`TugasWeb-P9-LaravelSetup`
