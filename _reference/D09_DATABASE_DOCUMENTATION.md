# Dokumentasi Pangkalan Data (Database Documentation)

**Sistem Helpdesk & ICT Asset Loan BPM MOTAC**  
**Versi:** 2.0.0 (SemVer)  
**Tarikh Kemaskini:** 17 Oktober 2025  
**Status:** Aktif  
**Klasifikasi:** Terhad - Dalaman MOTAC  
**Penulis:** Pasukan Pembangunan BPM MOTAC  
**Standard Rujukan:** ISO 8000 (Data Quality), ISO/IEC/IEEE 1016, ISO/IEC 27701 (Privacy), ISO/IEC 38505-1 (Data Governance)

---

## Maklumat Dokumen (Document Information)

| Atribut                | Nilai                                    |
|------------------------|------------------------------------------|
| **Versi**              | 2.0.0                                    |
| **Tarikh Kemaskini**   | 17 Oktober 2025                          |
| **Status**             | Aktif                                    |
| **Klasifikasi**        | Terhad - Dalaman MOTAC                   |
| **Pematuhi**           | ISO 8000, ISO/IEC/IEEE 1016, ISO/IEC 27701, ISO/IEC 38505-1 |
| **Bahasa**             | Bahasa Melayu (utama), English (teknikal)|

---

## Sejarah Perubahan (Changelog)

| Versi  | Tarikh          | Perubahan                                      | Penulis       |
|--------|-----------------|------------------------------------------------|---------------|
| 1.0.0  | September 2025  | Versi awal dokumentasi pangkalan data          | Pasukan BPM   |
| 2.0.0  | 17 Oktober 2025 | Penyeragaman mengikut D00-D14, SemVer, cross-reference | Pasukan BPM   |

---

## Rujukan Dokumen Berkaitan (Related Document References)

- **[D00_SYSTEM_OVERVIEW.md]** - Ringkasan Sistem
- **[D02_BUSINESS_REQUIREMENTS_SPECIFICATION.md]** - Keperluan Perniagaan
- **[D03_SOFTWARE_REQUIREMENTS_SPECIFICATION.md]** - Keperluan Perisian
- **[D04_SOFTWARE_DESIGN_DOCUMENT.md]** - Rekabentuk Perisian
- **[D05_DATA_MIGRATION_PLAN.md]** - Pelan Migrasi Data
- **[D06_DATA_MIGRATION_SPECIFICATION.md]** - Spesifikasi Migrasi Data
- **[D11_TECHNICAL_DESIGN_DOCUMENTATION.md]** - Dokumentasi Rekabentuk Teknikal
- **[GLOSSARY.md]** - Glosari Istilah Sistem

---

## 1. TUJUAN DOKUMEN (Purpose)

Dokumen ini mendokumentasikan struktur, definisi, piawaian kualiti, dan hubungan jadual dalam pangkalan data bagi sistem **Helpdesk & ICT Asset Loan BPM MOTAC**. Ia mematuhi piawaian **ISO 8000** (data quality), **ISO/IEC/IEEE 1016** (software design), **ISO/IEC 27701** (privacy information management), dan **ISO/IEC 38505-1** (data governance).

---

## 2. SKOP (Scope)

- Semua jadual utama yang menyokong modul Helpdesk Ticketing, ICT Asset Loan, Inventori Aset, Pengguna, Workflow Kelulusan, Audit Trail, dan Notifikasi.
- Dokumentasi untuk setiap field, indeks, kunci primer/asing, dan hubungan antara jadual (relationship).
- Piawaian kualiti data (data quality rules).

---

## 3. REKA BENTUK LOGIKAL (Logical Database Design)

### 3.1. Senarai Jadual Utama (Main Tables)

| Jadual/Table        | Fungsi/Description                               |
|---------------------|--------------------------------------------------|
| users               | Maklumat pengguna & peranan sistem               |
| divisions           | Bahagian/Unit MOTAC                              |
| tickets             | Rekod aduan kerosakan ICT                        |
| assets              | Inventori peralatan ICT                          |
| loans               | Permohonan dan rekod pinjaman peralatan ICT      |
| approvals           | Workflow kelulusan permohonan pinjaman           |
| notifications       | Notifikasi sistem kepada pengguna                |
| audit_logs          | Audit trail semua perubahan penting              |

---

## 4. DEFINISI JADUAL & FIELD (Table & Field Definitions)

### 4.1. Jadual: `users`

| Field         | Tipe Data      | Keterangan / Description                 | Kualiti Data (ISO 8000)             |
|---------------|----------------|------------------------------------------|-------------------------------------|
| id            | bigint, PK     | Primary key, auto increment              | Unique, not null                    |
| name          | string(255)    | Nama pengguna                            | Not null, valid name                |
| email         | string(255)    | E-mel pengguna (unik)                    | Unique, valid email, not null       |
| phone         | string(50)     | No. telefon                              | Not null, valid phone               |
| position_grade| string(50)     | Jawatan & gred                           | Optional                            |
| division_id   | bigint, FK     | FK ke `divisions`                        | Valid FK, not null                  |
| role          | string(30)     | staff/admin/technician/approver          | Not null, valid enum                |
| password      | string(255)    | Password hash                            | Not null                            |
| created_at    | timestamp      | Tarikh daftar                            | Not null                            |
| updated_at    | timestamp      | Tarikh kemaskini                         | Not null                            |

### 4.2. Jadual: `divisions`

| Field         | Tipe Data      | Keterangan                               | Kualiti Data                        |
|---------------|----------------|------------------------------------------|-------------------------------------|
| id            | bigint, PK     | Primary key                              | Unique, not null                    |
| name          | string(255)    | Nama bahagian/unit                       | Not null, unique                    |

### 4.3. Jadual: `tickets` (Aduan Kerosakan ICT)

| Field             | Tipe Data      | Keterangan                              | Kualiti Data                       |
|-------------------|----------------|-----------------------------------------|------------------------------------|
| id                | bigint, PK     | Primary key                             | Unique, not null                   |
| user_id           | bigint, FK     | FK ke `users` (pelapor)                 | Valid FK, not null                 |
| division_id       | bigint, FK     | FK ke `divisions`                       | Valid FK, not null                 |
| grade             | string(50)     | Gred jawatan pelapor                    | Optional                           |
| email             | string(255)    | E-mel pelapor (redundant for report)    | Valid email, not null              |
| phone             | string(50)     | Telefon pelapor                         | Not null                           |
| damage_type       | string(100)    | Jenis kerosakan (dropdown)              | Not null, valid enum               |
| damage_info       | text           | Maklumat lanjut kerosakan               | Not null                           |
| asset_no          | string(100)    | No Aset (jika berkaitan)                | Conditional, valid if hardware     |
| declaration       | boolean        | Perakuan/disclaimer                     | Not null, must be true             |
| status            | string(50)     | Status tiket                            | Not null, valid enum               |
| assigned_to       | bigint, FK     | FK ke `users` (technician)              | Optional                           |
| closed_at         | timestamp      | Tarikh tiket ditutup                    | Optional                           |
| created_at        | timestamp      | Tarikh aduan dibuat                     | Not null                           |
| updated_at        | timestamp      | Tarikh kemaskini terakhir               | Not null                           |
| deleted_at        | timestamp      | Soft delete                             | Optional                           |

### 4.4. Jadual: `assets` (Inventori Peralatan ICT)

| Field             | Tipe Data      | Keterangan                              | Kualiti Data                       |
|-------------------|----------------|-----------------------------------------|------------------------------------|
| id                | bigint, PK     | Primary key                             | Unique, not null                   |
| asset_type        | string(100)    | Jenis peralatan                         | Not null, valid enum               |
| brand             | string(100)    | Jenama                                  | Not null                           |
| model             | string(100)    | Model                                   | Not null                           |
| tag_id            | string(100)    | No Siri / Tag ID                        | Not null, unique                   |
| accessories       | json/text      | Senarai aksesori                        | Optional                           |
| status            | string(50)     | Status (Available, Loaned, Maintenance) | Not null, valid enum               |
| location          | string(255)    | Lokasi peralatan                        | Optional                           |
| created_at        | timestamp      | Tarikh daftar                           | Not null                           |
| updated_at        | timestamp      | Tarikh kemaskini terakhir               | Not null                           |
| deleted_at        | timestamp      | Soft delete                             | Optional                           |

### 4.5. Jadual: `loans` (Rekod Pinjaman Peralatan ICT)

| Field                  | Tipe Data      | Keterangan                              | Kualiti Data                       |
|------------------------|----------------|-----------------------------------------|------------------------------------|
| id                     | bigint, PK     | Primary key                             | Unique, not null                   |
| applicant_id           | bigint, FK     | FK ke `users` (pemohon)                 | Valid FK, not null                 |
| responsible_officer_id | bigint, FK     | FK ke `users` (pegawai bertanggungjawab)| Conditional, valid FK              |
| division_id            | bigint, FK     | FK ke `divisions`                       | Not null, valid FK                 |
| purpose                | string(255)    | Tujuan pinjaman                         | Not null                           |
| phone                  | string(50)     | Telefon pemohon                         | Not null                           |
| location               | string(255)    | Lokasi penggunaan                       | Not null                           |
| loan_start_date        | date           | Tarikh mula pinjam                      | Not null                           |
| loan_end_date          | date           | Tarikh dijangka pulang                  | Not null                           |
| equipment_list         | json/text      | Senarai peralatan, kuantiti, catatan    | Not null                           |
| declaration            | boolean        | Perakuan/disclaimer                     | Not null                           |
| endorsement_status     | string(20)     | DISOKONG/TIDAK DISOKONG                 | Not null, valid enum               |
| endorsed_by            | bigint, FK     | FK ke `users` (pegawai pengesah)        | Not null, valid FK                 |
| endorsement_date       | date           | Tarikh disahkan                         | Not null                           |
| bpm_issued_by          | bigint, FK     | FK ke `users` (pegawai BPM pengeluar)   | Not null, valid FK                 |
| bpm_received_by        | bigint, FK     | FK ke `users` (pegawai BPM terima balik)| Not null, valid FK                 |
| return_notes           | text           | Catatan pemulangan                      | Optional                           |
| status                 | string(50)     | Status pinjaman (Loaned, Returned, Overdue, Damaged/Lost)| Not null, valid enum    |
| created_at             | timestamp      | Tarikh permohonan                        | Not null                          |
| updated_at             | timestamp      | Tarikh kemaskini terakhir                | Not null                          |
| deleted_at             | timestamp      | Soft delete                              | Optional                          |

### 4.6. Jadual: `approvals` (Workflow Kelulusan)

| Field         | Tipe Data      | Keterangan                               | Kualiti Data                        |
|---------------|----------------|------------------------------------------|-------------------------------------|
| id            | bigint, PK     | Primary key                              | Unique, not null                    |
| loan_id       | bigint, FK     | FK ke `loans`                            | Not null, valid FK                  |
| approved_by   | bigint, FK     | FK ke `users` (approver)                 | Not null, valid FK                  |
| status        | string(20)     | DISOKONG/TIDAK DISOKONG                  | Not null, valid enum                |
| remarks       | text           | Catatan kelulusan                        | Optional                            |
| approved_at   | timestamp      | Tarikh kelulusan                         | Not null                            |

### 4.7. Jadual: `notifications` (Notifikasi)

| Field         | Tipe Data      | Keterangan                               | Kualiti Data                        |
|---------------|----------------|------------------------------------------|-------------------------------------|
| id            | bigint, PK     | Primary key                              | Unique, not null                    |
| user_id       | bigint, FK     | FK ke `users`                            | Not null, valid FK                  |
| type          | string(100)    | Jenis notifikasi (database, mail, etc)   | Not null, valid enum                |
| data          | json           | Payload notifikasi                       | Not null                            |
| read_at       | timestamp      | Tarikh notifikasi dibaca                 | Optional                            |
| created_at    | timestamp      | Tarikh cipta notifikasi                  | Not null                            |

### 4.8. Jadual: `audit_logs` (Audit Trail)

| Field         | Tipe Data      | Keterangan                               | Kualiti Data                        |
|---------------|----------------|------------------------------------------|-------------------------------------|
| id            | bigint, PK     | Primary key                              | Unique, not null                    |
| auditable_type| string(255)    | Jenis model (users, tickets, loans, etc.)| Not null                            |
| auditable_id  | bigint         | ID entiti yang diubah                    | Not null                            |
| event         | string(50)     | created/updated/deleted/restored         | Not null, valid enum                |
| old_values    | json           | Data sebelum perubahan                   | Optional                            |
| new_values    | json           | Data selepas perubahan                   | Optional                            |
| user_id       | bigint, FK     | FK ke `users` (pembuat perubahan)        | Optional                            |
| created_at    | timestamp      | Tarikh log                               | Not null                            |

---

## 5. HUBUNGAN ANTARA JADUAL (Relationships)

- **users** 1—* **tickets** (Seorang pengguna boleh buat banyak aduan)
- **users** 1—* **loans** (Seorang pengguna boleh buat banyak permohonan pinjaman)
- **loans** 1—1 **approvals** (Satu pinjaman, satu workflow kelulusan)
- **assets** 1—* **loans** (Satu asset boleh dipinjam berulang kali, history disimpan)
- **users** 1—* **notifications** (Satu pengguna boleh dapat banyak notifikasi)
- **users** 1—* **audit_logs** (Satu pengguna boleh buat banyak perubahan/log)
- **divisions** 1—* **users**, **tickets**, **loans** (Bahagian/unit sebagai FK)

---

## 6. PIAWAIAN KUALITI DATA (Data Quality Standards)

- **Not null** untuk semua field kritikal (rujuk ISO 8000: accuracy, completeness).
- **Uniqueness** pada field utama (email, tag_id).
- **Enum validation** pada field status, role, dan lain-lain.
- **Referential integrity**: Semua FK wajib wujud dalam jadual parent.
- **Soft deletes** untuk audit trail dan pemulihan data.

---

## 7. BACKUP & PEMULIHAN (Backup & Recovery)

- Backup harian (daily) untuk semua jadual utama, retention minimum 30 hari.
- Ujian pemulihan (restore test) dilakukan setiap bulan.
- Backup disimpan dalam format encrypted dan hanya boleh diakses oleh admin BPM.

---

## 8. AUDIT & LOGGING

- Semua perubahan kritikal (insert, update, delete, restore) direkod dalam `audit_logs`.
- Akses audit log hanya untuk admin & auditor.
- Integrasi dengan package owen-it/laravel-auditing untuk automasi logging.

---

## 9. PENUTUP

Dokumentasi pangkalan data ini adalah rujukan utama untuk pembangunan, pentadbiran, dan audit sistem Helpdesk & ICT Asset Loan BPM MOTAC. Sebarang perubahan struktur mesti dikemaskini dalam dokumen ini dan mesti mematuhi piawaian **ISO 8000** (data quality), **ISO/IEC/IEEE 1016** (software design), **ISO/IEC 27701** (privacy management), dan **ISO/IEC 38505-1** (data governance).

---

## Glosari & Rujukan (Glossary & References)

Sila rujuk **[GLOSSARY.md]** untuk istilah teknikal seperti:

- **Pangkalan Data (Database)**: Koleksi data terstruktur yang disimpan secara elektronik
- **ERD (Entity Relationship Diagram)**: Gambaran rajah hubungan entiti pangkalan data
- **Normalisasi (Normalization)**: Proses mengorganisasi data untuk mengurangkan redundansi
- **ISO 8000**: Piawaian kualiti data
- **ISO/IEC 27701**: Piawaian pengurusan maklumat privasi
- **ISO/IEC 38505-1**: Piawaian tadbir urus data

**Dokumen Rujukan:**

- **D00_SYSTEM_OVERVIEW.md** - Gambaran keseluruhan sistem
- **D02_BUSINESS_REQUIREMENTS_SPECIFICATION.md** - Keperluan perniagaan dan data
- **D03_SOFTWARE_REQUIREMENTS_SPECIFICATION.md** - Keperluan perisian
- **D04_SOFTWARE_DESIGN_DOCUMENT.md** - Rekabentuk perisian
- **D05_DATA_MIGRATION_PLAN.md** - Pelan migrasi data
- **D06_DATA_MIGRATION_SPECIFICATION.md** - Spesifikasi migrasi data
- **D11_TECHNICAL_DESIGN_DOCUMENTATION.md** - Rekabentuk teknikal terperinci

---

## Lampiran (Appendices)

### A. Entity Relationship Diagram (ERD)

Rujuk Seksyen 3 untuk ERD lengkap sistem.

### B. Definisi Lengkap Semua Jadual (Complete Table Definitions)

Rujuk Seksyen 4 untuk definisi terperinci semua jadual dan field.

### C. Piawaian Penamaan & Konvensyen (Naming Standards & Conventions)

- **Jadual (Tables)**: Menggunakan huruf kecil, singular form (contoh: `user`, `ticket`, `asset`)
- **Field**: Snake case (contoh: `created_at`, `user_id`, `ticket_status`)
- **Primary Key**: Nama jadual + `_id` (contoh: `user_id`, `ticket_id`)
- **Foreign Key**: Nama jadual rujukan + `_id` (contoh: `user_id`, `department_id`)

### D. Daftar Indeks & Prestasi (Index Register & Performance)

Rujuk Seksyen 3 untuk strategi pengindeksan bagi optimisasi prestasi.

---

**Dokumen ini mematuhi piawaian ISO 8000:2011 (Data Quality), ISO/IEC/IEEE 1016:2009 (Software Design), ISO/IEC 27701:2019 (Privacy Management), dan ISO/IEC 38505-1:2017 (Data Governance).**
