# ICTServe (Laravel 12, Livewire 3, Filament 4) – Working rules for AI agents

Use these repo-specific guardrails to be productive immediately. Keep answers focused, concrete, and aligned with this codebase.

## Quick context
- Stack: Laravel 12 (PHP 8.2), Livewire 3 + Volt, Filament 4 admin, Tailwind 3 + Vite.
- Entry points: `bootstrap/app.php` (routing, middleware, exceptions) and `bootstrap/providers.php` (service providers).
- Admin panel: Filament panel at `/admin`, configured in `app/Providers/Filament/AdminPanelProvider.php` with `->login()`, discovery for Resources/Pages/Widgets, Amber primary color.

## Architecture hotspots
- Public site is route-views only: `routes/web.php` (e.g., `Route::view('/', 'welcome')`, `services`, `contact`).
- Admin SDUI via Filament 4. Files discover under `app/Filament/{Resources,Pages,Widgets}`.
- Core domain models in `app/Models`: `User`, `Department`, `Position`, `Grade`.
  - Patterns: SoftDeletes + Auditing on org models; Spatie roles on `User`.
  - Examples: `User::boot()` sets `uuid` with `Str::uuid()`; `Department->users()` is `hasMany`; use `casts()` method (not `$casts`).

## Conventions to follow
- Laravel 12 streamlined structure: no console kernel; routes via `bootstrap/app.php`; providers via `bootstrap/providers.php`.
- Models: include `HasFactory`, `SoftDeletes`, `OwenIt\Auditing\Auditable` (implements `Auditable`); define `$fillable`; implement `protected function casts(): array`.
- Authorization: `App\Models\User` uses `Spatie\Permission\Traits\HasRoles`; favor policies/gates over inline checks.
- Filament v4: structure via discovery; actions extend `Filament\Actions\Action`; system route prefix is `filament` (`config/filament.php`); default file visibility is private.
- Livewire/Volt: components under `app/Livewire`; `App\Providers\VoltServiceProvider` enabled.

## Dev workflows
- Full dev stack: `composer run dev` (serves app, runs queue:listen, streams logs via Pail, starts Vite dev).
- Assets: `npm run dev` (watch) / `npm run build` (prod). Vite inputs in `vite.config.js`.
- Tests: `php artisan test` (PHPUnit). For Livewire/Filament, use `Livewire::test(...)` or `Volt::test(...)` and authenticate where needed.
- Formatting: `vendor/bin/pint --dirty` (see `CLAUDE.md`). Optional insights: `vendor/bin/phpinsights` uses `config/insights.php`.

## Integration points
- Filament admin: `app/Providers/Filament/AdminPanelProvider.php` (middleware, pages/widgets, colors).
- Auditing: `owen-it/laravel-auditing` on models; changes tracked automatically.
- Permissions: `spatie/laravel-permission`; assign roles/permissions via `HasRoles` on `User`.

## Adding features
- Scaffold with `php artisan make:*` (models, migrations, Livewire, Filament). Keep to existing folders—do not add new top-level dirs.
- Filament CRUD: add under `app/Filament/Resources/...`; let discovery pick up. For relation fields, prefer `->relationship('relationName')`.
- Models: add `$fillable`, update `casts()`, add relationships with return types, include SoftDeletes/Auditing to match peers.

## Pointers
- Check: `AdminPanelProvider.php` (admin panel), `routes/web.php` + `bootstrap/app.php` (routing), models in `app/Models`, and frontend build in `vite.config.js`/`tailwind.config.js`.
- If guidance conflicts with code, prefer the code and align suggestions to it.
