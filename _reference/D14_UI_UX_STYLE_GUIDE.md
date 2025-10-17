# Panduan Gaya UI/UX (UI/UX Style Guide)

**Sistem Helpdesk & ICT Asset Loan BPM MOTAC**  
**Versi:** 2.0.0 (SemVer)  
**Tarikh Kemaskini:** 17 Oktober 2025  
**Status:** Aktif  
**Klasifikasi:** Terhad - Dalaman MOTAC  
**Penulis:** Pasukan Pembangunan BPM MOTAC  
**Standard Rujukan:** ISO 9001, ISO 9241-210, ISO 9241-110, ISO 9241-11, WCAG 2.2 Level AA

---

## Maklumat Dokumen (Document Information)

| Atribut                | Nilai                                    |
|------------------------|------------------------------------------|
| **Versi**              | 2.0.0                                    |
| **Tarikh Kemaskini**   | 17 Oktober 2025                          |
| **Status**             | Aktif                                    |
| **Klasifikasi**        | Terhad - Dalaman MOTAC                   |
| **Pematuhi**           | ISO 9001, ISO 9241-210, 9241-110, 9241-11, WCAG 2.2 Level AA |
| **Bahasa**             | Bahasa Melayu (utama), English (teknikal)|

---

## Sejarah Perubahan (Changelog)

| Versi  | Tarikh          | Perubahan                                      | Penulis       |
|--------|-----------------|------------------------------------------------|---------------|
| 1.0.0  | September 2025  | Versi awal panduan gaya UI/UX                  | Pasukan BPM   |
| 2.0.0  | 17 Oktober 2025 | Penyeragaman mengikut D00-D14, SemVer, cross-reference | Pasukan BPM   |

---

## Rujukan Dokumen Berkaitan (Related Document References)

- **[D00_SYSTEM_OVERVIEW.md]** - Ringkasan Sistem
- **[D12_UI_UX_DESIGN_GUIDE.md]** - Panduan Rekabentuk UI/UX (prinsip rekabentuk)
- **[D13_UI_UX_FRONTEND_FRAMEWORK.md]** - Framework Frontend UI/UX (implementasi teknikal)
- **[GLOSSARY.md]** - Glosari Istilah Sistem

---

## 1. TUJUAN DOKUMEN (Purpose)

Dokumen ini menggariskan panduan gaya visual (visual style guide) dan interaksi untuk antaramuka pengguna (UI - User Interface) dan pengalaman pengguna (UX - User Experience) sistem Helpdesk & ICT Asset Loan BPM MOTAC. Ia memastikan konsistensi, ketercapaian (accessibility), dan kualiti mengikut piawaian **ISO 9001** (quality management), **ISO 9241-210** (human-centred design), **ISO 9241-110** (dialogue principles), **ISO 9241-11** (usability), dan **WCAG 2.2 Level AA** (accessibility).

---

## 2. PRINSIP REKABENTUK (Design Principles)

- **Human-Centred Design (ISO 9241-210)**: Fokus pada keperluan, matlamat, dan batasan pengguna sebenar.  
- **Dialogue Principles (ISO 9241-110)**: Kebolehfahaman, kawalan pengguna, konsistensi, maklum balas.
- **Usability (ISO 9241-11)**: Keberkesanan, kecekapan, kepuasan pengguna.
- **Quality Management (ISO 9001)**: Semua elemen direka untuk kawalan dan penambahbaikan kualiti berterusan.
- **Accessibility (WCAG 2.2 Level AA)**: Semua pengguna, termasuk OKU, boleh mengakses sistem dengan mudah.

---

## 3. PALET WARNA (Colour Palette)

- **Warna Utama MOTAC**:  
  - Biru MOTAC: #003366  
  - Kuning MOTAC: #FFD700  
  - Putih: #FFFFFF  
  - Kelabu lembut: #F7F7F7  
  - Merah amaran: #E74C3C  
  - Hijau status: #27AE60  
  - Kuning status: #F1C40F  
- **Kontras warna minimum**: 4.5:1 untuk teks utama dan latar.

---

## 4. TIPOGRAFI (Typography)

- **Font utama**: Open Sans, Roboto, atau Arial (sans-serif).
- **Saiz teks minimum**: 16px untuk teks biasa, 20px+ untuk tajuk utama.
- **Berat font**: Gunakan bold untuk tajuk, regular untuk isi kandungan.
- **Spacing**: Line-height 1.5 untuk keterbacaan optimum.

---

## 5. KOMPONEN UI UTAMA (Key UI Components)

### 5.1. Navbar & Header

- **Sticky navbar** di atas dengan logo MOTAC/BPM, navigasi utama, dan ikon carian.
- **Warna latar**: Biru MOTAC (#003366), teks putih.

### 5.2. Sidebar (Admin/BPM)

- **Sidebar collapsible** dengan ikon dan label jelas.
- **Warna latar**: Kelabu lembut, highlight biru bila aktif.

### 5.3. Footer

- **Footer tetap di bawah** dengan logo BPM, hakcipta dinamik (© tahun semasa), dan ikon sosial media dengan alt text.

### 5.4. Buttons

- **Primary Button**: Biru MOTAC, teks putih.
- **Secondary Button**: Putih, border biru, teks biru.
- **Danger Button**: Merah amaran, teks putih.
- **Button state**: Disabled, hover, focus dengan outline jelas.

### 5.5. Forms

- **Label jelas** di atas setiap field.
- **Field wajib** bertanda * dan warna khas (merah).
- **Input, select, textarea**: Border kelabu, padding cukup, responsif.
- **Error message**: Warna merah, dekat dengan input, dengan ikon amaran.
- **Validasi masa nyata**: Tunjuk status input selepas blur/submit.

### 5.6. Tables

- **Tabel responsif** dengan header bold, zebra striping untuk baris.
- **Pagination**: Gunakan Bootstrap, letak di bawah tabel.

### 5.7. Cards & Badges

- **Card**: Panel putih dengan shadow lembut, padding selesa.
- **Badges**: Warna hijau untuk 'Open', kuning untuk 'In Progress', merah untuk 'Closed', biru untuk 'Loaned'.

---

## 6. LAYOUT & SPACING

- **Grid system**: Bootstrap 12-column grid.
- **Margin antara komponen**: Min 24px.
- **Padding dalam card/form**: Min 16px.

---

## 7. IKON & GRAFIK

- **FontAwesome / Material Icons** untuk ikon fungsi (edit, delete, info).
- **Alt text** wajib untuk semua imej dan ikon.
- **Grafik header/footer**: Logo rasmi MOTAC/BPM, bukan logo generik.

---

## 8. INTERAKSI & MAKLUM BALAS (Interaction & Feedback)

- **Hover/focus state**: Semua elemen interaktif ada perubahan visual.
- **Loading spinner**: Untuk proses AJAX/data fetch.
- **Notifikasi toast**: Untuk mesej berjaya/gagal.
- **Form buttons** hanya aktif selepas perakuan (declaration) ditanda.

---

## 9. AKSESIBILITI (Accessibility)

- **Kontras tinggi** antara teks dan latar.
- **Navigasi papan kekunci** penuh (tab order logik).
- **Teks alternatif** semua ikon/gambar.
- **Label borang** jelas dan dikaitkan dengan input.
- **Saiz teks boleh diperbesar** tanpa pecah layout.
- **Error handling**: Mesej mudah difahami, tidak hanya warna.

---

## 10. RESPONSIF (Responsive Design)

- **Ujian pada 320px (mobile), 768px (tablet), 1024px (desktop)**.
- **Content stack** pada mobile, sidebar collapse, navbar jadi hamburger.
- **Tabel & form** tukar jadi scrollable di mobile.

---

## 11. BRANDING & KONSISTENSI

- **Logo MOTAC/BPM** wajib di header/footer.
- **Warna, font, ikon** konsisten di semua modul.
- **Dokumentasikan komponen** di satu tempat (misal: Style Guide di Notion/Figma).

---

## 12. CONTOH KOD (Code Examples)

### 12.1. Button

```blade
<button class="btn btn-primary">Hantar</button>
<button class="btn btn-danger">Padam</button>
<button class="btn btn-outline-primary">Kembali</button>
```

### 12.2. Badge

```blade
<span class="badge bg-success">Open</span>
<span class="badge bg-warning text-dark">In Progress</span>
<span class="badge bg-danger">Closed</span>
<span class="badge bg-primary">Loaned</span>
```

### 12.3. Input with Error

```blade
<div class="mb-3">
    <label for="email" class="form-label">E-Mel *</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror"
           name="email" id="email" required value="{{ old('email') }}">
    @error('email')
        <span class="invalid-feedback">{{ $message }}</span>
    @enderror
</div>
```

---

## 13. PENUTUP

Panduan gaya ini wajib dipatuhi oleh semua pembangun frontend sistem Helpdesk & ICT Asset Loan BPM MOTAC. Ia memastikan aplikasi konsisten, mudah digunakan, boleh diakses, dan berkualiti tinggi mengikut piawaian antarabangsa **ISO 9001** (quality management), **ISO 9241-210** (human-centred design), **ISO 9241-110** (dialogue principles), **ISO 9241-11** (usability), **WCAG 2.2 Level AA** (accessibility), dan branding MOTAC.

---

## Glosari & Rujukan (Glossary & References)

Sila rujuk **[GLOSSARY.md]** untuk istilah teknikal seperti:

- **Style Guide**: Panduan gaya visual dan interaksi sistem
- **Colour Palette**: Koleksi warna standar untuk antaramuka
- **Typography**: Gaya dan penggunaan huruf dalam sistem
- **Accessibility**: Kebolehan sistem digunakan oleh semua pengguna
- **WCAG (Web Content Accessibility Guidelines)**: Garis panduan aksesibiliti kandungan web
- **ISO 9241**: Piawaian ergonomi interaksi manusia-sistem

**Dokumen Rujukan:**

- **D00_SYSTEM_OVERVIEW.md** - Gambaran keseluruhan sistem
- **D12_UI_UX_DESIGN_GUIDE.md** - Panduan rekabentuk UI/UX (prinsip dan garis panduan)
- **D13_UI_UX_FRONTEND_FRAMEWORK.md** - Framework frontend (implementasi teknikal)

---

## Lampiran (Appendices)

### A. Palet Warna Lengkap (Complete Colour Palette)

Rujuk Seksyen 3 untuk spesifikasi lengkap warna sistem.

### B. Panduan Tipografi (Typography Guide)

Rujuk Seksyen 4 untuk spesifikasi font dan penggunaan tipografi.

### C. Komponen UI Standar (Standard UI Components)

Rujuk Seksyen 5 untuk panduan penggunaan komponen UI standar.

### D. Contoh Kod HTML/CSS (HTML/CSS Code Examples)

Rujuk Seksyen 12 untuk contoh implementasi komponen.

### E. WCAG 2.2 Level AA Checklist

- **Perceivable**: Maklumat dan komponen UI mesti boleh dilihat
- **Operable**: Komponen UI mesti boleh dikendalikan
- **Understandable**: Maklumat dan operasi UI mesti difahami
- **Robust**: Kandungan mesti mantap untuk pelbagai teknologi bantuan

### F. Responsif Grid System

- **Container**: Max-width responsive container
- **Row**: Horizontal grup kolum
- **Columns**: 12-column grid system
- **Breakpoints**: xs (<576px), sm (≥576px), md (≥768px), lg (≥992px), xl (≥1200px), xxl (≥1400px)

---

**Dokumen ini mematuhi piawaian ISO 9001:2015 (Quality Management Systems), ISO 9241-210:2019 (Human-Centred Design), ISO 9241-110:2020 (Dialogue Principles), ISO 9241-11:2018 (Usability), dan WCAG 2.2 Level AA (2023).**
