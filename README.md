<h1 align="center">📂 Arsip Surat Laravel</h1>

<p align="center">
  Aplikasi web sederhana untuk mengarsipkan surat berbasis <b>Laravel</b><br/>
  Dibuat sebagai tugas ujian LSP Polinema
</p>

---

## 🎯 Tujuan
- Membuat aplikasi pengarsipan surat digital.
- Menerapkan konsep **CRUD (Create, Read, Update, Delete)** dengan Laravel.
- Menyediakan fitur pencarian, kategori, serta unduh dokumen.

---

## ✨ Fitur
- ✅ Upload & arsip surat (PDF)  
- ✅ Cari surat berdasarkan judul  
- ✅ Unduh surat dalam format PDF  
- ✅ Hapus surat dengan konfirmasi  
- ✅ CRUD kategori surat  
- ✅ Halaman profil / about pembuat  

---

## ⚙️ Cara Menjalankan
1. **Clone repository**
git clone https://github.com/username/arsip-surat-laravel.git
cd arsip-surat-laravel

2. **Install dependency**
composer install
npm install && npm run dev

3. **Konfigurasi environment**  
Copy file `.env.example` menjadi `.env` lalu sesuaikan koneksi database:
DB_DATABASE=arsip_surat
DB_USERNAME=root
DB_PASSWORD=

4. **Generate key aplikasi**
php artisan key:generate

5. **Import database**
mysql -u root -p arsip_surat < database.sql

6. **Jalankan server Laravel**
php artisan serve
👉 Akses di browser: `http://127.0.0.1:8000`

- Jika kategori kosong, jalankan seeder:
  php artisan db:seed --class=KategoriSeeder

<h3 align="center">👨‍💻 Dibuat oleh</h3>

<p align="center">
<b>Veri Abror Hadi</b><br/>
NIM: 2331730095<br/>
Polinema — 2025
</p>
