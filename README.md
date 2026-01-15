# LaporPak – Online Public Complaint Service

[![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
[![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://mysql.com)

**LaporPak** adalah sistem pengaduan masyarakat berbasis web yang memungkinkan warga melaporkan permasalahan lingkungan (jalan rusak, banjir, dll.) dan memantau status penanganannya secara online. Aplikasi ini dikembangkan sebagai proyek Ujian Akhir Semester mata kuliah **Pemrograman Web 1/3 SKS** - Universitas Teknologi Bandung.

🌐 **Live Demo**: [laporpak.great-site.net](https://laporpak.great-site.net)

---

## 📋 Daftar Isi

- [Fitur Utama](#-fitur-utama)
- [Studi Kasus](#-studi-kasus)
- [Teknologi](#-teknologi)
- [Instalasi](#-instalasi)
- [Akun Demo](#-akun-demo)
- [Screenshot](#-screenshot)
- [Video Demo](#-video-demo)
- [Informasi UAS](#-informasi-uas)
- [Developer](#-developer)

---

## ✨ Fitur Utama

### 1. Autentikasi & Manajemen Session
- ✅ Register dan Login untuk masyarakat dan petugas
- ✅ Session management berbasis cookies
- ✅ Multi-role access (Admin, Petugas, Masyarakat)

### 2. Dashboard Interaktif
- 📊 Statistik pengaduan (Total, Belum Diproses, Proses, Selesai)
- 👥 Ringkasan jumlah user dan masyarakat
- 📈 Grafik pengaduan per tahun

### 3. Manajemen Pengaduan (CRUD)
- 📝 Masyarakat dapat membuat pengaduan + upload foto
- 🔍 Petugas dapat melihat detail dan memberikan respon
- 🔄 Update status pengaduan (Belum Diproses → Proses → Selesai)
- 🔎 Pencarian, sorting, dan pagination

### 4. Manajemen Data Master
- 👤 **CRUD Masyarakat**: kelola data NIK, username, email, telepon, alamat
- 🛡️ **CRUD User/Petugas**: kelola akun admin dan officer dengan level akses

### 5. Laporan (Export PDF & Excel)
- 📅 Filter laporan berdasarkan rentang tanggal
- 📄 Export data pengaduan ke **PDF**
- 📊 Export data pengaduan ke **Excel**

### 6. Track Complaint (Public)
- 🔓 Halaman publik untuk cek status pengaduan menggunakan **NIK**
- 📱 Tanpa perlu login

### 7. Desain Modern & Responsif
- 🎨 UI/UX bersih dan user-friendly
- 📱 Responsive untuk mobile dan desktop

---

## 🎯 Studi Kasus

> **Sistem Pelayanan Pengaduan Masyarakat Online**

Masyarakat dapat melaporkan permasalahan infrastruktur dan lingkungan (jalan rusak, lampu mati, banjir, dll.) kepada petugas kelurahan/desa secara digital.

**Alur Proses:**
1. Masyarakat mendaftar dan login
2. Mengisi form pengaduan + upload foto bukti
3. Petugas menerima dan memverifikasi pengaduan
4. Petugas memberikan respon dan update status
5. Masyarakat dapat memantau progress melalui dashboard atau halaman Track Complaint

---

## 🛠️ Teknologi

| Kategori | Teknologi |
|----------|-----------|
| **Backend** | Laravel 10/11 (PHP Framework) |
| **Frontend** | Blade Template Engine + Bootstrap/Tailwind CSS |
| **Database** | MySQL |
| **Authentication** | Laravel Session-based Auth |
| **Export** | Laravel Excel (`maatwebsite/excel`), DomPDF |
| **Hosting** | InfinityFree (Free Hosting) |
| **Version Control** | Git & GitHub |

---

## 🚀 Instalasi

### Prerequisites
- PHP >= 8.1
- Composer
- MySQL
- Node.js & NPM
