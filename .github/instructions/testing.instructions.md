---
applyTo: '**'
---
# Testing Instructions

**Purpose:**
Testing standards for PHPUnit, Livewire/Volt, and Filament features.

## Mandatory Rules
- Use PHPUnit (`php artisan test`).
- Write feature tests in `tests/Feature`, unit tests in `tests/Unit`.
- For Livewire/Filament, use `Livewire::test` or `Volt::test`.
- Authenticate users in tests as needed.
- Reference D03/D10 for requirements and documentation.

## Step-by-Step Workflow
1. Write tests in correct folders.
2. Use Laravel test helpers.
3. Run tests before PRs.
4. Fix all failures before merge.

## Examples
- Feature test: `tests/Feature/UserCrudTest.php`
- Livewire test: `Livewire::test(UserTable::class)`

## Cross-References
- See `contributing.instructions.md`, `livewire.instructions.md`, `copilot.instructions.md`.
