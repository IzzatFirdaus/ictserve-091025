---
applyTo: '**'
---
# Frontend Instructions

**Purpose:**
Asset workflow, CSS/JS conventions, build steps for Tailwind, Vite, and Laravel Mix.

## Mandatory Rules
- Use Tailwind 3, Vite for asset pipeline.
- CSS in `resources/css/app.css`, JS in `resources/js/app.js`.
- Build: `npm run dev` (watch), `npm run build` (prod).
- Configure in `vite.config.js`, `tailwind.config.js`.
- Use Blade views in `resources/views`.

## Step-by-Step Workflow
1. Edit assets in `resources/css` and `resources/js`.
2. Run build/watch commands for changes.
3. Reference assets in Blade views.
4. Fix stylelint errors as per `STYLELINT_TAILWIND_KNOWN_ISSUES.md`.

## Examples
- CSS: `resources/css/app.css`
- JS: `resources/js/app.js`
- Build: `npm run build`

## Cross-References
- See `copilot.instructions.md`, `testing.instructions.md`, `automation.instructions.md`.
