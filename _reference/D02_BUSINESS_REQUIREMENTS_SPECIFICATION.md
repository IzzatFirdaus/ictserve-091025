# Spesifikasi Keperluan Perniagaan (Business Requirements Specification - BRS)

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
| 1.0.0  | September 2025  | Versi awal spesifikasi keperluan perniagaan    | Pasukan BPM   |
| 2.0.0  | 17 Oktober 2025 | Penyeragaman mengikut D00-D14, SemVer, cross-reference, tambah rujukan dokumen | Pasukan BPM   |

---

## Rujukan Dokumen Berkaitan (Related Document References)

- **[D00_SYSTEM_OVERVIEW.md]** - Ringkasan Sistem
- **[D01_SYSTEM_DEVELOPMENT_PLAN.md]** - Pelan Pembangunan Sistem
- **[D03_SOFTWARE_REQUIREMENTS_SPECIFICATION.md]** - Spesifikasi Keperluan Perisian (derivasi teknikal dari BRS)
- **[D04_SOFTWARE_DESIGN_DOCUMENT.md]** - Dokumen Rekabentuk Perisian
- **[D09_DATABASE_DOCUMENTATION.md]** - Dokumentasi Pangkalan Data
- **[GLOSSARY.md]** - Glosari Istilah Sistem

---

## 1. TUJUAN DOKUMEN (Purpose)

Dokumen ini menggariskan keperluan perniagaan (business requirements) bagi pembangunan sistem web **Helpdesk & ICT Asset Loan** berasaskan Laravel 12 untuk kegunaan dalaman MOTAC, di bawah pengurusan Bahagian Pengurusan Maklumat (BPM). Spesifikasi ini disediakan mengikut piawaian **ISO/IEC/IEEE 29148** untuk requirements engineering dan systems.

---

## 2. LATAR BELAKANG (Background)

- BPM MOTAC memerlukan sistem berpusat untuk mengurus aduan kerosakan ICT (Helpdesk) dan permohonan pinjaman peralatan ICT.
- Sistem sedia ada (manual/emel/borang kertas) tidak efisien, sukar diaudit, dan berisiko kehilangan data.

---

## 3. SKOP PERNIAGAAN (Business Scope)

- Sistem hanya untuk staf MOTAC (internal user), bukan untuk orang awam.
- Dua modul utama: **Helpdesk Ticketing** dan **ICT Asset Loan**.
- Integrasi dengan database staf, inventori peralatan, dan workflow kelulusan dalaman.

---

## 4. TUJUAN SISTEM (Business Objectives)

- **Meningkatkan kecekapan** pengurusan aduan ICT dan pinjaman peralatan.
- **Memastikan akauntabiliti**: Setiap aduan/pinjaman direkod, diluluskan, dan diaudit.
- **Mengurangkan kehilangan/kerosakan aset** melalui log audit dan proses rasmi.
- **Memudahkan pelaporan** untuk penambahbaikan operasi BPM.

---

## 5. PIHAK BERKEPENTINGAN (Stakeholders)

| Pihak                | Peranan/Fungsi                              |
|----------------------|---------------------------------------------|
| BPM MOTAC (System Owner) | Pentadbir sistem, pengurusan aset & aduan |
| Staf MOTAC           | Pengguna sistem, hantar aduan & permohonan  |
| Pegawai ICT BPM      | Penyelesai aduan, pengurus inventori        |
| Ketua Bahagian       | Pelulus permohonan pinjaman                 |
| Auditor/Pengurusan   | Pemeriksa log, laporan, dan prestasi sistem |

---

## 6. FUNGSI UTAMA SISTEM (Business Requirements)

### 6.1. Helpdesk Ticketing Module

- **Aduan Kerosakan ICT**:
  - Borang aduan digital dengan field wajib: Nama, Bahagian, E-mel, No. Telefon, Jenis Kerosakan, Maklumat Kerosakan, No. Aset (conditional), Perakuan.
  - Pilihan jenis kerosakan mengikut kategori (Hardware, Software, Network, Lain-lain).
  - Nombor tiket auto-generated.
- **Pengurusan Tiket**:
  - Penugasan kepada pegawai ICT BPM.
  - Status tiket: Open, In Progress, Awaiting User, Resolved, Closed.
  - Log komunikasi & update dalam tiket.
- **Notifikasi & SLA**:
  - Email notifikasi kepada pengguna & pegawai BPM.
  - Pengurusan SLA: masa tindak balas dan penyelesaian.
- **Dashboard & Laporan**:
  - Statistik aduan, prestasi penyelesaian, trend masalah, export laporan.

### 6.2. ICT Asset Loan Module

- **Permohonan Pinjaman Peralatan ICT**:
  - Borang digital dengan field wajib: Nama, Jawatan, Bahagian, Tujuan, Lokasi, Tarikh Pinjaman, Tarikh Dijangka Pulang, Perakuan.
  - Senarai peralatan, kuantiti, catatan.
- **Workflow Kelulusan**:
  - Pengesahan oleh Ketua Bahagian (minimum Gred 41).
  - BPM boleh menerima/menolak permohonan berdasarkan ketersediaan.
- **Proses Check-out / Check-in**:
  - Rekod pegawai pengeluar, penerima, pemulangan, terima pulangan.
  - Log status aset: Available, Loaned, Returned, Damaged/Lost.
- **Kalendar Tempahan & Notifikasi**:
  - Paparan availability peralatan.
  - Reminder email sebelum tarikh pulang dan jika overdue.
- **Laporan & Audit Trail**:
  - Sejarah pinjaman, kerosakan, kehilangan, penggunaan peralatan.

### 6.3. Integrasi Modul

- Aduan boleh dikaitkan dengan asset pinjaman.
- Tiket maintenance automatik untuk asset rosak dipulangkan.

---

## 7. KEPERLUAN BUKAN FUNGSI (Non-Functional Requirements)

- **Keselamatan**: Autentikasi login staf, role-based access control, audit trail.
- **Kebolehskalaan**: Sistem boleh ditambah modul baru (contoh: mobile app, QR asset tagging).
- **Kebolehgunaan**: UI mesra pengguna, responsive, bilingual (BM/EN optional).
- **Integrasi**: Boleh diintegrasi dengan sistem sedia ada (LDAP, email server, asset management DB).
- **Auditability**: Semua transaksi dan perubahan direkod untuk audit dalaman.
- **Performance**: Sistem dapat memproses permohonan/tiket dengan pantas (<2s response time typical).

---

## 8. KEPERLUAN DATA (Data Requirements)

- **Inventori Aset ICT**: Rekod lengkap asset, status, sejarah pinjaman.
- **Database Pengguna**: Info staf MOTAC, role, bahagian/unit.
- **Log Aduan & Pinjaman**: Semua interaksi, perubahan status, dan komunikasi.

---

## 9. KEPERLUAN PENGURUSAN (Management Requirements)

- **Pemilik Sistem**: BPM bertanggungjawab untuk pengurusan pengguna, konfigurasi polisi, dan audit.
- **Backup & Recovery**: Backup harian, recovery plan sekiranya gagal.
- **Dokumentasi**: Manual pengguna, SOP aduan & pinjaman, dokumentasi teknikal.

---

## 10. KEPERLUAN UNDANG-UNDANG, PERATURAN & DASAR (Legal, Regulatory & Policy Requirements)

- **Privasi Data**: Pematuhan kepada Akta Perlindungan Data Peribadi Malaysia.
- **Dasar ICT MOTAC**: Penyelarasan dengan polisi penggunaan asset dan keselamatan ICT BPM.
- **Audit & Rekod**: Pematuhan kepada piawaian audit dalaman MOTAC.

---

## 11. KEPERLUAN KEBERJAYAAN (Success Criteria)

- Sistem digunakan >90% staf MOTAC dalam tempoh 6 bulan selepas pelancaran.
- >95% aduan dan pinjaman dapat direkod dan dilengkapkan melalui sistem.
- Laporan audit dalaman menunjukkan peningkatan kecekapan, ketelusan, dan penurunan insiden kehilangan aset ICT.

---

## 12. GLOSARI & RUJUKAN (Glossary & References)

Untuk memahami istilah perniagaan dan teknikal yang digunakan dalam dokumen ini:

**Rujukan:** Lihat **[GLOSSARY.md]** untuk definisi lengkap semua istilah, akronim, dan konsep.

### 12.1. Istilah Utama Perniagaan

- **Helpdesk Ticketing**: Sistem pengurusan aduan ICT
- **Asset Loan**: Peminjaman peralatan ICT
- **SLA**: Service Level Agreement - Perjanjian tahap perkhidmatan
- **BPM**: Bahagian Pengurusan Maklumat MOTAC
- **Workflow Kelulusan**: Proses kelulusan berjenjang
- **Audit Trail**: Rekod kronologi aktiviti sistem

### 12.2. Rujukan Piawaian

- **ISO/IEC/IEEE 29148**: Requirements engineering
- **ISO 8000**: Data quality
- **ISO 9001**: Quality management
- **ISO/IEC 27701**: Privacy information management
- **WCAG 2.2 Level AA**: Web accessibility

---

## 13. LAMPIRAN (Appendices)

### 13.1. Borang Rujukan

- **Borang Aduan Kerosakan ICT** (PK.(S).MOTAC.07.(L1))
- **Borang Permohonan Pinjaman Peralatan ICT** (PK.(S).MOTAC.07.(L3))

### 13.2. Carta Alir & Diagram

- **Process Flow Diagram** - Helpdesk Ticketing  
  Rujuk: **versions/v2.1.0_Dokumentasi_Flow_Sistem_Helpdesk_ServiceDesk_ICTServe(iServe).md**

- **Process Flow Diagram** - Asset Loan  
  Rujuk: **versions/v2.1.0_Dokumentasi_Flow_Sistem_Permohonan_Pinjaman_Aset_ICT_ICTServe(iServe).md**

### 13.3. Dokumen Sokongan

- **Entity Relationship Diagram (ERD)**  
  Rujuk: **[D09_DATABASE_DOCUMENTATION.md]**

- **System Architecture Diagram**  
  Rujuk: **[D04_SOFTWARE_DESIGN_DOCUMENT.md]** dan **[D11_TECHNICAL_DESIGN_DOCUMENTATION.md]**

---

## 14. MATRIKS PEMETAAN KEPERLUAN (Requirements Traceability Matrix)

| ID Keperluan | Kategori | Deskripsi | Rujukan Teknikal |
|--------------|----------|-----------|------------------|
| BR-001 | Helpdesk | Penghantaran tiket aduan | D03 Seksyen 5.1, D04 Seksyen 4.1 |
| BR-002 | Helpdesk | Auto ticket numbering | D03 Seksyen 5.1, D09 Jadual tickets |
| BR-003 | Asset Loan | Permohonan pinjaman digital | D03 Seksyen 5.2, D04 Seksyen 4.2 |
| BR-004 | Asset Loan | Workflow kelulusan | D03 Seksyen 5.2, D09 Jadual approvals |
| BR-005 | Inventory | Katalog aset ICT | D03 Seksyen 5.4, D09 Jadual assets |
| BR-006 | Security | Authentication & RBAC | D03 Seksyen 5.3, D11 Seksyen 7 |
| BR-007 | Audit | Audit trail lengkap | D03 Seksyen 5.3, D09 Jadual audit_logs |
| BR-008 | Reporting | Dashboard & laporan | D03 Seksyen 5.5, D11 Seksyen 4.5 |

**Nota:** Semua keperluan perniagaan boleh dijejak ke spesifikasi teknikal dan implementasi dalam dokumen D03-D11.

---

**Dokumen ini disediakan mengikut piawaian ISO/IEC/IEEE 29148 dan akan dikemaskini mengikut keperluan projek.**
