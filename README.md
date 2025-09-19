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

🖼 Tampilan Arsip Surat
<img width="1920" height="912" alt="screencapture-127-0-0-1-8000-2025-09-19-18_34_55" src="https://github.com/user-attachments/assets/29a274c6-c156-4f5e-83a0-fc767cf5d439" />
<img width="1920" height="1170" alt="screencapture-127-0-0-1-8000-surat-6-2025-09-19-18_35_30" src="https://github.com/user-attachments/assets/6f8c8225-90b1-4d51-8c8b-91197ea1e28b" />

🖼 Tampilan Kategori
<img width="1920" height="912" alt="screencapture-127-0-0-1-8000-categories-2025-09-19-18_36_06" src="https://github.com/user-attachments/assets/15646160-786a-438d-8275-21db7ccc9387" />

🖼 Tampilan About
<img width="1920" height="912" alt="screencapture-127-0-0-1-8000-about-2025-09-19-18_39_49" src="https://github.com/user-attachments/assets/270451cc-2921-45f4-a0d4-1ea2010705b2" />

<h3 align="center">👨‍💻 Dibuat oleh</h3>

<p align="center">
<b>Veri Abror Hadi</b><br/>
NIM: 2331730095<br/>
Polinema — 2025
</p>
