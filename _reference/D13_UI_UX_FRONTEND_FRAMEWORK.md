# Dokumentasi Rangka Kerja Frontend UI/UX (Frontend Framework Documentation)

**Sistem Helpdesk & ICT Asset Loan BPM MOTAC**  
**Versi:** 2.0.0 (SemVer)  
**Tarikh Kemaskini:** 17 Oktober 2025  
**Status:** Aktif  
**Klasifikasi:** Terhad - Dalaman MOTAC  
**Penulis:** Pasukan Pembangunan BPM MOTAC  
**Standard Rujukan:** ISO 9241-210, ISO 9241-110, ISO 9241-11, WCAG 2.2 Level AA

---

## Maklumat Dokumen (Document Information)

| Atribut                | Nilai                                    |
|------------------------|------------------------------------------|
| **Versi**              | 2.0.0                                    |
| **Tarikh Kemaskini**   | 17 Oktober 2025                          |
| **Status**             | Aktif                                    |
| **Klasifikasi**        | Terhad - Dalaman MOTAC                   |
| **Pematuhi**           | ISO 9241-210, 9241-110, 9241-11, WCAG 2.2 Level AA |
| **Bahasa**             | Bahasa Melayu (utama), English (teknikal)|

---

## Sejarah Perubahan (Changelog)

| Versi  | Tarikh          | Perubahan                                      | Penulis       |
|--------|-----------------|------------------------------------------------|---------------|
| 1.0.0  | September 2025  | Versi awal dokumentasi rangka kerja frontend   | Pasukan BPM   |
| 2.0.0  | 17 Oktober 2025 | Penyeragaman mengikut D00-D14, SemVer, cross-reference | Pasukan BPM   |

---

## Rujukan Dokumen Berkaitan (Related Document References)

- **[D00_SYSTEM_OVERVIEW.md]** - Ringkasan Sistem
- **[D12_UI_UX_DESIGN_GUIDE.md]** - Panduan Rekabentuk UI/UX (prinsip dan garis panduan)
- **[D14_UI_UX_STYLE_GUIDE.md]** - Panduan Gaya UI/UX (spesifikasi visual)
- **[GLOSSARY.md]** - Glosari Istilah Sistem

---

## 1. TUJUAN DOKUMEN (Purpose)

Dokumen ini menerangkan rangka kerja frontend (frontend framework) UI/UX untuk sistem **Helpdesk & ICT Asset Loan BPM MOTAC**, memastikan rekabentuk dan pembangunan antaramuka adalah konsisten, mudah diakses, dan patuh piawaian antarabangsa **ISO 9241-210** (human-centred design), **ISO 9241-110** (dialogue principles), **ISO 9241-11** (usability), dan **WCAG 2.2 Level AA** (accessibility).

---

## 2. PILIHAN TEKNOLOGI FRONTEND (Frontend Technology Choices)

- **Blade Templating (Laravel)** — Semua komponen utama UI dibina menggunakan Blade.
- **Bootstrap 5.x** — Framework CSS utama untuk grid system, komponen, dan utiliti responsif.
- **SB Admin (StartBootstrap)** — Template dashboard sebagai asas layout admin.
- **FontAwesome / Material Icons** — Untuk ikon yang konsisten dan mudah dikenali.
- **Custom CSS** — Untuk gaya MOTAC (warna korporat, font, dsb).
- **JavaScript (Vanilla + ES6)** — Untuk interaktiviti dropdown, AJAX, validasi masa nyata, dan accessibility enhancement.

---

## 3. PRINSIP REKABENTUK (Design Principles)

### 3.1. ISO 9241-210 (Human-centred Design)

- **Fokus Pengguna**: Setiap komponen direka berdasarkan keperluan pengguna sebenar (staf, BPM, admin).
- **Iterasi & Feedback**: Ujian UAT dan penambahbaikan berdasarkan maklum balas pengguna.

### 3.2. ISO 9241-110 (Dialogue Principles)

- **Kebolehfahaman (Clarity)**: Label, ikon, dan aksi jelas.
- **Konsistensi**: Layout, warna, dan komponen seragam di seluruh sistem.
- **Kawalan Pengguna**: Pengguna boleh membatalkan, mengesahkan, atau menyemak tindakan dengan mudah.
- **Maklum Balas (Feedback)**: Notifikasi visual selepas setiap aksi penting.

### 3.3. ISO 9241-11 (Usability)

- **Keberkesanan**: Fungsi utama mudah dicapai.
- **Kecekapan**: Proses ringkas, sedikit klik, navigasi pantas.
- **Kepuasan Pengguna**: UI/UX selesa dan profesional.

### 3.4. WCAG 2.2 Level AA (Accessibility)

- **Kontras warna** minimum 4.5:1.
- **Navigasi papan kekunci** penuh untuk semua elemen interaktif.
- **Teks alternatif** pada semua imej/ikon penting.
- **Label borang** yang jelas.
- **Responsif** di semua peranti.
- **Error handling**: Mesej ralat ringkas, jelas, dan berdekatan input.

---

## 4. STRUKTUR UTAMA (Key Structure)

### 4.1. Layout

- **Header**: Logo MOTAC, navigasi utama, dan search icon.
- **Sidebar**: (untuk admin/BPM) akses kepada modul penting.
- **Content**: Single-column container untuk form & dashboard utama.
- **Footer**: Logo BPM, hakcipta dinamik, dan ikon social media.

### 4.2. Komponen Blade

- `@extends('layouts.main')` — Semua view mewarisi layout utama.
- `@include('includes.navbar')`, `@include('includes.sidebar')`, `@include('includes.footer')` — Untuk modulariti & konsistensi.
- `@yield('content')` — Penanda kawasan kandungan utama.

### 4.3. Grid System

- **Grid 12-kolum Bootstrap** — Untuk responsif, layout dashboard & forms.
- **Breakpoints**: xs, sm, md, lg, xl — Uji setiap saiz.

---

## 5. KOMPONEN UTAMA (Key Components)

### 5.1. Navigasi

- **Header Navbar**: Sticky, mudah akses, ikon jelas.
- **Sidebar**: (optional) untuk user role tertentu (e.g. BPM admin).

### 5.2. Borang (Forms)

- **Field wajib**: Ada tanda * dan warna berlainan.
- **Validasi masa nyata** dengan JavaScript dan server-side ($request->validate()).
- **Conditional fields**: Contoh No. Aset muncul jika jenis kerosakan tertentu dipilih.
- **Button aksi**: “Hantar”, “Reset” hanya aktif selepas perakuan.

### 5.3. Tabel & Kad (Tables & Cards)

- **Tabel responsif**: `.table-responsive` untuk mobile/tablet.
- **Kad (cards)**: Untuk summary, status, metrik dashboard.

### 5.4. Status & Notifikasi

- **Badges**: Warna berbeza untuk status (Open, Closed, Loaned, etc).
- **Toast & modals**: Untuk notifikasi berjaya/gagal.

### 5.5. Pagination

- Gunakan Bootstrap pagination, letak di bawah tabel/senarai.

---

## 6. AKSESIBILITI & TESTING (Accessibility & Testing)

- **Tab order**: Semua input dan button boleh diakses dengan tab.
- **Skip to content**: Link di atas untuk pengguna screen reader.
- **Lint & audit**: Gunakan Lighthouse, axe, atau WAVE untuk semakan WCAG.
- **UAT**: Semua perubahan besar diuji dengan pengguna sebenar.

---

## 7. BRANDING & KONSISTENSI (Branding & Consistency)

- **Warna utama**: Mengikut warna korporat MOTAC.
- **Font**: Sans-serif seperti Open Sans atau Roboto.
- **Logo**: Sentiasa di header & footer.
- **Ikon**: Pilih ikon konsisten untuk fungsi (edit, delete, info, dsb).

---

## 8. CONTOH KOD (Code Examples)

### 8.1. Navbar (Blade)

```blade
<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ asset('img/motac-logo.png') }}" alt="MOTAC Logo" height="32">
    </a>
    <!-- Navigation links -->
</nav>
```

### 8.2. Form Input

```blade
<div class="mb-3">
    <label for="fullname" class="form-label">Nama Penuh *</label>
    <input type="text" class="form-control @error('fullname') is-invalid @enderror"
           name="fullname" id="fullname" required value="{{ old('fullname') }}">
    @error('fullname')
        <span class="invalid-feedback">{{ $message }}</span>
    @enderror
</div>
```

### 8.3. Responsive Table

```blade
<div class="table-responsive">
    <table class="table table-striped">
        <!-- Table rows -->
    </table>
</div>
```

### 8.4. Status Badge

```blade
<span class="badge bg-success">Open</span>
<span class="badge bg-warning text-dark">In Progress</span>
<span class="badge bg-danger">Closed</span>
```

---

## 9. PENUTUP

Dokumentasi ini menjadi rujukan utama pembangun frontend dan UI/UX bagi sistem Helpdesk & ICT Asset Loan BPM MOTAC. Semua pembangunan antaramuka wajib mematuhi prinsip usability, accessibility, dan branding yang digariskan mengikut piawaian antarabangsa **ISO 9241-210** (human-centred design), **ISO 9241-110** (dialogue principles), **ISO 9241-11** (usability), dan **WCAG 2.2 Level AA** (accessibility).

---

## Glosari & Rujukan (Glossary & References)

Sila rujuk **[GLOSSARY.md]** untuk istilah teknikal seperti:

- **Frontend Framework**: Rangka kerja pembangunan antaramuka pengguna
- **Bootstrap**: Framework CSS responsif popular untuk pembangunan web
- **SB Admin**: Template dashboard admin berasaskan Bootstrap
- **Blade**: Engine templating Laravel untuk view layer
- **WCAG (Web Content Accessibility Guidelines)**: Garis panduan aksesibiliti web
- **ISO 9241**: Piawaian ergonomi interaksi manusia-sistem

**Dokumen Rujukan:**

- **D00_SYSTEM_OVERVIEW.md** - Gambaran keseluruhan sistem
- **D12_UI_UX_DESIGN_GUIDE.md** - Panduan rekabentuk UI/UX (prinsip dan garis panduan)
- **D14_UI_UX_STYLE_GUIDE.md** - Panduan gaya visual terperinci

---

## Lampiran (Appendices)

### A. Struktur File Frontend (Frontend File Structure)

Rujuk Seksyen 4 untuk struktur direktori lengkap.

### B. Contoh Komponen Bootstrap (Bootstrap Component Examples)

Rujuk Seksyen 8 untuk contoh kod komponen Bootstrap yang digunakan.

### C. Konfigurasi Vite & Laravel Mix

```javascript
// vite.config.js
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
```

### D. Panduan Penggunaan Blade Components

Rujuk Seksyen 8 untuk contoh penggunaan Blade components dan directives.

### E. Browser Compatibility Matrix

- **Chrome**: Latest 2 versions
- **Firefox**: Latest 2 versions
- **Safari**: Latest 2 versions
- **Edge**: Latest 2 versions
- **Mobile Browsers**: iOS Safari, Chrome Android (latest versions)

---

**Dokumen ini mematuhi piawaian ISO 9241-210:2019 (Human-Centred Design), ISO 9241-110:2020 (Dialogue Principles), ISO 9241-11:2018 (Usability), dan WCAG 2.2 Level AA (2023).**
