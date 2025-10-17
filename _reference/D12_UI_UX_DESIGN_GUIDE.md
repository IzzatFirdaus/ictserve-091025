# Panduan Rekabentuk UI/UX (UI/UX Design Guide)

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
| 1.0.0  | September 2025  | Versi awal panduan rekabentuk UI/UX            | Pasukan BPM   |
| 2.0.0  | 17 Oktober 2025 | Penyeragaman mengikut D00-D14, SemVer, cross-reference | Pasukan BPM   |

---

## Rujukan Dokumen Berkaitan (Related Document References)

- **[D00_SYSTEM_OVERVIEW.md]** - Ringkasan Sistem
- **[D13_UI_UX_FRONTEND_FRAMEWORK.md]** - Framework Frontend UI/UX (implementasi teknikal)
- **[D14_UI_UX_STYLE_GUIDE.md]** - Panduan Gaya UI/UX (visual style)
- **[GLOSSARY.md]** - Glosari Istilah Sistem

---

## 1. TUJUAN DOKUMEN (Purpose)

Dokumen ini memberi panduan lengkap untuk rekabentuk antaramuka pengguna (UI - User Interface) dan pengalaman pengguna (UX - User Experience) bagi sistem **Helpdesk & ICT Asset Loan BPM MOTAC**, berpandukan piawaian **ISO 9241-210** (human-centred design), **ISO 9241-110** (dialogue principles), **ISO 9241-11** (usability), dan **WCAG 2.2 Level AA** (Web Content Accessibility Guidelines) untuk aksesibiliti.

---

## 2. PRINSIP REKABENTUK UI/UX (Design Principles)

### 2.1. ISO 9241-210: Human-centred design

- **Fokus kepada pengguna**: Rekabentuk sentiasa mengambil kira keperluan, matlamat, dan batasan pengguna sebenar (staf MOTAC, BPM, admin).
- **Penglibatan pengguna**: Ujian bersama pengguna sebenar (UAT), feedback berkala.
- **Iterasi**: Penambahbaikan berterusan berdasarkan maklum balas dan data penggunaan.

### 2.2. ISO 9241-110: Dialogue Principles

- **Kebolehfahaman (Suitability for the task)**: Setiap fungsi, menu, dan borang jelas dan mudah diakses.
- **Kebolehcapaian (Self-descriptiveness)**: Label, arahan, dan status sistem sentiasa jelas.
- **Kawalan pengguna (User control)**: Pengguna boleh membatalkan, menyemak, dan mengesahkan tindakan.
- **Konsisten**: Layout, ikon, dan warna digunakan secara konsisten di semua modul.
- **Maklum balas (Feedback)**: Sistem memberi maklum balas visual/teks selepas setiap tindakan (e.g. pop-up “Berjaya” selepas submit).

### 2.3. ISO 9241-11: Usability

- **Keberkesanan (Effectiveness)**: Pengguna boleh mencapai matlamat mereka dengan mudah (e.g. hantar aduan, mohon pinjaman).
- **Kecekapan (Efficiency)**: Proses adalah pantas, tanpa langkah yang tidak perlu.
- **Kepuasan pengguna (Satisfaction)**: Pengguna selesa dan yakin menggunakan sistem.

---

## 3. AKSESIBILITI (Accessibility) — WCAG 2.2 Level AA

- **Kontras warna**: Semua teks mesti mempunyai kontras minimum 4.5:1 dengan latar belakang.
- **Navigasi papan kekunci**: Semua fungsi boleh diakses tanpa tetikus (tab order logik, button focus jelas).
- **Teks alternatif (Alt Text)**: Semua imej mesti ada teks alternatif yang bermakna.
- **Label borang**: Setiap input mesti ada label jelas dan placeholder bermakna.
- **Error handling**: Mesej ralat jelas, mudah difahami, dan dikaitkan terus dengan input yang salah.
- **Saiz teks**: Teks minimum 16px, boleh diperbesar tanpa pecah layout.
- **Responsif**: Layout responsif untuk desktop, tablet, dan mobile.

---

## 4. ELEMEN REKABENTUK UTAMA (Key Design Elements)

### 4.1. Navigasi

- **Header bar**: Navigasi utama di atas, konsisten di semua halaman (Utama, Informasi, Muat Turun, Direktori, ServiceDesk ICT, dsb).
- **Breadcrumbs**: Papar lokasi semasa pengguna (contoh: Utama / ServiceDesk ICT).
- **Sidebar**: Untuk admin/BPM, akses pantas ke modul (Dashboard, Inventory, Reports, Users).

### 4.2. Bentuk & Borang (Forms)

- **Field wajib jelas dengan tanda * dan warna khas**.
- **Input validation**: Real-time validation, highlight error, paparkan mesej bantuan di bawah input.
- **Conditional fields**: Field seperti “No. Aset” hanya muncul jika kategori tertentu dipilih.
- **Button aksi**: “Hantar”, “Reset”, “Kembali” dengan warna berbeza dan ikon.

### 4.3. Visual Hierarchy

- **Tajuk dan section**: Gunakan saiz dan warna yang jelas.
- **Card/panel**: Untuk memisahkan maklumat penting (e.g. ringkasan tiket, status pinjaman).
- **Icon**: Guna ikon yang mudah difahami (Material Icons, FontAwesome).

### 4.4. Feedback & Status

- **Loading spinner** bila fetch data AJAX.
- **Pop-up/modal** untuk notifikasi berjaya/gagal.
- **Status badges**: Warna berlainan untuk status (Open, In Progress, Closed, Loaned, Returned).

### 4.5. Footer

- Papar logo BPM, hakcipta dinamik, ikon media sosial dengan alt text.

---

## 5. REKABENTUK RESPONSIF (Responsive Design)

- **Grid system**: Gunakan Bootstrap Grid atau CSS Flexbox.
- **Breakpoint**: Uji pada resolusi 320px, 768px, 1024px, 1366px.
- **Test pada pelbagai peranti**: Desktop, tablet, mobile.

---

## 6. KONSISTENSI DAN BRANDING

- **Warna korporat MOTAC**: Gunakan palet warna rasmi untuk header, button, dan highlight.
- **Font**: Sans-serif (contoh: Open Sans, Roboto); pastikan mudah dibaca.
- **Logo**: Sentiasa paparkan logo BPM/MOTAC di header/footer.

---

## 7. CONTOH KOMPONEN UTAMA (Sample Key Components)

### 7.1. Header Navigation

```html
<nav class="navbar navbar-expand-lg bg-primary">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ asset('img/motac-logo.png') }}" alt="MOTAC Logo" height="32">
    </a>
    <!-- Navigation links -->
</nav>
```

### 7.2. Form Input (Blade example)

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

### 7.3. Status Badge

```blade
<span class="badge bg-success">Open</span>
<span class="badge bg-warning text-dark">In Progress</span>
<span class="badge bg-danger">Closed</span>
```

### 7.4. Responsive Table

```blade
<div class="table-responsive">
    <table class="table table-striped">
        <!-- Table contents -->
    </table>
</div>
```

---

## 8. PROSES UJIAN & VALIDASI (Testing & Validation Process)

- **UAT (User Acceptance Test)**: Bersama staf MOTAC & BPM.
- **Accessibility audit**: Gunakan alat seperti WAVE, axe, Lighthouse.
- **Feedback loop**: Dengar maklum balas pengguna, kemas kini UI/UX.

---

## 9. PENUTUP

Panduan ini memastikan rekabentuk UI/UX sistem Helpdesk & ICT Asset Loan BPM MOTAC adalah mesra pengguna, konsisten, responsif, dan patuh piawaian antarabangsa **ISO 9241-210** (human-centred design), **ISO 9241-110** (dialogue principles), **ISO 9241-11** (usability), dan **WCAG 2.2 Level AA** (accessibility) serta keperluan dalaman MOTAC.

---

## Glosari & Rujukan (Glossary & References)

Sila rujuk **[GLOSSARY.md]** untuk istilah teknikal seperti:

- **UI (User Interface)**: Antaramuka pengguna visual sistem
- **UX (User Experience)**: Pengalaman keseluruhan pengguna berinteraksi dengan sistem
- **Aksesibiliti (Accessibility)**: Kebolehan sistem digunakan oleh semua pengguna termasuk OKU
- **WCAG (Web Content Accessibility Guidelines)**: Garis panduan aksesibiliti kandungan web
- **ISO 9241-210**: Piawaian rekabentuk berpusatkan manusia
- **ISO 9241-110**: Prinsip dialog ergonomi
- **ISO 9241-11**: Piawaian kebolehgunaan

**Dokumen Rujukan:**

- **D00_SYSTEM_OVERVIEW.md** - Gambaran keseluruhan sistem
- **D13_UI_UX_FRONTEND_FRAMEWORK.md** - Framework frontend dan implementasi teknikal
- **D14_UI_UX_STYLE_GUIDE.md** - Panduan gaya visual terperinci

---

## Lampiran (Appendices)

### A. WCAG 2.2 Level AA Compliance Checklist

Rujuk Seksyen 3 untuk keperluan pematuhan aksesibiliti lengkap.

### B. Komponen Rekabentuk Standar (Standard Design Components)

Rujuk Seksyen 7 untuk contoh komponen UI standar sistem.

### C. Wireframes & Mockups

Rujuk **D13_UI_UX_FRONTEND_FRAMEWORK.md** untuk wireframes dan mockups skrin utama.

### D. Panduan Pengujian Kebolehgunaan (Usability Testing Guide)

Rujuk Seksyen 8 untuk proses ujian dan validasi UI/UX.

### E. Responsif Breakpoints

- **Mobile**: < 768px (sm)
- **Tablet**: 768px - 991px (md)
- **Desktop**: ≥ 992px (lg)
- **Large Desktop**: ≥ 1200px (xl)

---

**Dokumen ini mematuhi piawaian ISO 9241-210:2019 (Human-Centred Design), ISO 9241-110:2020 (Dialogue Principles), ISO 9241-11:2018 (Usability), dan WCAG 2.2 Level AA (2023).**
