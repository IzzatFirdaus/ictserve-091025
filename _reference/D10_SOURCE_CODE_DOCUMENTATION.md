# Dokumentasi Kod Sumber (Source Code Documentation)

**Sistem Helpdesk & ICT Asset Loan BPM MOTAC**  
**Versi:** 2.0.0 (SemVer)  
**Tarikh Kemaskini:** 17 Oktober 2025  
**Status:** Aktif  
**Klasifikasi:** Terhad - Dalaman MOTAC  
**Penulis:** Pasukan Pembangunan BPM MOTAC  
**Standard Rujukan:** ISO/IEC/IEEE 5055, ISO/IEC/IEEE 25000 Series (SQuaRE), ISO/IEC/IEEE 12207

---

## Maklumat Dokumen (Document Information)

| Atribut                | Nilai                                    |
|------------------------|------------------------------------------|
| **Versi**              | 2.0.0                                    |
| **Tarikh Kemaskini**   | 17 Oktober 2025                          |
| **Status**             | Aktif                                    |
| **Klasifikasi**        | Terhad - Dalaman MOTAC                   |
| **Pematuhi**           | ISO/IEC/IEEE 5055, 25000 Series, 12207   |
| **Bahasa**             | Bahasa Melayu (utama), English (teknikal)|

---

## Sejarah Perubahan (Changelog)

| Versi  | Tarikh          | Perubahan                                      | Penulis       |
|--------|-----------------|------------------------------------------------|---------------|
| 1.0.0  | September 2025  | Versi awal dokumentasi kod sumber              | Pasukan BPM   |
| 2.0.0  | 17 Oktober 2025 | Penyeragaman mengikut D00-D14, SemVer, cross-reference | Pasukan BPM   |

---

## Rujukan Dokumen Berkaitan (Related Document References)

- **[D00_SYSTEM_OVERVIEW.md]** - Ringkasan Sistem
- **[D01_SYSTEM_DEVELOPMENT_PLAN.md]** - Pelan Pembangunan Sistem
- **[D04_SOFTWARE_DESIGN_DOCUMENT.md]** - Rekabentuk Perisian
- **[D11_TECHNICAL_DESIGN_DOCUMENTATION.md]** - Dokumentasi Rekabentuk Teknikal
- **[GLOSSARY.md]** - Glosari Istilah Sistem

---

## 1. TUJUAN DOKUMEN (Purpose)

Dokumen ini memberi penerangan struktur kod sumber, gaya penulisan, piawaian kualiti, dan kawalan perubahan bagi sistem **Helpdesk & ICT Asset Loan BPM MOTAC**, berpandukan piawaian **ISO/IEC/IEEE 5055** (software quality), **ISO/IEC/IEEE 25000 Series (SQuaRE)** (quality requirements and evaluation), dan **ISO/IEC/IEEE 12207** (software lifecycle processes).

---

## 2. SKOP (Scope)

- Semua kod sumber Laravel 12 (PHP), Blade views, JS, CSS, migration, seeder, factory, dan konfigurasi.
- Piawaian penulisan kod, komen, dokumentasi fungsi, dan kawalan versi.
- Penekanan pada maintainability, reliability, security, dan usability.

---

## 3. STRUKTUR KOD SUMBER (Source Code Structure)

### 3.1. Direktori Utama

| Folder/File                       | Fungsi/Kandungan                                       |
|-----------------------------------|--------------------------------------------------------|
| `app/Models/`                     | Definisi model Eloquent (User, Inventory, Asset, Loan) |
| `app/Http/Controllers/`           | Controller — logik aplikasi dan CRUD                   |
| `app/Policies/`                   | Policy autorisasi (contoh: InventoryPolicy)            |
| `app/Http/Middleware/`            | Middleware (auth, role, audit)                         |
| `app/Notifications/`              | Notifikasi custom                                      |
| `app/Jobs/`                       | Pengurusan queue jobs                                  |
| `resources/views/`                | Blade views — antaramuka pengguna                      |
| `database/migrations/`            | Migrations — skema DB                                  |
| `database/seeders/`               | Seeders — data permulaan/test                          |
| `database/factories/`             | Factories — data ujian                                 |
| `routes/web.php`                  | Definisi route aplikasi web                            |
| `routes/api.php`                  | Definisi route API                                     |
| `config/`                         | Konfigurasi sistem, queue, mail dsb                    |
| `.env`                            | Konfigurasi environment (DB, mail, queue)              |

---

## 4. PIAWAIAN PENULISAN KOD (Coding Standards)

### 4.1. PHP (Laravel)

- **PSR-12**: Pematuhan kepada standard PHP PSR-12.
- **Naming convention**: Model singular (Inventory), controller camel case (InventoryController), method camelCase.
- **Type hinting**: Gunakan type hinting (typed properties) untuk method dan class.
- **$fillable**: Semua model menggunakan protected $fillable untuk mass assignment.
- **Relationship**: hasMany(), belongsTo(), morphMany() jika perlu.
- **Error handling**: Validation via $request->validate(), try-catch untuk exception.

### 4.2. Blade

- **Extends/Includes**: Gunakan @extends, @include untuk layout dan partial.
- **Loop/Display**: @foreach, @if, {{ $variable }}.
- **Validation**: @error directive, display validation message.
- **Security**: Semua input menggunakan @csrf.

### 4.3. JavaScript

- **ES6**: Gunakan let/const, arrow function, fetch API.
- **Separation of concerns**: JS untuk interaktiviti dropdown, AJAX, dsb.  
- **Asset management**: Simpan JS dalam public/js, gunakan asset() helper.

### 4.4. Comments & Documentation

- **Docblock**: Semua fungsi/method ada docblock (/** ... */) dan parameter/type dijelaskan.
- **Inline comments**: Komen pada logik rumit atau edge case.
- **Class-level**: Setiap class/model/controller ada penerangan ringkas di atas kelas.
- **README**: Projek ada README untuk setup & usage.

---

## 5. KUALITI KOD (Code Quality Attributes — SQuaRE)

| Kualiti (ISO/IEC 25000) | Penjelasan/Penerapan                  |
|-------------------------|---------------------------------------|
| **Fungsionaliti**       | Semua fungsi utama diuji, kod modular |
| **Kebolehgunaan**       | UI konsisten, error jelas, form valid |
| **Kebolehpeliharaan**   | Kod mudah dibaca, diubah, modular     |
| **Kebolehpercayaan**    | Exception handling, audit trail, test |
| **Efisiensi**           | Query optimized, cache digunakan      |
| **Keselamatan**         | CSRF, XSS, validation, roles, audit   |

---

## 6. DOKUMENTASI FUNGSI UTAMA (Key Function Documentation)

### 6.1. Model

**Example: Inventory.php**

```php
/**
 * Model Inventory.
 * Menyimpan data inventori aset ICT.
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property int $qty
 * @property float $price
 * @property string $description
 */
class Inventory extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name', 'qty', 'price', 'description'];

    /**
     * Relationship: belongs to User
     */
    public function user() { return $this->belongsTo(User::class); }
}
```

### 6.2. Controller

**Example: InventoryController.php**

```php
/**
 * Controller untuk CRUD inventori.
 * Method utama: index(), create(), store(), show(), edit(), update(), destroy()
 */
class InventoryController extends Controller
{
    /**
     * Senarai inventori (pagination)
     */
    public function index() {
        $inventories = Inventory::with('user')->paginate(10);
        return view('inventory.index', compact('inventories'));
    }
    // ... other methods documented similarly
}
```

### 6.3. Policy

**InventoryPolicy.php**

```php
/**
 * Policy untuk autorisasi inventori.
 * Method: view(), update(), delete()
 */
public function update(User $user, Inventory $inventory) {
    // Hanya pemilik atau admin boleh update
    return $user->role === 'admin' || $user->id === $inventory->user_id;
}
```

---

## 7. UJIAN (Testing)

- Semua kod diuji dengan php artisan test (unit, feature).
- Test case ada komen menjelaskan tujuan ujian.
- Data ujian gunakan factory dan seeder.

---

## 8. KAWALAN VERSI & PERUBAHAN (Version & Change Control)

- GIT digunakan untuk kawalan versi.
- Branching: main/dev/feature.
- Commit message jelas (fix:..., feat:..., docs:...).
- Pull request mesti ada review dan test lulus sebelum merge.

---

## 9. PENUTUP

Dokumentasi ini memberi rujukan lengkap untuk pembangun, auditor, dan pentadbir sistem Helpdesk & ICT Asset Loan BPM MOTAC dalam memahami, mengurus, dan meningkatkan kualiti kod sumber mengikut piawaian antarabangsa **ISO/IEC/IEEE 5055** (software quality), **ISO/IEC/IEEE 25000 Series (SQuaRE)**, dan **ISO/IEC/IEEE 12207** (software lifecycle).

---

## Glosari & Rujukan (Glossary & References)

Sila rujuk **[GLOSSARY.md]** untuk istilah teknikal seperti:

- **Kod Sumber (Source Code)**: Teks kod program yang ditulis dalam bahasa pengaturcaraan
- **SQuaRE (Systems and Software Quality Requirements and Evaluation)**: Siri piawaian ISO/IEC 25000
- **Coding Standards**: Garis panduan penulisan kod yang konsisten
- **PSR-12**: PHP Standards Recommendation untuk gaya kod
- **ISO/IEC/IEEE 5055**: Piawaian kualiti perisian automatik
- **ISO/IEC/IEEE 25000**: Piawaian keperluan dan penilaian kualiti sistem/perisian

**Dokumen Rujukan:**

- **D00_SYSTEM_OVERVIEW.md** - Gambaran keseluruhan sistem
- **D01_SYSTEM_DEVELOPMENT_PLAN.md** - Pelan pembangunan sistem
- **D04_SOFTWARE_DESIGN_DOCUMENT.md** - Rekabentuk perisian
- **D11_TECHNICAL_DESIGN_DOCUMENTATION.md** - Rekabentuk teknikal terperinci

---

## Lampiran (Appendices)

### A. Contoh Dokumentasi Kod (Code Documentation Examples)

Rujuk Seksyen 6 untuk contoh dokumentasi fungsi dan kelas.

### B. Piawaian PSR-12 & Laravel Best Practices

- **PSR-12**: Extended Coding Style Guide (<https://www.php-fig.org/psr/psr-12/>)
- **Laravel Coding Standards**: Rujuk Laravel Documentation (<https://laravel.com/docs>)
- **PHP Stan Level**: Level 5 (strict code analysis)

### C. Metrik Kualiti Kod (Code Quality Metrics)

- **Cyclomatic Complexity**: Maksimum 10 per fungsi
- **Code Coverage**: Minimum 80% untuk critical paths
- **Technical Debt Ratio**: Maksimum 5%
- **Maintainability Index**: Minimum 70

### D. Checklist Code Review

Rujuk Seksyen 8 untuk proses kawalan perubahan kod.

---

**Dokumen ini mematuhi piawaian ISO/IEC/IEEE 5055:2021 (Software Quality), ISO/IEC 25000:2014 (SQuaRE), dan ISO/IEC/IEEE 12207:2017 (Software Lifecycle Processes).**
