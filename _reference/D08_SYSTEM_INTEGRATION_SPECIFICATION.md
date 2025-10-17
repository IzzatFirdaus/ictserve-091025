# Spesifikasi Integrasi Sistem (System Integration Specification - SIS)

**Sistem Helpdesk & ICT Asset Loan BPM MOTAC**  
**Versi:** 2.0.0 (SemVer)  
**Tarikh Kemaskini:** 17 Oktober 2025  
**Status:** Aktif  
**Klasifikasi:** Terhad - Dalaman MOTAC  
**Penulis:** Pasukan Pembangunan BPM MOTAC  
**Standard Rujukan:** ISO/IEC/IEEE 15288, ISO/IEC/IEEE 15289, ISO/IEC TS 24748-6

---

## Maklumat Dokumen (Document Information)

| Atribut                | Nilai                                    |
|------------------------|------------------------------------------|
| **Versi**              | 2.0.0                                    |
| **Tarikh Kemaskini**   | 17 Oktober 2025                          |
| **Status**             | Aktif                                    |
| **Klasifikasi**        | Terhad - Dalaman MOTAC                   |
| **Pematuhi**           | ISO/IEC/IEEE 15288, 15289, TS 24748-6    |
| **Bahasa**             | Bahasa Melayu (utama), English (teknikal)|

---

## Sejarah Perubahan (Changelog)

| Versi  | Tarikh          | Perubahan                                      | Penulis       |
|--------|-----------------|------------------------------------------------|---------------|
| 1.0.0  | September 2025  | Versi awal spesifikasi integrasi sistem        | Pasukan BPM   |
| 2.0.0  | 17 Oktober 2025 | Penyeragaman mengikut D00-D14, SemVer, cross-reference | Pasukan BPM   |

---

## Rujukan Dokumen Berkaitan (Related Document References)

- **[D00_SYSTEM_OVERVIEW.md]** - Ringkasan Sistem
- **[D07_SYSTEM_INTEGRATION_PLAN.md]** - Pelan Integrasi Sistem (strategi integrasi)
- **[D11_TECHNICAL_DESIGN_DOCUMENTATION.md]** - Dokumentasi Rekabentuk Teknikal
- **[GLOSSARY.md]** - Glosari Istilah Sistem

---

## 1. TUJUAN DOKUMEN (Purpose)

Dokumen ini mendefinisikan spesifikasi teknikal, keperluan, dan kriteria integrasi untuk Sistem **Helpdesk & ICT Asset Loan BPM MOTAC**. Spesifikasi ini mengikut garis panduan dan piawaian **ISO/IEC/IEEE 15288** (system engineering), **ISO/IEC/IEEE 15289** (system/software documentation), dan **ISO/IEC TS 24748-6** (lifecycle management guide).

---

## 2. SKOP SPESIFIKASI (Scope)

- Meliputi integrasi antara semua modul dalaman:
  - Helpdesk Ticketing
  - ICT Asset Loan
  - Inventory & Asset Management
  - Authentication & Authorization
  - Reporting & Dashboard
  - Audit Trail
- Meliputi integrasi luaran dengan sistem sedia ada MOTAC (LDAP/SSO, Email Server, Database Staf, Sistem Pengurusan Aset Legacy).
- Menyedia keperluan untuk masa depan: API, integrasi aplikasi luaran.

---

## 3. OBJEKTIF INTEGRASI (Integration Objectives)

- Semua modul berfungsi sebagai satu sistem bersepadu (seamless).
- Data sentiasa konsisten dan tidak ada duplikasi (data consistency & single source of truth).
- Memudahkan interoperability dan pertukaran data antara sistem dalaman MOTAC.
- Memastikan integrasi selamat, boleh diaudit, dan mematuhi dasar serta undang-undang berkaitan.

---

## 4. KOMPONEN & ANTARA MUKA INTEGRASI (Integration Components & Interfaces)

### 4.1. Komponen Dalaman

| Modul               | Antaramuka Integrasi             | Tujuan                                          |
|---------------------|----------------------------------|-------------------------------------------------|
| Helpdesk Ticketing  | API dalaman, model relation      | Link aduan kerosakan dengan aset pinjaman       |
| ICT Asset Loan      | API dalaman, model relation      | Status aset, automasi tiket maintenance         |
| Inventory           | API dalaman                      | Data aset, status, penggunaan, sejarah          |
| Authentication      | LDAP/SSO, database users         | Single Sign-On, role mapping                    |
| Reporting           | Query, API                       | Laporan rentas modul                            |
| Audit Trail         | Laravel Auditing, logging        | Audit semua aktiviti integrasi                   |

### 4.2. Komponen Luaran

| Sistem              | Integrasi Dengan                 | Mekanisme                                       |
|---------------------|----------------------------------|-------------------------------------------------|
| LDAP / SSO MOTAC    | Authentication                  | LDAP bind, user sync                            |
| Email Server        | Notification, Alert             | SMTP, Laravel Notification                      |
| Database Staf       | User Management, Approval       | Direct DB access, scheduled import, API         |
| Sistem Aset Legacy  | Inventory, Loan                 | CSV import, ETL, atau API jika tersedia         |

### 4.3. API & Data Exchange

- Semua pertukaran data (internal & external) guna RESTful API (JSON).
- Endpoint utama didokumenkan (e.g. `/api/assets`, `/api/tickets`, `/api/users`).
- Semua API guna token authentication (Bearer, OAuth jika perlu).

---

## 5. PROSES & KAEDAH INTEGRASI (Integration Processes & Methods)

### 5.1. Data Mapping & Transformation

- Setiap field modul dipadankan dengan field sistem sedia ada.
- Mapping dokumen disediakan (contoh: `asset_no` lama → `tag_id` baru).
- Data transformation: format tarikh, kod status, normalisasi string.

### 5.2. Validasi & Konsistensi Data

- Foreign key constraints diaktifkan di database.
- Transactional integrity untuk operasi rentas modul.
- Validasi data secara automatik semasa import/migrasi.

### 5.3. Pengurusan Ralat & Audit

- Semua operasi integrasi dilogkan (audit trail).
- Exception handling: fallback, retry, atau notifikasi kepada admin jika gagal.
- Semua integrasi boleh di-rollback jika berlaku error kritikal.

### 5.4. Jadual & Workflow Integrasi

- Jadual proses integrasi (cron, job queue) untuk sync/import berkala.
- Sequence diagram & flowchart untuk setiap integrasi utama didokumenkan.

---

## 6. KESELAMATAN & PEMATUHAN (Security & Compliance)

- Semua komunikasi antara modul/sistem mesti melalui HTTPS/TLS.
- Pengesahan (authentication) dan kebenaran (authorization) mengikut peranan.
- Data sensitif dienkripsi at-rest & in-transit.
- Audit compliance: semua aktiviti integrasi boleh diaudit mengikut dasar MOTAC & undang-undang (contoh: PDPA).

---

## 7. KEPERLUAN PENGUJIAN INTEGRASI (Integration Testing Requirements)

- **Unit Test**: Setiap fungsi integrasi diuji secara berasingan.
- **Integration Test**: Ujian penuh antara modul (contoh: aduan → asset → loan).
- **System Test**: End-to-end test, termasuk integrasi luaran.
- **UAT**: User Acceptance Test bersama BPM & pentadbir sistem.
- **Regression Test**: Selepas setiap kemas kini utama.

---

## 8. DOKUMENTASI & TADBIR URUS (Documentation & Governance)

- Setiap endpoint API, data mapping, dan flow integrasi didokumenkan (technical & user manual).
- Dokumen traceability dan versioning untuk setiap perubahan.
- Governance: Approval sebelum dan selepas setiap aktiviti integrasi.

---

## 9. PENUTUP

Spesifikasi ini menjadi rujukan rasmi bagi semua aktiviti integrasi sistem Helpdesk & ICT Asset Loan BPM MOTAC. Ia memastikan integrasi dilakukan secara teratur, selamat, dan mematuhi piawaian antarabangsa **ISO/IEC/IEEE 15288, 15289, TS 24748-6** serta dasar dalaman MOTAC.

---

## Glosari & Rujukan (Glossary & References)

Sila rujuk **[GLOSSARY.md]** untuk istilah teknikal seperti:

- **Spesifikasi Integrasi (Integration Specification)**: Dokumen kriteria dan keperluan teknikal integrasi
- **Interface Specification**: Definisi antara muka antara komponen sistem
- **Integration Testing**: Pengujian interaksi antara komponen sistem
- **ISO/IEC/IEEE 15288**: Piawaian kitaran hayat sistem
- **ISO/IEC/IEEE 15289**: Piawaian dokumentasi sistem/perisian

**Dokumen Rujukan:**

- **D00_SYSTEM_OVERVIEW.md** - Gambaran keseluruhan sistem
- **D07_SYSTEM_INTEGRATION_PLAN.md** - Pelan integrasi sistem
- **D11_TECHNICAL_DESIGN_DOCUMENTATION.md** - Rekabentuk teknikal terperinci

---

## Lampiran (Appendices)

### A. Matriks Antara Muka Komponen (Component Interface Matrix)

Rujuk Seksyen 4 untuk pemetaan lengkap antara muka integrasi.

### B. Kes Ujian Integrasi Terperinci (Detailed Integration Test Cases)

Rujuk Seksyen 7 untuk keperluan pengujian integrasi.

### C. Daftar Risiko & Mitigasi (Risk Register & Mitigation)

Rujuk **D07_SYSTEM_INTEGRATION_PLAN.md** untuk daftar risiko integrasi.

---

**Dokumen ini mematuhi piawaian ISO/IEC/IEEE 15288:2015, ISO/IEC/IEEE 15289:2019, dan ISO/IEC TS 24748-6:2016.**
