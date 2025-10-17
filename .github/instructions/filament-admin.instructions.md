---
applyTo: '**'
---

# Filament Admin Instructions

**Purpose:**
Setup and conventions for Filament admin panel, resources, pages, widgets.

## Mandatory Rules
- Filament panel at `/admin`, configured in `app/Providers/Filament/AdminPanelProvider.php`.
- Use Amber primary color, private file visibility.
- Resources/pages/widgets in `app/Filament/{Resources,Pages,Widgets}`.
- Actions extend `Filament\Actions\Action`.
- Use `->relationship('relationName')` for relation fields.

## Step-by-Step Workflow
1. Add resources/pages/widgets in correct folders.
2. Configure panel in `AdminPanelProvider.php`.
3. Use Filament discovery for new files.
4. Test admin features with `Livewire::test`.

## Examples
- Resource: `app/Filament/Resources/PositionResource.php`
- Widget: `app/Filament/Widgets/StatsOverviewWidget.php`

## Cross-References
- See `copilot.instructions.md`, `model-conventions.instructions.md`, `livewire.instructions.md`.
