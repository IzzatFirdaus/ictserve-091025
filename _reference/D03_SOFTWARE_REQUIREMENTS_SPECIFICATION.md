# Spesifikasi Keperluan Perisian (Software Requirements Specification - SRS)

**Sistem Helpdesk & ICT Asset Loan MOTAC BPM**  
**Versi:** 2.0.0 (SemVer)  
**Tarikh Kemaskini:** 17 Oktober 2025  
**Status:** Aktif  
**Klasifikasi:** Terhad - Dalaman MOTAC  
**Penulis:** Pasukan Pembangunan BPM MOTAC  
**Standard Rujukan:** ISO/IEC/IEEE 29148

---

## Maklumat Dokumen (Document Information)

| Atribut                | Nilai                                    |
|------------------------|------------------------------------------|
| **Versi**              | 2.0.0                                    |
| **Tarikh Kemaskini**   | 17 Oktober 2025                          |
| **Status**             | Aktif                                    |
| **Klasifikasi**        | Terhad - Dalaman MOTAC                   |
| **Pematuhi**           | ISO/IEC/IEEE 29148                       |
| **Bahasa**             | Bahasa Melayu (utama), English (teknikal)|

---

## Sejarah Perubahan (Changelog)

| Versi  | Tarikh          | Perubahan                                      | Penulis       |
|--------|-----------------|------------------------------------------------|---------------|
| 1.0.0  | September 2025  | Versi awal spesifikasi keperluan perisian      | Pasukan BPM   |
| 2.0.0  | 17 Oktober 2025 | Penyeragaman mengikut D00-D14, SemVer, cross-reference, tambah rujukan dokumen | Pasukan BPM   |

---

## Rujukan Dokumen Berkaitan (Related Document References)

- **[D00_SYSTEM_OVERVIEW.md]** - Ringkasan Sistem
- **[D01_SYSTEM_DEVELOPMENT_PLAN.md]** - Pelan Pembangunan Sistem
- **[D02_BUSINESS_REQUIREMENTS_SPECIFICATION.md]** - Spesifikasi Keperluan Perniagaan (sumber BRS)
- **[D04_SOFTWARE_DESIGN_DOCUMENT.md]** - Dokumen Rekabentuk Perisian (implementasi SRS)
- **[D09_DATABASE_DOCUMENTATION.md]** - Dokumentasi Pangkalan Data
- **[D11_TECHNICAL_DESIGN_DOCUMENTATION.md]** - Dokumentasi Rekabentuk Teknikal
- **[GLOSSARY.md]** - Glosari Istilah Sistem

---

## 1. TUJUAN DOKUMEN (Purpose)

Dokumen ini mendefinisikan keperluan perisian (software requirements) bagi sistem **Helpdesk & ICT Asset Loan** berasaskan Laravel 12 untuk Bahagian Pengurusan Maklumat (BPM) MOTAC. Ia bertujuan memastikan sistem dibangunkan mengikut keperluan perniagaan, fungsional, dan bukan fungsional yang telah ditetapkan dalam **[D02_BUSINESS_REQUIREMENTS_SPECIFICATION.md]**, serta mematuhi piawaian **ISO/IEC/IEEE 29148** untuk requirements engineering.

---

## 2. SKOP SISTEM (System Scope)

- Platform web dalaman untuk pengurusan tiket aduan ICT dan peminjaman peralatan ICT.
- Modul utama:
  - Helpdesk Ticketing
  - ICT Asset Loan
  - Inventory
  - Authentication & Authorization
  - Dashboard & Reporting
  - Audit Trail
- Pengguna: Staf MOTAC, Pegawai BPM, Ketua Bahagian, Admin BPM.

---

## 3. DEFINISI, AKRONIM & SINGKATAN (Definitions, Acronyms & Abbreviations)

- **Helpdesk Ticketing**: Modul pengurusan aduan kerosakan ICT.
- **ICT Asset Loan**: Modul permohonan dan pengurusan peminjaman peralatan ICT.
- **BPM**: Bahagian Pengurusan Maklumat.
- **SLA**: Service Level Agreement (Tahap Perkhidmatan).
- **CRUD**: Create, Read, Update, Delete.
- **MVC**: Model-View-Controller.

---

## 4. PERSEKITARAN SISTEM (System Environment)

- **Bahasa**: Laravel 12 (PHP 8.2), MySQL, JavaScript, Bootstrap.
- **Akses**: Dalaman (Intranet) MOTAC sahaja.
- **Authentication**: Laravel Breeze (login, registration, password reset).
- **Database**: MySQL.
- **Operating System**: Linux (server), Windows (client).
- **Browser Support**: Chrome, Edge, Firefox (latest).

---

## 5. KEPERLUAN FUNGSI (Functional Requirements)

### 5.1. Modul Helpdesk Ticketing

- **Borang Aduan**: Pengguna boleh hantar aduan melalui borang digital.
- **Auto Ticket Number**: Sistem jana nombor tiket secara automatik.
- **Kategori & Prioriti**: Pengguna pilih kategori dan tahap keutamaan aduan.
- **Penugasan Tiket**: Admin BPM agihkan tiket kepada pegawai ICT.
- **Status Tiket**: Open, In Progress, Awaiting User, Resolved, Closed.
- **Log Komunikasi**: Semua update dan komunikasi direkodkan.
- **SLA Tracking**: Sistem rekod masa respon & penyelesaian mengikut SLA.
- **Laporan & Dashboard**: Statistik aduan, prestasi pegawai, analitik masalah.

### 5.2. Modul ICT Asset Loan

- **Borang Permohonan Pinjaman**: Pengguna mohon asset melalui borang digital.
- **Katalog Asset**: Senarai asset ICT dan status availability.
- **Workflow Kelulusan**: Permohonan disahkan Ketua Bahagian dan BPM.
- **Check-out/Check-in**: Rekod pengeluaran dan pemulangan asset.
- **Kalendar Tempahan**: Paparan availability asset secara visual.
- **Notifikasi**: Email reminder untuk pemulangan asset, overdue, dsb.
- **Laporan Pinjaman**: Statistik penggunaan, sejarah pinjaman, kerosakan/hilang.

### 5.3. Authentication & Authorization

- **Role-based Access**: Staf, Technician, BPM Admin, Ketua Bahagian.
- **Audit Trail**: Log semua transaksi perubahan data.
- **Password Reset**: Fungsi reset kata laluan.
- **Session Timeout**: Auto logout selepas tempoh inactivity.

### 5.4. Inventory Management

- **CRUD Asset**: Tambah, kemaskini, padam, dan lihat asset.
- **Asset Details**: Jenama, model, tag ID, accessories, status.

---

## 6. KEPERLUAN ANTARA MUKA (Interface Requirements)

- **Web-based UI**: Responsive & mesra pengguna (Bootstrap).
- **Blade Templating**: Semua paparan menggunakan Blade.
- **Dropdown Dinamik**: Pilihan division/unit, jenis kerosakan, jenis asset.
- **Validation & Error Display**: $request->validate(), @error dalam Blade.
- **Pagination**: List data dengan paginate() dan links().

---

## 7. KEPERLUAN DATA (Data Requirements)

- **Inventori Asset**: Semua butiran asset, status, sejarah pinjaman.
- **Tiket Aduan**: Maklumat aduan, komunikasi, status, kategori.
- **Pengguna**: Nama, jawatan, bahagian, login credential, peranan.
- **Audit Log**: Setiap perubahan penting direkod (owen-it/laravel-auditing).

---

## 8. KEPERLUAN BUKAN FUNGSI (Non-Functional Requirements)

- **Keselamatan**: CSRF protection, password hashing, role-based access.
- **Prestasi**: Respon <2s untuk operasi utama, optimize cache.
- **Kebolehskalaan**: Mudah tambah modul atau field baru.
- **Kebolehgunaan**: User interface mudah, manual dan tutorial disediakan.
- **Backup & Recovery**: Backup harian, restore plan.
- **Auditability**: Semua transaksi penting direkod untuk audit.
- **Integrasi**: Sedia untuk integrasi LDAP, email server, sistem lain jika perlu.
- **Pematuhan Polisi**: Selaras dengan dasar ICT MOTAC dan Akta Perlindungan Data Peribadi.

---

## 9. KEPERLUAN PERISIAN LUAR (External Software Requirements)

- **Browser**: Chrome, Edge, Firefox.
- **Mail Server**: SMTP untuk notifikasi email.
- **Queue System**: Database/Redis untuk job & notification queue.
- **Package**: owen-it/laravel-auditing untuk audit trail.

---

## 10. KEPERLUAN PENGURUSAN (Management Requirements)

- **Admin BPM**: Pengurusan pengguna, peranan, setting SLA, laporan.
- **Dokumentasi**: User manual, SOP, technical spec sentiasa dikemaskini.
- **Monitoring**: Log application, exception handling, storage/logs/laravel.log.
- **Testing**: UAT bersama BPM, regression test setiap major update.

---

## 11. KEPERLUAN UNDANG-UNDANG & DASAR (Legal & Policy Requirements)

- **Privasi Data**: Pematuhan kepada Akta Perlindungan Data Peribadi.
- **ICT Policy MOTAC**: Pengurusan asset dan aduan mengikut dasar dalaman.

---

## 12. KEPERLUAN KEBERJAYAAN (Success Criteria)

- >90% penggunaan oleh staf MOTAC selepas pelancaran.
- >95% aduan & pinjaman direkodkan melalui sistem dalam 6 bulan.
- Laporan audit menunjukkan penambahbaikan kecekapan dan telus urus ICT.

---

## 13. GLOSARI & RUJUKAN (Glossary & References)

Untuk memahami istilah teknikal yang digunakan dalam dokumen ini:

**Rujukan:** Lihat **[GLOSSARY.md]** untuk definisi lengkap semua istilah, akronim, dan konsep.

### 13.1. Istilah Utama Perisian

- **SRS**: Software Requirements Specification
- **CRUD**: Create, Read, Update, Delete
- **MVC**: Model-View-Controller
- **ORM**: Object-Relational Mapping (Eloquent)
- **RBAC**: Role-Based Access Control
- **SLA**: Service Level Agreement
- **UI**: User Interface
- **UX**: User Experience

### 13.2. Rujukan Piawaian

- **ISO/IEC/IEEE 29148**: Requirements engineering
- **ISO/IEC/IEEE 12207**: Software lifecycle processes
- **ISO 8000**: Data quality
- **WCAG 2.2 Level AA**: Web accessibility

---

## 14. LAMPIRAN (Appendices)

### 14.1. Borang Rujukan

- **Borang Aduan Kerosakan ICT** (PK.(S).MOTAC.07.(L1))
- **Borang Permohonan Pinjaman Peralatan ICT** (PK.(S).MOTAC.07.(L3))

### 14.2. Carta Alir & Diagram

- **Process Flow Diagram** - Helpdesk Ticketing  
  Rujuk: **versions/v2.1.0_Dokumentasi_Flow_Sistem_Helpdesk_ServiceDesk_ICTServe(iServe).md**

- **Process Flow Diagram** - Asset Loan  
  Rujuk: **versions/v2.1.0_Dokumentasi_Flow_Sistem_Permohonan_Pinjaman_Aset_ICT_ICTServe(iServe).md**

### 14.3. Dokumen Sokongan

- **Entity Relationship Diagram (ERD)**  
  Rujuk: **[D09_DATABASE_DOCUMENTATION.md]**

- **System Architecture Diagram**  
  Rujuk: **[D04_SOFTWARE_DESIGN_DOCUMENT.md]** dan **[D11_TECHNICAL_DESIGN_DOCUMENTATION.md]**

- **UI/UX Guidelines**  
  Rujuk: **[D12_UI_UX_DESIGN_GUIDE.md]**, **[D13_UI_UX_FRONTEND_FRAMEWORK.md]**, **[D14_UI_UX_STYLE_GUIDE.md]**

---

## 15. MATRIKS PEMETAAN KEPERLUAN (Requirements Traceability Matrix)

| ID Keperluan | Kategori | Deskripsi | Rujukan BRS | Rujukan Teknikal |
|--------------|----------|-----------|-------------|------------------|
| FR-001 | Helpdesk | Borang aduan digital | D02 BR-001 | D04 Seksyen 4.1 |
| FR-002 | Helpdesk | Auto ticket numbering | D02 BR-002 | D09 Jadual tickets |
| FR-003 | Helpdesk | Kategori & prioriti | D02 BR-001 | D04 Seksyen 4.1 |
| FR-004 | Asset Loan | Borang permohonan digital | D02 BR-003 | D04 Seksyen 4.2 |
| FR-005 | Asset Loan | Workflow kelulusan | D02 BR-004 | D09 Jadual approvals |
| FR-006 | Inventory | Katalog aset ICT | D02 BR-005 | D09 Jadual assets |
| FR-007 | Auth | Role-based access control | D02 BR-006 | D11 Seksyen 7 |
| FR-008 | Audit | Audit trail lengkap | D02 BR-007 | D09 Jadual audit_logs |
| NFR-001 | Performance | Response time <2s | D02 Seksyen 7 | D11 Seksyen 9 |
| NFR-002 | Security | Authentication & RBAC | D02 Seksyen 7 | D11 Seksyen 7 |
| NFR-003 | Usability | Responsive UI | D02 Seksyen 7 | D12-D14 |

**Nota:** Semua keperluan perisian boleh dijejak ke keperluan perniagaan (D02) dan implementasi teknikal (D04, D09, D11).

---

**Dokumen ini dirangka mengikut ISO/IEC/IEEE 29148 dan akan dikemaskini mengikut keperluan projek.**
