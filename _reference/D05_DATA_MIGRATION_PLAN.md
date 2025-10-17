# Pelan Migrasi Data (Data Migration Plan - DMP)

**Sistem Helpdesk & ICT Asset Loan MOTAC BPM**  
**Versi:** 2.0.0 (SemVer)  
**Tarikh Kemaskini:** 17 Oktober 2025  
**Status:** Aktif  
**Klasifikasi:** Terhad - Dalaman MOTAC  
**Penulis:** Pasukan Pembangunan BPM MOTAC  
**Standard Rujukan:** ISO 8000 (Data Quality), ISO/IEC 27701 (Privacy Information Management)

---

## Maklumat Dokumen (Document Information)

| Atribut                | Nilai                                    |
|------------------------|------------------------------------------|
| **Versi**              | 2.0.0                                    |
| **Tarikh Kemaskini**   | 17 Oktober 2025                          |
| **Status**             | Aktif                                    |
| **Klasifikasi**        | Terhad - Dalaman MOTAC                   |
| **Pematuhi**           | ISO 8000, ISO/IEC 27701                  |
| **Bahasa**             | Bahasa Melayu (utama), English (teknikal)|

---

## Sejarah Perubahan (Changelog)

| Versi  | Tarikh          | Perubahan                                      | Penulis       |
|--------|-----------------|------------------------------------------------|---------------|
| 1.0.0  | September 2025  | Versi awal pelan migrasi data                  | Pasukan BPM   |
| 2.0.0  | 17 Oktober 2025 | Penyeragaman mengikut D00-D14, SemVer, cross-reference | Pasukan BPM   |

---

## Rujukan Dokumen Berkaitan (Related Document References)

- **[D00_SYSTEM_OVERVIEW.md]** - Ringkasan Sistem
- **[D06_DATA_MIGRATION_SPECIFICATION.md]** - Spesifikasi Migrasi Data (detail teknikal)
- **[D09_DATABASE_DOCUMENTATION.md]** - Dokumentasi Pangkalan Data (target schema)
- **[GLOSSARY.md]** - Glosari Istilah Sistem

---

## 1. TUJUAN DOKUMEN (Purpose)

Dokumen ini menerangkan perancangan menyeluruh bagi migrasi data ke sistem **Helpdesk & ICT Asset Loan** yang berasaskan Laravel 12 untuk Bahagian Pengurusan Maklumat (BPM), MOTAC. Pelan ini mematuhi piawaian **ISO 8000** untuk kualiti data (data quality) dan **ISO/IEC 27701** untuk pengurusan privasi maklumat (privacy information management).

---

## 2. SKOP MIGRASI (Scope)

- Migrasi semua data berkaitan aduan ICT, inventori aset, sejarah pinjaman, dan maklumat pengguna dari sistem lama (manual, Excel, Access, atau sistem digital terdahulu) ke sistem baru Laravel.
- Data yang terlibat:
  - Tiket Aduan Kerosakan ICT
  - Data Pinjaman Aset ICT
  - Inventori Aset ICT
  - Profil pengguna (staf MOTAC)
- Termasuk metadata (timestamp, status, logs) & audit trail.

---

## 3. SUMBER DATA (Data Sources)

- **Manual Records**: Borang kertas, fail PDF, dokumen cetak.
- **Digital Files**: Microsoft Excel, CSV, Access DB, sistem aduan lama.
- **Sistem Sedia Ada**: Database, API, atau sistem legacy lain.

---

## 4. PRINSIP MIGRASI (Migration Principles)

- **Integrity**: Data dipindahkan tanpa kehilangan, perubahan, atau kerosakan.
- **Quality**: Data dibersihkan, distandardkan, dan valid mengikut ISO 8000 (Data Quality).
- **Privacy & Security**: Pemindahan dan penyimpanan data patuh ISO/IEC 27701; data peribadi dilindungi, hanya access role tertentu dibenarkan.
- **Traceability**: Setiap rekod migrasi boleh dijejak (audit trail).
- **Rollback Capability**: Pelan pemulihan sekiranya migrasi gagal.

---

## 5. LANGKAH-LANGKAH MIGRASI (Migration Steps)

### 5.1. Data Assessment & Mapping

- **Inventori Data**: Kenalpasti semua sumber data, struktur, dan owner.
- **Data Mapping**: Padankan field sumber ke field dalam sistem Laravel (contoh: `user_fullname` → `users.name`, `asset_id_legacy` → `assets.tag_id`).
- **Data Dictionary**: Sediakan kamus data untuk semua field.

### 5.2. Data Cleansing & Standardization

- **Deduplication**: Buang rekod berganda.
- **Validation**: Pastikan format, completeness, dan konsistensi (contoh: tarikh dalam `YYYY-MM-DD`, email valid).
- **Standardization**: Tukar kod/kategori lama ke kod baru sistem Laravel (mapping kategori kerosakan, status pinjaman, dsb).

### 5.3. Data Migration Tools & Scripts

- Gunakan skrip migrasi Laravel (php artisan db:seed, custom import scripts).
- Import CSV/Excel guna Laravel Excel package atau Eloquent batch insert.
- Logging setiap proses import untuk audit dan troubleshooting.

### 5.4. Data Migration Execution

- **Dry Run**: Ujian migrasi di staging/dev, semak hasil.
- **Validation**: Cross-check jumlah rekod, field penting, dan random sampling.
- **Go-Live Migration**: Laksanakan migrasi pada waktu off-peak, pastikan backup tersedia.
- **Post-Migration Review**: Audit data dalam sistem baru, semak error log.

### 5.5. Data Protection & Privacy

- **Encryption**: Data at-rest dan in-transit.
- **Access Control**: Data migrasi hanya boleh diakses oleh pasukan yang dibenarkan.
- **Data Retention**: Hapus data peribadi dari sistem lama mengikut polisi retention MOTAC selepas migrasi berjaya.

---

## 6. JADUAL MIGRASI (Migration Schedule)

| Fasa               | Tempoh         | Aktiviti                          |
|--------------------|---------------|-----------------------------------|
| Penilaian & Mapping| 1 minggu      | Data inventory, mapping, dictionary|
| Cleansing/Standard | 1 minggu      | Deduplication, validation         |
| Skrip & Ujian      | 1 minggu      | Scripting, dry run, validation    |
| Migrasi Sebenar    | 1-2 hari      | Go-live migration, backup         |
| Audit & Review     | 3 hari        | Post-migration review, reporting  |

---

## 7. RISIKO & MITIGASI (Risks & Mitigation)

| Risiko                        | Langkah Mitigasi                          |
|-------------------------------|-------------------------------------------|
| Data rosak/kehilangan         | Full backup, dry run, rollback script     |
| Data duplikasi/tidak konsisten| Cleansing, validation, mapping yang teliti|
| Kebocoran data peribadi       | Encryption, access control, audit trail   |
| Fail integrasi legacy         | Early testing, manual import jika perlu   |

---

## 8. KAWALAN KUALITI & AUDIT (Quality & Audit Controls)

- **Verification**: Setiap batch migrasi diverifikasi (random sampling & total record).
- **Audit Trail**: Skrip log semua aktiviti migrasi.
- **Reporting**: Laporan status migrasi, error, dan data issue kepada BPM.

---

## 9. PENUTUP

Pelan migrasi ini memastikan data lama dipindahkan ke sistem Helpdesk & ICT Asset Loan MOTAC BPM secara selamat, berkualiti, dan patuh piawaian antarabangsa (ISO 8000, ISO/IEC 27701). Semua proses didokumen, diaudit, dan boleh disemak oleh pihak pengurusan BPM.

---
