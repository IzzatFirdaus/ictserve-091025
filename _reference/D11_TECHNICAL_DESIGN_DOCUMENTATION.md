# Dokumentasi Rekabentuk Teknikal (Technical Design Documentation - TDD)

**Sistem Helpdesk & ICT Asset Loan BPM MOTAC**  
**Versi:** 2.0.0 (SemVer)  
**Tarikh Kemaskini:** 17 Oktober 2025  
**Status:** Aktif  
**Klasifikasi:** Terhad - Dalaman MOTAC  
**Penulis:** Pasukan Pembangunan BPM MOTAC  
**Standard Rujukan:** IEEE 1016, ISO/IEC/IEEE 2651x series, ISO 9001, ISO/IEC/IEEE 12207

---

## Maklumat Dokumen (Document Information)

| Atribut                | Nilai                                    |
|------------------------|------------------------------------------|
| **Versi**              | 2.0.0                                    |
| **Tarikh Kemaskini**   | 17 Oktober 2025                          |
| **Status**             | Aktif                                    |
| **Klasifikasi**        | Terhad - Dalaman MOTAC                   |
| **Pematuhi**           | IEEE 1016, ISO/IEC/IEEE 2651x, ISO 9001, ISO/IEC/IEEE 12207 |
| **Bahasa**             | Bahasa Melayu (utama), English (teknikal)|

---

## Sejarah Perubahan (Changelog)

| Versi  | Tarikh          | Perubahan                                      | Penulis       |
|--------|-----------------|------------------------------------------------|---------------|
| 1.0.0  | September 2025  | Versi awal dokumentasi rekabentuk teknikal     | Pasukan BPM   |
| 2.0.0  | 17 Oktober 2025 | Penyeragaman mengikut D00-D14, SemVer, cross-reference | Pasukan BPM   |

---

## Rujukan Dokumen Berkaitan (Related Document References)

- **[D00_SYSTEM_OVERVIEW.md]** - Ringkasan Sistem
- **[D01_SYSTEM_DEVELOPMENT_PLAN.md]** - Pelan Pembangunan Sistem
- **[D04_SOFTWARE_DESIGN_DOCUMENT.md]** - Rekabentuk Perisian (high-level design)
- **[D07_SYSTEM_INTEGRATION_PLAN.md]** - Pelan Integrasi Sistem
- **[D08_SYSTEM_INTEGRATION_SPECIFICATION.md]** - Spesifikasi Integrasi Sistem
- **[D09_DATABASE_DOCUMENTATION.md]** - Dokumentasi Pangkalan Data
- **[D10_SOURCE_CODE_DOCUMENTATION.md]** - Dokumentasi Kod Sumber
- **[GLOSSARY.md]** - Glosari Istilah Sistem

---

## 1. TUJUAN DOKUMEN (Purpose)

Dokumen ini merangkum rekabentuk teknikal sistem **Helpdesk & ICT Asset Loan BPM MOTAC** termasuk senibina, modul, integrasi, spesifikasi data, keselamatan, dan kawalan kualiti. Dokumentasi ini mematuhi piawaian **IEEE 1016** (software design), **ISO/IEC/IEEE 2651x series** (software and documentation engineering), **ISO 9001** (quality management), dan **ISO/IEC/IEEE 12207** (software lifecycle processes).

---

## 2. SKOP (Scope)

- Meliputi semua aspek teknikal sistem: backend, frontend, database, API, authentication, authorization, audit trail, integrasi dalaman/luaran, dan deployment.
- Pengguna: Staf MOTAC, Pegawai BPM, Ketua Bahagian, Admin BPM.

---

## 3. SENIBINA SISTEM (System Architecture)

### 3.1. MVC Architecture (Laravel 12)

- **Model**: Eloquent ORM (User, Asset, Loan, Ticket, Approval, Notification, AuditLog)
- **View**: Blade Templating, Bootstrap/SB Admin, responsive design
- **Controller**: Request handling, validation, business logic, authorization

### 3.2. Lapisan Sistem (Layered System)

- **Presentation Layer**: Blade views, SB Admin, Bootstrap, JavaScript (AJAX, dynamic dropdowns)
- **Application Layer**: Controllers, Services, Middleware, Job Queue
- **Integration Layer**: API (RESTful), Notification, LDAP/SSO, Email (SMTP), Audit Trail
- **Data Layer**: Eloquent models, migrations, factories, seeders

---

## 4. MODUL UTAMA (Main Modules)

### 4.1. Helpdesk Ticketing

- **Fungsi**: Borang aduan kerosakan, pengurusan tiket, penugasan technician, komunikasi, SLA, notifikasi, audit
- **Komponen**: Ticket model, TicketController, Blade views (form, index, detail), Notification, AuditLog

### 4.2. ICT Asset Loan

- **Fungsi**: Permohonan pinjaman, workflow kelulusan, pengeluaran/pemulangan aset, kalendar tempahan, audit trail
- **Komponen**: Loan model, LoanController, Approval model, Notification, Blade views (form, index, detail), AuditLog

### 4.3. Inventory Management

- **Fungsi**: CRUD aset, senarai aksesori, status aset, sejarah pinjaman
- **Komponen**: Asset model, AssetController, Blade views, Notification

### 4.4. Authentication & Authorization

- **Fungsi**: Login Breeze, role-based access, policies, middleware, SSO/LDAP (optional)
- **Komponen**: User model, AuthController, CheckRoleMiddleware, Policies (InventoryPolicy, TicketPolicy), AuthServiceProvider

### 4.5. Reporting & Dashboard

- **Fungsi**: Ringkasan tiket, aset, KPI, analitik, eksport data
- **Komponen**: DashboardController, Blade views, export helper

### 4.6. Audit Trail

- **Fungsi**: Logging perubahan data, compliance, history tracking
- **Komponen**: AuditLog model, owen-it/laravel-auditing, AuditController

---

## 5. REKABENTUK DATABASE (Database Design)

- **Standard Relational Schema (MySQL)**
- **Jadual utama**: users, assets, loans, tickets, approvals, notifications, audit_logs, divisions

### Entity Relationship Diagram (ERD) — Simplified

- users 1—* tickets
- users 1—* loans
- assets 1—* loans
- divisions 1—* users, tickets, loans
- loans 1—1 approvals
- users 1—* notifications, audit_logs

Refer to DATABASE_DOCUMENTATION.md for field definitions & quality standards (ISO 8000).

---

## 6. FRONTEND REKABENTUK (Frontend Design)

- **Blade Templating**: SB Admin Bootstrap, responsive design, custom includes (footer, sidebar, navbar)
- **Dynamic Dropdowns**: AJAX fetch for dependent selects (e.g. warehouse/shelf)
- **Validation**: $request->validate() in controller, @error di view
- **Pagination**: ->paginate() in controller, {{ $records->links() }} in view
- **Action Buttons**: Conditional via @can (authorization)

---

## 7. BACKEND REKABENTUK (Backend Design)

- **Controllers**: CRUD, workflow logic, validation, authorization checks
- **Models**: Typed properties, $fillable, relationship methods (hasMany, belongsTo)
- **Policies**: Authorization logic, registered in AuthServiceProvider
- **Middleware**: Auth, role-based, audit trail logging
- **Jobs & Queues**: Background tasks (notification, emails), queueable jobs, php artisan queue:work
- **Notifications**: via mail and database, InvoicePaid example
- **Audit Trail**: Owen-it/laravel-auditing integration for all critical changes

---

## 8. INTEGRASI SISTEM (System Integration)

- **Internal**: RESTful API endpoints, model relationships, event listeners
- **External**: LDAP/SSO for authentication, SMTP for email, legacy system data import via CSV/API
- **Dynamic Data**: HTTP client (Http::get()), external API integration, scheduled imports

---

## 9. KESELAMATAN SISTEM (System Security)

- **Authentication**: Breeze, password hashing, SSO/LDAP
- **Authorization**: Role-based, policies, @can directive
- **CSRF Protection**: All forms, @csrf in Blade
- **Input Validation**: Form Request, $request->validate()
- **Data Encryption**: For sensitive data (at rest, in transit)
- **Audit Trail**: Logging all critical operations for compliance

---

## 10. KAWALAN KUALITI (Quality Control — ISO 9001)

- **Peer review**: All code via pull requests, clear commit messages
- **Unit & Feature Testing**: php artisan test, factory & seeder for test data
- **Continuous Integration**: Composer update, npm run dev, regular dependency checks
- **Documentation**: Up-to-date code comments, docblocks, user & admin manuals
- **Monitoring**: storage/logs/laravel.log, exception handling, error display

---

## 11. PENYENGGARAAN & DEPLOYMENT (Maintenance & Deployment)

- **Deployment**: php artisan migrate, config:cache, route:cache, view:cache, optimize
- **Maintenance Mode**: php artisan down/up for safe updates
- **Backup**: Automated DB backup, restore/rollback procedures
- **Update**: Composer update, npm update, dependency management

---

## 12. PENUTUP

Dokumentasi ini menjadi rujukan rasmi bagi pembangunan, audit, dan penambahbaikan sistem Helpdesk & ICT Asset Loan BPM MOTAC. Semua komponen direka untuk skalabiliti, keselamatan, dan kualiti mengikut piawaian **IEEE 1016** (software design), **ISO/IEC/IEEE 2651x series** (software/documentation engineering), **ISO 9001** (quality management), dan **ISO/IEC/IEEE 12207** (software lifecycle).

---

## Glosari & Rujukan (Glossary & References)

Sila rujuk **[GLOSSARY.md]** untuk istilah teknikal seperti:

- **Rekabentuk Teknikal (Technical Design)**: Spesifikasi terperinci senibina dan komponen sistem
- **MVC (Model-View-Controller)**: Pola senibina pemisahan logik aplikasi
- **RESTful API**: Application Programming Interface mengikut prinsip REST
- **IEEE 1016**: Piawaian rekabentuk perisian
- **ISO 9001**: Piawaian pengurusan kualiti
- **ISO/IEC/IEEE 2651x**: Siri piawaian kejuruteraan perisian dan dokumentasi

**Dokumen Rujukan:**

- **D00_SYSTEM_OVERVIEW.md** - Gambaran keseluruhan sistem
- **D01_SYSTEM_DEVELOPMENT_PLAN.md** - Pelan pembangunan sistem
- **D04_SOFTWARE_DESIGN_DOCUMENT.md** - Rekabentuk perisian (high-level)
- **D07_SYSTEM_INTEGRATION_PLAN.md** - Pelan integrasi sistem
- **D08_SYSTEM_INTEGRATION_SPECIFICATION.md** - Spesifikasi integrasi sistem
- **D09_DATABASE_DOCUMENTATION.md** - Dokumentasi pangkalan data
- **D10_SOURCE_CODE_DOCUMENTATION.md** - Dokumentasi kod sumber

---

## Lampiran (Appendices)

### A. Diagram Senibina Sistem (System Architecture Diagrams)

Rujuk Seksyen 3 untuk diagram senibina lengkap termasuk deployment diagram dan component diagram.

### B. Spesifikasi Modul Terperinci (Detailed Module Specifications)

Rujuk Seksyen 4 untuk spesifikasi lengkap setiap modul sistem.

### C. ERD & Database Schema (Entity Relationship Diagram & Schema)

Rujuk **D09_DATABASE_DOCUMENTATION.md** untuk ERD lengkap dan definisi jadual.

### D. API Specification & Endpoints

Rujuk Seksyen 7 untuk spesifikasi RESTful API dan endpoint dokumentasi.

### E. Security Architecture & Controls

Rujuk Seksyen 9 untuk senibina keselamatan dan kawalan terperinci.

---

**Dokumen ini mematuhi piawaian IEEE 1016:2009 (Software Design), ISO/IEC/IEEE 26512:2018 (Software User Documentation), ISO 9001:2015 (Quality Management Systems), dan ISO/IEC/IEEE 12207:2017 (Software Lifecycle Processes).**
