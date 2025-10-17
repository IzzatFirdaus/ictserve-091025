---
applyTo: '**'
---
# Copilot Instructions

**Purpose:**
Repo-specific rules for AI agents and contributors. Defines coding conventions, guardrails, and automation standards for ICTServe (Laravel 12, Livewire 3, Filament 4).

## Mandatory Rules

- Follow Laravel 12, Livewire 3, Filament 4, Tailwind, Vite, PHPUnit stack conventions.
- Entry points: `bootstrap/app.php`, `bootstrap/providers.php`.
- Admin via Filament (`app/Providers/Filament/AdminPanelProvider.php`).
- Models: Use `HasFactory`, `SoftDeletes`, `OwenIt\Auditing\Auditable`, `$fillable`, `casts()` method.
- Authorization: Use Spatie roles, policies/gates.
- Filament: Structure via discovery, actions extend `Filament\Actions\Action`.
- Livewire/Volt: Components in `app/Livewire`.
- Dev: `composer run dev`, `npm run dev`, `php artisan test`.
- Formatting: `vendor/bin/pint --dirty`.

## Step-by-Step Workflow

1. Scaffold with `php artisan make:*`.
2. Place new code in existing folders only.
3. For Filament CRUD, use `app/Filament/Resources/...`.
4. For models, update `$fillable`, `casts()`, relationships.
5. Use policies/gates for authorization.

## Examples

- Model: `app/Models/User.php` uses `HasFactory`, `SoftDeletes`, `Auditable`, `HasRoles`.
- Filament resource: `app/Filament/Resources/DepartmentResource.php`.

## Cross-References

- See `contributing.instructions.md`, `model-conventions.instructions.md`, `filament-admin.instructions.md`.
