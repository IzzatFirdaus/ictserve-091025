---
applyTo: '**'
---

# Automation Instructions

**Purpose:**
Custom scripts, GitHub Actions, and boost workflow notes for repo automation.

## Mandatory Rules
- Use GitHub Actions in `.github/workflows` for CI/CD.
- Use `php artisan boost:update` for system updates.
- Document custom scripts in repo root or `scripts/`.
- Reference automation in PR templates and documentation.

## Step-by-Step Workflow
1. Add workflows in `.github/workflows`.
2. Use boost commands for updates.
3. Document automation scripts.
4. Reference automation in contribution docs.

## Examples
- Workflow: `.github/workflows/ci.yml`
- Script: `php artisan boost:update`

## Cross-References
- See `contributing.instructions.md`, `copilot.instructions.md`, `frontend.instructions.md`.
