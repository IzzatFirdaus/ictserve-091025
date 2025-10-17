# Dokumen Rekabentuk Perisian (Software Design Document - SDD)

**Sistem Helpdesk & ICT Asset Loan MOTAC BPM**  
**Versi:** 2.0.0 (SemVer)  
**Tarikh Kemaskini:** 17 Oktober 2025  
**Status:** Aktif  
**Klasifikasi:** Terhad - Dalaman MOTAC  
**Penulis:** Pasukan Pembangunan BPM MOTAC  
**Standard Rujukan:** IEEE 1016

---

## Maklumat Dokumen (Document Information)

| Atribut                | Nilai                                    |
|------------------------|------------------------------------------|
| **Versi**              | 2.0.0                                    |
| **Tarikh Kemaskini**   | 17 Oktober 2025                          |
| **Status**             | Aktif                                    |
| **Klasifikasi**        | Terhad - Dalaman MOTAC                   |
| **Pematuhi**           | IEEE 1016                                |
| **Bahasa**             | Bahasa Melayu (utama), English (teknikal)|

---

## Sejarah Perubahan (Changelog)

| Versi  | Tarikh          | Perubahan                                      | Penulis       |
|--------|-----------------|------------------------------------------------|---------------|
| 1.0.0  | September 2025  | Versi awal dokumen rekabentuk perisian         | Pasukan BPM   |
| 2.0.0  | 17 Oktober 2025 | Penyeragaman mengikut D00-D14, SemVer, cross-reference, tambah rujukan dokumen | Pasukan BPM   |

---

## Rujukan Dokumen Berkaitan (Related Document References)

- **[D00_SYSTEM_OVERVIEW.md]** - Ringkasan Sistem
- **[D01_SYSTEM_DEVELOPMENT_PLAN.md]** - Pelan Pembangunan Sistem
- **[D02_BUSINESS_REQUIREMENTS_SPECIFICATION.md]** - Spesifikasi Keperluan Perniagaan
- **[D03_SOFTWARE_REQUIREMENTS_SPECIFICATION.md]** - Spesifikasi Keperluan Perisian (sumber keperluan)
- **[D09_DATABASE_DOCUMENTATION.md]** - Dokumentasi Pangkalan Data (ERD & schema)
- **[D10_SOURCE_CODE_DOCUMENTATION.md]** - Dokumentasi Kod Sumber
- **[D11_TECHNICAL_DESIGN_DOCUMENTATION.md]** - Dokumentasi Rekabentuk Teknikal (komprehensif)
- **[D12_UI_UX_DESIGN_GUIDE.md]** - Panduan Rekabentuk UI/UX
- **[GLOSSARY.md]** - Glosari Istilah Sistem

---

## 1. TUJUAN DOKUMEN (Purpose)

Dokumen ini memberi spesifikasi rekabentuk perisian (software design specifications) untuk sistem **Helpdesk & ICT Asset Loan** berasaskan Laravel 12, untuk Bahagian Pengurusan Maklumat (BPM), MOTAC. Ia membimbing pembangunan dan implementasi sistem mengikut piawaian **IEEE 1016** untuk software design descriptions, menterjemahkan keperluan dari **[D03_SOFTWARE_REQUIREMENTS_SPECIFICATION.md]** kepada rekabentuk teknikal yang boleh dilaksanakan.

---

## 2. SKOP REKABENTUK (Design Scope)

- Modul utama: Helpdesk Ticketing, ICT Asset Loan, Inventory, Authentication, Reporting, Audit Trail.
- Pengguna: Staf MOTAC, Pegawai BPM, Ketua Bahagian, Admin BPM.
- Platform: Web dalaman (intranet), Laravel 12, MySQL DB.

---

## 3. SENIBINA SISTEM (System Architecture)

### 3.1. Architectural Pattern: MVC (Model-View-Controller)

- **Model**: Eloquent ORM untuk pengurusan data (Inventori, Tiket, Users, Loans).
- **View**: Blade templating, Bootstrap responsive.
- **Controller**: Logic untuk request handling, validation, dan access control.

### 3.2. Layered Components

- **Presentation Layer**: Blade views, Bootstrap, StartBootstrap SB Admin template.
- **Application Layer**: Controllers, policies, middleware (role-based access, authentication).
- **Data Layer**: Eloquent models, migrations, factories, seeders.
- **Integration Layer**: Notification, queue jobs, audit logging, external API (if needed).

### 3.3. Deployment Diagram

- User (Browser) → Laravel Web Server → MySQL Database
- Queue Worker (php artisan queue:work) for background jobs/notifications.

---

## 4. REKABENTUK MODUL (Module Design)

### 4.1. Helpdesk Ticketing

- **Entities**: Ticket, User, Division, Category, Status, Communication Log.
- **Workflow**:
  - User submits ticket (form validation, required fields).
  - Controller processes & stores ticket.
  - BPM admin assigns ticket (controller logic, status update).
  - Technician updates status, adds communication logs.
  - Notification sent via email/database.
  - Ticket can be linked to asset (for hardware issues).

### 4.2. ICT Asset Loan

- **Entities**: Loan, Asset, User, Division, Approval, Status, Check-out/Check-in, Accessories.
- **Workflow**:
  - User submits loan request (form, dynamic dropdowns for asset).
  - Approval workflow (Ketua Bahagian, BPM).
  - Asset status changes: Available → Loaned → Returned.
  - BPM logs issuance & return, checks accessories.
  - Reminder notification (due date, overdue).
  - Audit trail for each transaction.

### 4.3. Inventory Management

- **Entities**: Asset, Brand, Model, Serial/Tag, Accessories.
- **Features**:
  - CRUD (Create, Read, Update, Delete) via InventoryController.
  - Mass assignment protection ($fillable).
  - Soft deletes (trait, migration).
  - Relationships (One-to-Many: Asset-Loan, Asset-User).

### 4.4. Authentication & Authorization

- **Features**:
  - Breeze login, registration, password reset.
  - Middleware: CheckRoleMiddleware.
  - Policies: InventoryPolicy, LoanPolicy, TicketPolicy.
  - Role-based access: Staff, Technician, Admin, Approver.

### 4.5. Reporting & Dashboard

- **Features**:
  - Dashboard: ticket summary, asset status, KPI.
  - Detailed reports: most frequent issues, overdue assets, technician performance.
  - Exportable data (CSV, PDF).

### 4.6. Audit Trail

- **Features**:
  - owen-it/laravel-auditing integration.
  - All create/update/delete actions logged.
  - Admin can view audit logs.

---

## 5. REKABENTUK PANGKALAN DATA (Database Design)

### 5.1. Entity-Relationship Diagram (ERD) — High Level

- **Users** (id, name, email, role, division_id)
- **Tickets** (id, user_id, category_id, status, description, asset_id, created_at)
- **Assets** (id, name, model, tag_id, status, accessories, created_at)
- **Loans** (id, user_id, asset_id, start_date, end_date, status, approval_by, accessories, created_at)
- **Divisions** (id, name)
- **AuditLogs** (id, auditable_type, auditable_id, event, old_values, new_values, user_id, created_at)

### 5.2. Database Fields

- Use foreignId for relations, string/integer/decimal/text for fields.
- Add softDeletes to relevant tables.

---

## 6. REKABENTUK ANTARA MUKA (Interface Design)

### 6.1. Web UI

- **Blade Templating**: All forms & tables.
- **SB Admin Bootstrap**: Layout, navbar, sidebar, footer.
- **Forms**: Validation, conditional fields (e.g. asset id shown for hardware complaints).
- **Dropdowns**: Dynamic (AJAX) for division, asset selection.
- **Error Display**: @error directive in Blade.

### 6.2. User Experience (UX)

- Responsive, mobile-friendly.
- Clear separation: staff, technician, admin views.
- Action buttons only shown after declaration (Perakuan).
- Pagination for long lists.

---

## 7. REKABENTUK INTEGRASI (Integration Design)

- **Notifications**: Laravel Notification system (mail, database).
- **Queue Jobs**: Background tasks (reminders, bulk email).
- **External API**: Http client for any integrations.
- **Audit Logging**: owen-it/laravel-auditing.
- **LDAP Integration**: Option for user authentication (if required).

---

## 8. REKABENTUK KESELAMATAN (Security Design)

- **Authentication**: Breeze, password hashing.
- **Authorization**: Role & policy checks.
- **Validation**: $request->validate(), Form Request classes.
- **CSRF Protection**: Enabled in all forms.
- **Input Sanitization**: Use Laravel’s built-in methods.

---

## 9. REKABENTUK PENYENGGARAAN & PEMANTAUAN (Maintenance & Monitoring Design)

- **Maintenance Mode**: php artisan down/up.
- **Logging**: storage/logs/laravel.log, audit log.
- **Backup**: Scheduled DB backups.
- **Exception Handling**: Try-catch, error pages.

---

## 10. REKABENTUK UJIAN (Testing Design)

- **Unit Testing**: Models, controllers (php artisan test).
- **Feature Testing**: Full workflows (CRUD, loan approval).
- **User Acceptance Testing (UAT)**: BPM & selected staff.

---

## 11. REKABENTUK PENGOPTIMUMAN (Optimization Design)

- **Caching**: php artisan config:cache, route:cache, view:cache, optimize.
- **Pagination**: Eloquent paginate(), Bootstrap links.
- **Eager Loading**: with() for related models.
- **Performance Monitoring**: Use Laravel Telescope if available.

---

## 12. PENUTUP

Dokumen rekabentuk ini menjadi rujukan utama pembangunan **Sistem Helpdesk & ICT Asset Loan BPM MOTAC**. Semua modul, antara muka, aliran data dan keselamatan direka untuk memenuhi keperluan BPM dan pengguna sistem secara efisien, scalable, dan selamat, mengikut standard IEEE 1016.

---
