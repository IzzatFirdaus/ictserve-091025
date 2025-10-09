# Pengurusan Dokumentasi ICTServe

Folder ini mengandungi semua dokumentasi yang berkaitan dengan sistem ICTServe.

## Prinsip Dokumentasi

Dokumentasi ICTServe mengikut prinsip **Single Source of Truth (SSoT)** dengan struktur berlapis:

1. **Dokumen Induk** (`ICTServe_System_Documentation.md`) - Gambaran keseluruhan sistem dengan pautan kepada dokumen terperinci
2. **Dokumen Terspesialisasi** (dalam folder `versions/`) - Dokumentasi mendalam untuk aspek-aspek tertentu
3. **Glosari Terpusat** (`GLOSSARY.md`) - Definisi istilah dan akronim yang digunakan dalam semua dokumentasi

## Struktur Folder

- `/` - Mengandungi dokumentasi aktif dan sumber rujukan utama
- `/versions` - Mengandungi dokumentasi terperinci mengikut versi sistem
- `/KRISA_DOCS` - Dokumentasi berkaitan dengan KRISA
- `/original ver` - Versi asal dokumentasi untuk rujukan sejarah

## Dokumen Utama

### Dokumen Induk (Master Document)

**File:** `ICTServe_System_Documentation.md`  
**Tujuan:** Dokumen induk yang menyediakan:

- Ringkasan eksekutif sistem ICTServe
- Gambaran keseluruhan seni bina dan objektif sistem
- Indeks terancang dengan pautan kepada semua dokumentasi terperinci
- Rujukan pantas untuk mencari maklumat spesifik

**Cara Guna:** Mulakan di sini untuk memahami sistem secara keseluruhan, kemudian ikuti pautan ke dokumen terspesialisasi untuk butiran teknikal.

### Dokumentasi Terspesialisasi (Versi 2.1.0)

Semua dokumen berikut berada dalam folder `versions/` dan merangkumi aspek-aspek tertentu sistem dengan mendalam:

#### Aliran Sistem (Flow Documentation)

- **Helpdesk & Service Desk:** `v2.1.0_Dokumentasi_Flow_Sistem_Helpdesk_ServiceDesk_ICTServe(iServe).md`
    - Aliran proses tiket helpdesk
    - Status dan peralihan tiket
    - Matriks SLA dan KPI

- **Pinjaman Aset ICT:** `v2.1.0_Dokumentasi_Flow_Sistem_Permohonan_Pinjaman_Aset_ICT_ICTServe(iServe).md`
    - Aliran kerja permohonan hingga pemulangan
    - Matriks kelulusan berdasarkan gred
    - Peraturan perniagaan pinjaman

#### Reka Bentuk Sistem (Design Documentation)

- **Reka Bentuk Sistem:** `v2.1.0_Dokumentasi_Reka_Bentuk_Sistem_ICTServe(iServe).md`
    - Seni bina sistem tahap tinggi
    - Komponen teras dan integrasinya
    - Keputusan reka bentuk dan rasional

- **Reka Bentuk UI/UX:** `v2.1.0_Dokumentasi_Reka_Bentuk_ICTServe(iServe).md`
    - Prinsip reka bentuk antara muka
    - Sistem grid responsif
    - Pematuhan aksesibiliti (WCAG 2.1 AA)

#### Data dan Integrasi

- **Skema Pangkalan Data:** `v2.1.0_Dokumentasi_Jadual_Data_Pengguna_Organisasi_Teras_ICTServe(iServe).md`
    - Struktur jadual pangkalan data
    - Hubungan entiti dan foreign keys
    - Strategi indeks dan prestasi

- **Sistem Notifikasi E-mel:** `v2.1.0_Dokumentasi_Sistem_Notifikasi_E-mel_ICTServe(iServe).md`
    - Konfigurasi sistem e-mel
    - Templat notifikasi
    - Pengurusan queue dan pengendalian ralat

### Sumber Rujukan

- **Glosari:** `GLOSSARY.md` - Definisi istilah teknikal dan akronim
- **Panduan Sumbangan:** `../CONTRIBUTING.md` - Garis panduan untuk menyumbang kepada dokumentasi

## Versi Dokumentasi

| Versi  | Tarikh Kemaskini | Status    | Nota                                          |
| ------ | ---------------- | --------- | --------------------------------------------- |
| v3.0.0 | 6 Oktober 2025   | **Aktif** | Versi terkini dengan struktur master document |
| v2.1.0 | 5 Oktober 2025   | Arkib     | Dokumentasi terperinci modular                |
| v2.0   | -                | Arkib     | Versi awal dokumentasi terspesialisasi        |
| v1.0   | -                | Arkib     | Dokumentasi sistem awal                       |

## Panduan Penggunaan

### Untuk Pembangun Baru

1. Mulakan dengan `ICTServe_System_Documentation.md` untuk memahami gambaran keseluruhan
2. Rujuk `GLOSSARY.md` untuk memahami istilah teknikal
3. Akses dokumentasi terspesialisasi mengikut komponen yang anda bangunkan

### Untuk Pentadbir Sistem

1. Rujuk dokumentasi aliran sistem untuk memahami proses perniagaan
2. Gunakan dokumentasi reka bentuk sistem untuk konfigurasi dan deployment
3. Rujuk dokumentasi skema pangkalan data untuk pengurusan data

### Untuk Pihak Pengurusan

1. Baca ringkasan eksekutif dalam dokumen induk
2. Fokus pada objektif sistem dan metrik kejayaan
3. Rujuk dokumentasi aliran untuk memahami proses operasi

## Prinsip Penyelenggaraan

1. **Konsistensi:** Semua dokumentasi mengikut format dan gaya yang sama
2. **Ketepatan:** Maklumat dikemas kini seiring dengan perubahan sistem
3. **Keterlacakan:** Semua perubahan direkod dalam sejarah revisi
4. **Kebolehcapaian:** Pautan silang memudahkan navigasi antara dokumen

## Sokongan

Untuk pertanyaan atau isu berkaitan dokumentasi, sila rujuk:

- **Pasukan Pembangunan ICTServe**
- **E-mel:** support@ictserve.motac.gov.my
- **Dokumentasi Sumbangan:** `../CONTRIBUTING.md`
