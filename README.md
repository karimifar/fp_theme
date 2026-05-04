# Father's Playbook WordPress Theme

A custom **WordPress theme** for the Father's Playbook app website, built on the Underscores (`_s`) starter theme. Provides page templates for the marketing site's home, features, and about sections.

## Overview

This theme powers the WordPress-hosted version of the Father's Playbook web presence — a health resource for expectant and new fathers developed in partnership with UT Health Austin. The theme extends the Underscores starter with custom page templates, section-specific CSS, and JavaScript interactions tailored to the app marketing layout.

## Custom Page Templates

| Template | Purpose |
|----------|---------|
| `page-home.php` | Hero section with app CTA and feature highlights |
| `page-features.php` | Animated feature showcase with scroll interactions |
| `page-banner.php` | Promotional banner page |

## Tech Stack

- **WordPress** — CMS platform
- **PHP** — template logic
- **Underscores (`_s`)** — starter theme base
- **Vanilla JavaScript / jQuery** — scroll-triggered animations (`assets/js/page-features.js`, `page-home.js`)
- **Custom CSS** — section-specific stylesheets with responsive breakpoints

## Installation

1. Clone or download this repo into your WordPress theme directory: `wp-content/themes/fp_theme/`
2. Activate the theme in **Appearance → Themes** in the WordPress admin
3. Assign page templates via the **Page Attributes** panel when editing pages

## Related

Companion to the [fathersplaybook](https://github.com/karimifar/fathersplaybook) static marketing site.
