# Character Vault

**Character Vault** adalah website untuk mengelola dan mengorganisasi karakter fiksi. Website ini dibuat sebagai proyek Ujian Tengah Semester (UTS) Pemrograman Web Genap 2025/2026.

## Tentang Website

Website ini memungkinkan pengguna melihat ringkasan koleksi karakter, mengakses direktori karakter, dan melihat informasi akun.

## Teknologi

- **Framework:** Laravel 13
- **Bahasa Pemrograman:** PHP
- **Frontend:** HTML, CSS, JavaScript
- **Template Engine:** Blade
- **Web Server Lokal:** Laragon

## Fitur

- Login menggunakan username.
- Dashboard dengan ringkasan jumlah karakter dan proyek.
- Character Management untuk menampilkan direktori karakter.
- Profile untuk menampilkan informasi akun.
- Navigasi antarhalaman dengan username yang tetap diteruskan.

## Screenshot Website

### Login
![Login Page](screenshots/login.png)

### Dashboard
![Dashboard](screenshots/dashboard.png)

### Character Management
![Character Management](screenshots/management.png)

### Profile
![Profile](screenshots/profile.png)

## Menjalankan Project

1. Clone repository ini.
2. Masuk ke direktori proyek.
3. Install dependency:

   ```bash
   composer install
   ```

4. Salin `.env.example` menjadi `.env`.
5. Generate application key:

   ```bash
   php artisan key:generate
   ```

6. Jalankan server:

   ```bash
   php artisan serve
   ```

7. Buka alamat lokal yang ditampilkan oleh Laravel.

---

**UTS Pemrograman Web Genap 2025/2026**