# TugasWeb-P9-LaravelSetup

Project ini dibuat untuk memenuhi Tugas Rutin 9 mata kuliah Pemrograman Web.

## Teknologi

- PHP
- Laravel
- Composer
- MySQL
- phpMyAdmin
- XAMPP
- Visual Studio Code

## Cara Instalasi

### 1. Clone atau buka project

Masuk ke folder project:

C:\xampp\htdocs\TugasWeb-P9-LaravelSetup

### 2. Install dependency

Jalankan:

composer install

### 3. Konfigurasi database

Buat database MySQL dengan nama:

tugasweb_p9

Kemudian konfigurasi file `.env`:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tugasweb_p9
DB_USERNAME=root
DB_PASSWORD=

### 4. Jalankan migration

php artisan migrate

### 5. Jalankan server Laravel

php artisan serve

Aplikasi dapat diakses melalui:

http://127.0.0.1:8000

## Struktur Folder

- `app/Models` → Model aplikasi
- `app/Http/Controllers` → Controller
- `database/migrations` → Struktur tabel database
- `resources/views` → Tampilan Blade
- `routes/web.php` → Routing aplikasi
- `.env` → Konfigurasi environment
- `public` → File publik aplikasi

## Route

- `/` → Halaman Home
- `/about` → Halaman About
- `/contact` → Halaman Contact

## Fitur

- Laravel MVC
- Routing
- Blade View
- Controller
- Model Eloquent
- Migration
- Database MySQL
- Data produk
- Array dinamis dari Route
