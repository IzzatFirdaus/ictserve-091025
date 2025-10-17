# Ringkasan Sistem (System Overview)

**Sistem Helpdesk & ICT Asset Loan MOTAC BPM**  
**Versi:** 2.0.0 (SemVer)  
**Tarikh Kemaskini:** 17 Oktober 2025  
**Status:** Aktif  
**Klasifikasi:** Terhad - Dalaman MOTAC  
**Penulis:** Pasukan Pembangunan BPM MOTAC  
**Standard Rujukan:** ISO/IEC/IEEE 15288, ISO/IEC/IEEE 12207

---

## Maklumat Dokumen (Document Information)

| Atribut                | Nilai                                    |
|------------------------|------------------------------------------|
| **Versi**              | 2.0.0                                    |
| **Tarikh Kemaskini**   | 17 Oktober 2025                          |
| **Status**             | Aktif                                    |
| **Klasifikasi**        | Terhad - Dalaman MOTAC                   |
| **Pematuhi**           | ISO/IEC/IEEE 15288, ISO/IEC/IEEE 12207   |
| **Bahasa**             | Bahasa Melayu (utama), English (teknikal)|

---

## Sejarah Perubahan (Changelog)

| Versi  | Tarikh          | Perubahan                                      | Penulis       |
|--------|-----------------|------------------------------------------------|---------------|
| 1.0.0  | September 2025  | Versi awal dokumentasi sistem                  | Pasukan BPM   |
| 2.0.0  | 17 Oktober 2025 | Penyeragaman mengikut D00-D14, SemVer, cross-reference | Pasukan BPM   |

---

## Rujukan Dokumen Berkaitan (Related Document References)

- **[D01_SYSTEM_DEVELOPMENT_PLAN.md]** - Pelan Pembangunan Sistem (SDP)
- **[D02_BUSINESS_REQUIREMENTS_SPECIFICATION.md]** - Spesifikasi Keperluan Perniagaan (BRS)
- **[D03_SOFTWARE_REQUIREMENTS_SPECIFICATION.md]** - Spesifikasi Keperluan Perisian (SRS)
- **[D04_SOFTWARE_DESIGN_DOCUMENT.md]** - Dokumen Rekabentuk Perisian (SDD)
- **[D09_DATABASE_DOCUMENTATION.md]** - Dokumentasi Pangkalan Data
- **[D11_TECHNICAL_DESIGN_DOCUMENTATION.md]** - Dokumentasi Rekabentuk Teknikal
- **[GLOSSARY.md]** - Glosari Istilah Sistem

---

## Ringkasan Eksekutif (Executive Summary)

Sistem ini adalah platform web berpusat berasaskan **Laravel** yang dibangunkan untuk **digitalkan dua proses kritikal dalaman** BPM MOTAC:

1. **Helpdesk Ticketing** – Pengurusan aduan, permintaan, dan masalah ICT oleh staf MOTAC.
2. **ICT Asset Loan** – Pengurusan peminjaman & pemulangan peralatan ICT seperti laptop, projektor, tablet, dsb.

Akses adalah **terhad kepada staf MOTAC sahaja** melalui login dalaman (intranet), memastikan keselamatan dan kerahsiaan.

---

## 1. Modul Helpdesk ICT (Helpdesk Ticketing Module)

Modul ini menggantikan kaedah lama (telefon, e-mel, walk-in) dengan sistem **ticketing** yang tersusun dan berasaskan digital.

**Rujukan:** Lihat **[D02_BUSINESS_REQUIREMENTS_SPECIFICATION.md]** Seksyen 6.1 dan **[D03_SOFTWARE_REQUIREMENTS_SPECIFICATION.md]** Seksyen 5.1 untuk spesifikasi lengkap.

### 1.1. Fungsi Utama Helpdesk

- **Penghantaran Tiket Aduan (Ticket Submission)**  
  Staf boleh membuat aduan masalah ICT seperti "PC rosak", "Printer tak boleh guna", "Internet perlahan", dsb melalui borang digital.

- **Penomboran Tiket Automatik (Auto Ticket Numbering)**  
  Setiap tiket mendapat nombor rujukan automatik untuk tracking dan audit trail.

- **Kategori & Prioriti Aduan (Category & Priority Classification)**  
  Aduan dikategorikan (Hardware, Software, Network, dll) dan diberi tahap keutamaan (Low, Medium, High, Critical) mengikut SLA (Service Level Agreement).

- **Penugasan Tiket (Ticket Assignment)**  
  Pegawai BPM boleh agihkan tiket kepada technician/staf BPM yang sesuai berdasarkan expertise dan workload.

- **Log Komunikasi & Status (Communication Log & Status Tracking)**  
  Semua komunikasi, update, dan penyelesaian direkod dalam tiket. Status tiket sentiasa dikemaskini (Open, In Progress, Awaiting User, Resolved, Closed).

- **Integrasi Knowledge Base**  
  Tiket yang selesai boleh dijadikan rujukan atau artikel penyelesaian masalah untuk staf (untuk implementasi fasa akan datang).

- **Laporan & Analitik (Reporting & Analytics)**  
  BPM boleh jana laporan seperti jenis masalah lazim, prestasi technician, masa penyelesaian, dan statistik volume tiket.

### 1.2. Manfaat untuk BPM

- **Efisien & Telus (Efficiency & Transparency)**  
  Tiada lagi tracking manual atau lost email – semua tersusun dan terjejak dengan audit trail lengkap.

- **Akauntabiliti (Accountability)**  
  Siapa buat apa, bila, dan bagaimana – semuanya jelas dan boleh diaudit.

- **Keputusan Berdasarkan Data (Data-Driven Decisions)**  
  Laporan membantu perancangan strategik dan penambahbaikan perkhidmatan ICT.

---

## 2. Modul Peminjaman Aset ICT (ICT Asset Loan Module)

Modul ini mengurus secara digital proses peminjaman & pemulangan peralatan ICT untuk staf MOTAC.

**Rujukan:** Lihat **[D02_BUSINESS_REQUIREMENTS_SPECIFICATION.md]** Seksyen 6.2 dan **[D03_SOFTWARE_REQUIREMENTS_SPECIFICATION.md]** Seksyen 5.2 untuk spesifikasi lengkap.

### 2.1. Fungsi Utama Asset Loan

- **Katalog Aset ICT (ICT Asset Catalog)**  
  Database pusat semua aset ICT (tag ID, jenama, model, spesifikasi, status, accessories, lokasi penyimpanan).

- **Permohonan Pinjaman Digital (Online Loan Application)**  
  Staf boleh mohon pinjaman melalui borang digital, pilih tarikh pinjaman & pulangan, nyatakan tujuan penggunaan.

- **Workflow Kelulusan (Approval Workflow)**  
  Permohonan dihantar untuk kelulusan Ketua Bahagian (minimum Gred 41) dan BPM mengikut polisi dalaman MOTAC.

- **Check-Out & Check-In (Asset Distribution & Return)**  
  Aset ditandakan "Loaned" bila diambil, dan "Available" bila dipulangkan. BPM rekod peminjam, pegawai pengeluar, tarikh, dan status aset secara lengkap.

- **Kalendar Tempahan (Booking Calendar)**  
  Paparan visual bila aset available/telah ditempah, elakkan double-booking dan konflik jadual.

- **Reminder & Notifikasi (Automated Reminders & Notifications)**  
  E-mel automatik untuk due date, asset overdue, dan status kelulusan.

- **Laporan Kerosakan/Kehilangan (Damage/Loss Reporting)**  
  Proses formal untuk lapor kerosakan atau kehilangan semasa tempoh pinjaman dengan audit trail lengkap.

### 2.2. Manfaat untuk BPM

- **Visibiliti Aset Penuh (Full Asset Visibility)**  
  Sentiasa tahu aset mana, di mana, dan siapa peminjam dengan real-time tracking.

- **Penguatkuasaan Polisi (Policy Enforcement)**  
  Sistem enforce tempoh pinjaman dan syarat penggunaan secara automatik.

- **Kurang Risiko Kehilangan (Reduced Loss Risk)**  
  Audit trail lengkap dan proses rasmi mengurangkan risiko kehilangan/kecurian aset.

---

## 3. Integrasi Kedua Modul (Module Integration)

Sistem direka bentuk untuk integrasi seamless antara Helpdesk dan Asset Loan untuk meningkatkan efficiency operasi BPM.

**Rujukan:** Lihat **[D07_SYSTEM_INTEGRATION_PLAN.md]** dan **[D08_SYSTEM_INTEGRATION_SPECIFICATION.md]** untuk butiran integrasi.

### 3.1. Integrasi Antara Helpdesk & Asset Loan

- **Linking Tiket dengan Aset (Ticket-Asset Linking)**  
  Tiket helpdesk untuk "Laptop rosak" boleh di-link terus ke aset dalam modul loan untuk rujukan history lengkap.

- **Sejarah Aset & Spesifikasi (Asset History & Specifications)**  
  Aduan berkaitan aset pinjaman – technician boleh lihat history pinjaman, spesifikasi aset, dan rekod penyelenggaraan terdahulu.

- **Automasi Tiket Maintenance (Automated Maintenance Ticketing)**  
  Jika aset dipulangkan dengan kerosakan, sistem automatik cipta tiket maintenance untuk tindakan segera.

- **Data Konsistensi (Data Consistency)**  
  Satu sumber data (Single Source of Truth) untuk aset, user, dan status memastikan integriti data.

---

## 4. Aspek Teknikal (Technical Aspects)

Sistem dibangunkan menggunakan Laravel 12 dengan best practices dan pematuhan standard antarabangsa.

**Rujukan:** Lihat **[D04_SOFTWARE_DESIGN_DOCUMENT.md]**, **[D10_SOURCE_CODE_DOCUMENTATION.md]**, dan **[D11_TECHNICAL_DESIGN_DOCUMENTATION.md]** untuk butiran teknikal lengkap.

### 4.1. Senibina Sistem (System Architecture)

- **MVC Architecture (Model-View-Controller)**  
  Struktur jelas antara route, controller, model, dan view mengikut Laravel best practices.

- **Eloquent ORM (Object-Relational Mapping)**  
  Mudah urus database (assets, tickets, users, loans, approvals, dsb) dengan relationship yang jelas.

- **Authentication & Authorization**  
  Login staf melalui Laravel Breeze, role-based access control (RBAC) menggunakan policies dan middleware.

- **Blade Templating Engine**  
  UI konsisten dan professional menggunakan Blade dengan StartBootstrap SB Admin template.

- **Queue Jobs & Background Processing**  
  Tugas latar belakang seperti email notifikasi, report generation berjalan lancar tanpa block user request.

- **Security (Keselamatan)**  
  Perlindungan terhadap SQL injection, XSS, CSRF, dan implementasi audit trail lengkap untuk compliance.

### 4.2. Database Design

**Rujukan:** Lihat **[D09_DATABASE_DOCUMENTATION.md]** untuk ERD, table definitions, dan data quality standards.

- **Relational Database (MySQL)**  
  Jadual utama: users, divisions, tickets, assets, loans, approvals, notifications, audit_logs.

- **Data Quality (ISO 8000)**  
  Field validation, foreign key constraints, data integrity checks.

---

## 5. Peranan BPM sebagai Pemilik Sistem (BPM as System Owner)

### 5.1. Tanggungjawab BPM

- **Admin Sistem (System Administrator)**  
  Urus pengguna, peranan, konfigurasi sistem, dan maintenance.

- **Pemilik Data (Data Owner)**  
  Data aset, log aduan, laporan inventori, dan audit trail.

- **Pembuat Polisi (Policy Maker)**  
  Tentukan SLA, workflow kelulusan, tempoh pinjaman, dan syarat penggunaan aset.

- **Penyelia Sokongan (Support Supervisor)**  
  Pantau prestasi pegawai ICT, KPI, dan kepuasan pengguna melalui dashboard dan laporan.

---

## 6. Pengguna Sistem

| Peranan               | Fungsi Utama                                      |
|-----------------------|---------------------------------------------------|
| Staf MOTAC            | Hantar tiket, mohon pinjaman asset                |
| Technician BPM        | Urus & selesaikan tiket aduan                     |
| Pegawai BPM           | Lulus/urus permohonan pinjaman, pantau asset      |
| Ketua Bahagian        | Kelulusan permohonan staf bawahan                 |
| Admin BPM             | Konfigurasi sistem, manage users, laporan         |

---

## 7. Modul Utama

| Modul          | Fungsi                                            |
|----------------|--------------------------------------------------|
| Dashboard      | Ringkasan tiket, asset, KPI                      |
| Ticketing      | Aduan/permintaan ICT, tracking status            |
| Asset Loan     | Permohonan, kelulusan, rekod pinjaman            |
| Inventory      | Daftar, update, history asset                    |
| Reports        | Laporan, eksport data untuk audit/management     |
| Admin          | Urus pengguna, peranan, kategori, SLA            |

---

## 8. Konteks MOTAC

- **Pemilik:** Bahagian Pengurusan Maklumat (BPM)
- **Skop:** Staf MOTAC sahaja (dalaman)
- **Tujuan:** Tingkatkan kualiti sokongan ICT, telus pengurusan asset, dan mudahkan operasi dalaman.

---

Sistem ini menukar BPM daripada unit reaktif kepada **pasukan pengurusan servis ICT yang proaktif, telus, dan efisien** – menjimatkan masa, mengurangkan kos, serta meningkatkan mutu sokongan untuk seluruh staf MOTAC.

## 9. UI/UX & Aksesibiliti (User Interface & Accessibility)

Sistem mematuhi piawaian aksesibiliti dan rekabentuk mesra pengguna untuk memastikan pengalaman optimum.

**Rujukan:** Lihat **[D12_UI_UX_DESIGN_GUIDE.md]**, **[D13_UI_UX_FRONTEND_FRAMEWORK.md]**, dan **[D14_UI_UX_STYLE_GUIDE.md]** untuk panduan lengkap.

### 9.1. Piawaian UI/UX

- **ISO 9241-210**: Human-centred design
- **ISO 9241-110**: Dialogue principles
- **ISO 9241-11**: Usability
- **WCAG 2.2 Level AA**: Web accessibility guidelines

### 9.2. Ciri-ciri Utama

- **Responsive Design**: Berfungsi pada desktop, tablet, dan mobile
- **Kontras Warna Tinggi**: Minimum 4.5:1 untuk keterbacaan
- **Navigasi Papan Kekunci**: Sokongan penuh untuk accessibility
- **Bahasa Melayu**: Antaramuka utama dalam Bahasa Melayu dengan istilah teknikal dalam English

---

## 10. Migrasi Data & Integrasi (Data Migration & Integration)

Sistem menyokong migrasi data dari sistem legacy dan integrasi dengan sistem sedia ada MOTAC.

**Rujukan:** Lihat **[D05_DATA_MIGRATION_PLAN.md]**, **[D06_DATA_MIGRATION_SPECIFICATION.md]**, **[D07_SYSTEM_INTEGRATION_PLAN.md]**, dan **[D08_SYSTEM_INTEGRATION_SPECIFICATION.md]**.

### 10.1. Integrasi Luaran (External Integration)

- **LDAP/SSO MOTAC**: Single Sign-On untuk authentication
- **Email Server**: SMTP untuk notifikasi
- **Database Staf**: Sinkronisasi data staf dan bahagian
- **Sistem Aset Legacy**: Import data inventori sedia ada

---

## 11. Pematuhan Piawaian (Standards Compliance)

Sistem dibangunkan dengan pematuhan penuh kepada piawaian antarabangsa:

- **ISO/IEC/IEEE 12207**: Software lifecycle processes
- **ISO/IEC/IEEE 15288**: System lifecycle processes
- **ISO/IEC/IEEE 29148**: Requirements engineering
- **IEEE 1016**: Software design descriptions
- **ISO 8000**: Data quality
- **ISO 9001**: Quality management
- **ISO/IEC 27701**: Privacy information management
- **WCAG 2.2 Level AA**: Web accessibility

**Rujukan:** Setiap standard dirujuk dalam dokumen berkaitan D00-D14.

---

## 12. Glosari & Rujukan (Glossary & References)

Untuk memahami istilah teknikal dan domain perniagaan yang digunakan dalam sistem:

**Rujukan:** Lihat **[GLOSSARY.md]** untuk definisi lengkap semua istilah, akronim, dan konsep.

### 12.1. Istilah Utama

- **Helpdesk Ticketing**: Sistem pengurusan aduan ICT
- **Asset Loan**: Peminjaman peralatan ICT
- **SLA**: Service Level Agreement
- **CRUD**: Create, Read, Update, Delete
- **MVC**: Model-View-Controller
- **RBAC**: Role-Based Access Control
- **Audit Trail**: Rekod kronologi aktiviti sistem

---

## Kesimpulan (Conclusion)

Sistem **Helpdesk & ICT Asset Loan MOTAC BPM** adalah **penyelesaian bersepadu (one-stop solution)** untuk pengurusan ICT yang menyeluruh. Ia menggabungkan:

- ✅ **Helpdesk Ticketing** untuk pengurusan aduan ICT
- ✅ **Asset Loan Management** untuk peminjaman peralatan
- ✅ **Integrasi seamless** antara kedua-dua modul
- ✅ **Audit trail lengkap** untuk compliance dan accountability
- ✅ **UI/UX mesra pengguna** dengan aksesibiliti tinggi
- ✅ **Pematuhan standard antarabangsa** (ISO/IEC/IEEE)

Sistem ini bukan sahaja meningkatkan **efisiensi operasi harian**, tetapi juga menyokong **data-driven decision making** dan **compliance audit** untuk jangka panjang. Ia adalah platform **scalable, secure, dan user-friendly** yang dibangunkan khusus untuk keperluan BPM MOTAC.

---

**Dokumen ini disediakan mengikut piawaian ISO/IEC/IEEE 15288 dan ISO/IEC/IEEE 12207 dan akan dikemaskini mengikut keperluan projek.**

---
