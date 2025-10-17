# Stylelint v16+ and Tailwind CSS: Known Issues

**Summary:**
Stylelint v16+ is not fully compatible with Tailwind CSS. You will see many unknown rule errors and warnings for Tailwind-specific at-rules (e.g., `@tailwind`, `@apply`, `@layer`, `@screen`) and config rules. These errors do not affect the actual CSS output and can be safely ignored for Tailwind projects.

## Common Errors (Safe to Ignore)

- Unknown rule errors for Tailwind at-rules: `@tailwind`, `@apply`, `@layer`, `@screen`, etc.
- Unknown rule errors for config rules: `indentation`, `linebreaks`, `at-rule-*`, `block-*`, etc.

## What to Do

- Focus on real browser compatibility and deprecation issues reported by stylelint.
- Ignore unknown rule errors related to Tailwind or config rules.
- For full compatibility, consider using stylelint v15 or earlier, or use only the most basic linting rules.

**References:**

- [stylelint issue #7025](https://github.com/stylelint/stylelint/issues/7025)
- [Tailwind CSS + Stylelint compatibility](https://github.com/tailwindlabs/tailwindcss/discussions/9602)

---
_Last updated: 2024-06-11_
