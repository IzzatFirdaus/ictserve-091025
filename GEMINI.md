# GEMINI.md

This file provides specific instructions and context for the ICTServe project.

## Project Overview

- ICTServe is built with Laravel 12, Livewire 3 (Volt), Filament 4, Tailwind 3, and Vite.
- Admin panel is powered by Filament and configured in `app/Providers/Filament/AdminPanelProvider.php`.
- Core models: `User`, `Department`, `Position`, `Grade` (see `app/Models`).

## Key Conventions

- Models use `HasFactory`, `SoftDeletes`, and `OwenIt\Auditing\Auditable` traits.
- Use `$fillable` and implement `casts()` method for model attributes.
- Filament resources/pages/widgets are auto-discovered in `app/Filament/{Resources,Pages,Widgets}`.
- Livewire/Volt components are in `app/Livewire`.
- Assets: CSS in `resources/css/app.css`, JS in `resources/js/app.js`.
- Build assets with `npm run dev` (watch) or `npm run build` (production).

## Development Workflow

- Use `composer run dev` for full dev stack (serves app, runs queue, streams logs, starts Vite).
- Run tests with `php artisan test` (PHPUnit).
- Format code with `vendor/bin/pint --dirty`.

## Integration Points

- Filament admin: `app/Providers/Filament/AdminPanelProvider.php`.
- Auditing: `owen-it/laravel-auditing` on models.
- Permissions: `spatie/laravel-permission` on `User` model.

## Adding Features

- Scaffold with `php artisan make:*` (models, migrations, Livewire, Filament).
- Add Filament CRUD under `app/Filament/Resources`.
- Update models with `$fillable`, `casts()`, relationships, traits.

## References

- See `_reference/` for system documentation, requirements, and design guides.
- For automation, see `.github/instructions/automation.instructions.md`.
- For contributing, see `.github/instructions/contributing.instructions.md`.

---
This file is intended to provide quick context and instructions for developers working on ICTServe. For more details, refer to the documentation in `_reference/` and `.github/instructions/`.
