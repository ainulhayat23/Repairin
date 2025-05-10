<!-- <!-- <p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development/)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT). -->

<h1 align="center">RepairIn</h1>
<br>
<h3 align="center">Platform Perbaikan Barang Elektronik</h3>
<p align="center">
  <img src="https://github.com/user-attachments/assets/3e809a21-1b25-4ef9-8e78-3bc97377b749" alt="Logo unsulbar" width="200"/>
</p>

<p align="center">
  <strong>AINUL HAYAT. H</strong><br/><br/>
  <strong>D0223317</strong><br/><br/>
  <strong>Framework Web Based</strong><br/><br/>
  <strong>2025</strong>
</p>

<h3>Role dan Fitur</h3>

## 🧑‍💼 Admin
| Fitur                    | Deskripsi                                           |
|--------------------------|-----------------------------------------------------|
| Kelola data pengguna     | Tambah, edit, hapus akun teknisi & pelanggan       |
| Kelola laporan perbaikan | Melihat dan mengelola semua laporan yang masuk     |
| Kelola status perbaikan  | Mengubah status laporan (diajukan, diproses, dll)  |
| CRUD teknisi             | Tambah, edit, hapus data teknisi                   |

## 👨‍🔧 Teknisi
| Fitur                          | Deskripsi                                        |
|--------------------------------|--------------------------------------------------|
| Melihat tugas perbaikan        | Melihat laporan yang ditugaskan kepadanya        |
| Update status perbaikan        | Mengubah status jadi "diproses" atau "selesai"   |
| Input hasil perbaikan          | Menambahkan deskripsi hasil & biaya perbaikan    |

## 👤 Pelanggan (User)
| Fitur                           | Deskripsi                                                    |
|---------------------------------|----------------------------------------------------------------|
| Registrasi dan login            | Membuat akun dan masuk ke sistem                              |
| Melapor kerusakan (formulir)    | Mengisi laporan kerusakan barang elektronik                   |
| Pilih antar barang / panggil teknisi | Menentukan metode layanan: antar ke tempat / teknisi ke rumah |
| Lihat status perbaikan          | Melihat progres laporan: diajukan, diproses, selesai          |

<h3>Tabel-tabel database beserta field dan tipe datanya</h3>

<h3>Tabel Users</h3>

| Kolom        | Tipe      | Keterangan                      |
|--------------|-----------|----------------------------------|
| `id`         | bigint    | Primary key                     |
| `name`       | string    | Nama pengguna                   |
| `email`      | string    | Email pengguna (unik)           |
| `password`   | string    | Password terenkripsi            |
| `role`       | enum      | `admin`, `teknisi`, `pelanggan` |
| `created_at` | timestamp | Waktu dibuat                    |
| `updated_at` | timestamp | Waktu diubah                    |

<h3>Tabel Perbaikans</h3>

| Kolom               | Tipe      | Keterangan                                      |
| ------------------- | --------- | ----------------------------------------------- |
| `id`                | bigint    | Primary key                                     |
| `user_id`           | foreign   | Relasi ke `users` (pelanggan)                   |
| `teknisi_id`        | foreign   | Relasi ke `users` (teknisi) nullable            |
| `status`            | enum      | `diajukan`, `diproses`, `selesai`, `dibatalkan` |
| `status_pembayaran` | enum      | `belum_dibayar`, `sudah_dibayar`                |
| `created_at`        | timestamp | Timestamp pembuatan                             |
| `updated_at`        | timestamp | Timestamp pembaruan                             |

<h3>Tabel barang rusak</h3>

| Kolom                | Tipe    | Keterangan                                     |
|----------------------|---------|------------------------------------------------|
| `id`                 | bigint  | Primary key                                    |
| `perbaikan_id`       | foreign | Relasi ke `perbaikans`                         |
| `nama_barang`        | string  | Nama barang elektronik                         |
| `kerusakan`          | text    | Deskripsi kerusakan                            |
| `alamat_penjemputan` | string  | Alamat tempat teknisi dipanggil (wajib diisi) |


<h3>Tabel hasil_perbaikans</h3>

| Kolom          | Tipe     | Keterangan                            |
| -------------- | -------- | ------------------------------------- |
| `id`           | bigint   | Primary key                           |
| `perbaikan_id` | foreign  | Relasi ke `perbaikans`                |
| `biaya`        | integer  | Biaya perbaikan                       |
| `catatan`      | text     | Penjelasan hasil perbaikan (opsional) |
| `selesai_at`   | datetime | Waktu perbaikan diselesaikan          |

<h3>Jenis relasi dan tabel yang berelasi</h3>

### 🔗 Relasi Antar Tabel – Sistem Repairin

1. users ↔ perbaikans
- Jenis: One-to-Many
- Penjelasan: Satu pelanggan dapat membuat banyak laporan perbaikan.
- Kunci Relasi: users.id → perbaikans.user_id

2. users ↔ perbaikans
- Jenis: One-to-Many
- Penjelasan: Satu teknisi dapat menangani banyak laporan perbaikan.
- Kunci Relasi: users.id → perbaikans.teknisi_id

3. perbaikans ↔ barang_rusak
- Jenis: One-to-One
- Penjelasan: Satu laporan perbaikan hanya memiliki satu data barang rusak.
- Kunci Relasi: perbaikans.id → barang_rusak.perbaikan_id

4. perbaikans ↔ hasil_perbaikans
- Jenis: One-to-One
- Penjelasan: Satu laporan perbaikan hanya memiliki satu hasil perbaikan.
- Kunci Relasi: perbaikans.id → hasil_perbaikans.perbaikan_id

5. users ↔ keahlian_teknisi
- Jenis: One-to-Many
- Penjelasan: Satu teknisi bisa memiliki banyak keahlian.
- Kunci Relasi: users.id → keahlian_teknisi.teknisi_id

6. kategoris ↔ keahlian_teknisi
- Jenis: One-to-Many
- Penjelasan: Satu kategori barang bisa dimiliki oleh banyak teknisi.
- Kunci Relasi: kategoris.id → keahlian_teknisi.kategori_id

6. users ↔ kategoris melalui keahlian_teknisi
- Jenis: Many-to-Many
- Penjelasan: Banyak teknisi bisa punya banyak keahlian, dan satu kategori bisa dimiliki oleh banyak teknisi.
- Kunci Relasi: users.id ↔ keahlian_teknisi.teknisi_id, kategoris.id ↔ keahlian_teknisi.kategori_id