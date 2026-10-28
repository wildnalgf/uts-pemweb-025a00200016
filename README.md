# UTS Pemrograman Web - CineArchive

## 1. Identitas
- **Nama:** [Wildan Maulana]
- **NIM:** [025A00200016]
- **Kelas:** [A2-3A]

## 2. Deskripsi Proyek
CineArchive adalah aplikasi katalog berbasis web sederhana menggunakan PHP Native tanpa database. Aplikasi ini digunakan untuk mencatat dan mengelola daftar koleksi film pribadi, status penontonan, serta menampilkan statistik ringkasan rating koleksi.

## 3. Cara Menjalankan di Localhost
1. Unduh/clone repositori ini ke direktori web server local (`htdocs` untuk XAMPP atau `www` untuk Laragon).
2. Buka XAMPP/Laragon dan jalankan service Apache.
3. Akses aplikasi melalui browser di alamat: `http://localhost/uts-pemweb-NIM/index.php`.

## 4. Daftar Fitur
- **Halaman Profil Pengembang (`index.php`):** Menampilkan data diri serta widget ringkasan statistik koleksi.
- **Halaman Katalog Film (`katalog.php`):** Menampilkan daftar film secara dinamis menggunakan perulangan PHP.
- **Pengaman Input (`functions.php` -> `e()`):** Mencegah serangan XSS pada pencetakan variabel.

## 5. Daftar Fungsi Array Bawaan PHP
- `count()`: Menghitung total item film dan jumlah film per status di `index.php` & `katalog.php`.
- `array_filter()`: Menyaring film berdasarkan status ('Watched') di `functions.php`.
- `array_column()`: Mengambil daftar nilai rating film di `functions.php`.
- `array_sum()`: Menjumlahkan total rating untuk menghitung rata-rata di `functions.php`.

## 6. Tangkapan Layar
*(Tambahkan gambar tangkapan layar tampilan halaman index.php dan katalog.php pada folder assets/screenshots)*

## 7. Referensi & Catatan AI
- Referensi PHP: [php.net](https://www.php.net/)
- Bantuan AI: Digunakan untuk struktur dasar layout CSS grid dan pengecekan fungsi `strict_types`.