# App Perpustakaan

Aplikasi Sistem Informasi Perpustakaan berbasis web yang dikembangkan menggunakan framework Laravel untuk memenuhi praktikum Pemrograman Web / Pemrograman Berbasis Framework.

## Deskripsi & Tujuan
- **Nama Aplikasi**: App Perpustakaan
- **Tujuan**: Membantu pengelolaan data pustaka, katalog buku, peminjaman, pengembalian, serta manajemen anggota perpustakaan secara efisien, rapi, dan terstruktur.

---

## Cara Menjalankan Project Secara Lokal

Ikuti langkah-langkah berikut untuk menjalankan project di komputer lokal:

1. **Clone Repository**:
   ```bash
   git clone -b dev https://github.com/attazzhra/app-perpustakaan.git
   cd app-perpustakaan
   ```

2. **Install Dependensi**:
   ```bash
   composer install
   npm install
   ```

3. **Konfigurasi File Environment**:
   Salin file `.env.example` menjadi `.env`:
   ```bash
   cp .env.example .env
   ```
   Generate application key:
   ```bash
   php artisan key:generate
   ```

4. **Jalankan Server Lokal**:
   ```bash
   php artisan serve
   ```
   Buka browser dan akses melalui URL: `http://127.0.0.1:8000`

---

## Konsep MVC (Model, View, Controller)

Menurut pemahaman saya, arsitektur MVC membagi tanggung jawab komponen aplikasi menjadi tiga bagian:
1. **Model**: Bertanggung jawab mengelola struktur data, aturan bisnis, dan interaksi langsung dengan tabel database (mengambil, menyimpan, dan memanipulasi data).
2. **View**: Bertanggung jawab menyajikan tampilan visual dan antarmuka pengguna (UI/HTML) yang dilihat dan berinteraksi langsung dengan user.
3. **Controller**: Berperan sebagai jembatan atau pengatur lalu lintas logika yang menerima request dari user, memproses datanya melalui Model, lalu mengirimkan hasilnya ke View yang sesuai untuk ditampilkan.

