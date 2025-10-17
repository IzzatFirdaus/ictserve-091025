---
applyTo: '**'
---

# Contributing Instructions

**Purpose:**
Defines contribution workflow, PR/code review requirements for ICTServe.

## Mandatory Rules
- Fork and branch from `develop`.
- Use descriptive branch names (e.g., `feature/xyz`, `bugfix/abc`).
- All changes via PR; no direct pushes to `main` or `develop`.
- PRs must reference related issues and documentation (D00~D14).
- Code review required before merge.
- Run `php artisan test` and `npm run build` before PR.

## Step-by-Step Workflow
1. Fork repo, create feature branch.
2. Make changes, commit with clear messages.
3. Run tests and build assets.
4. Open PR, fill template, link issues/docs.
5. Address review comments, update PR.
6. Merge after approval.

## Examples
- Branch: `feature/department-crud`
- PR: Add Department CRUD (refs D03, closes #12)

## Cross-References
- See `copilot.instructions.md`, `testing.instructions.md`, `model-conventions.instructions.md`.
