# iDocs Block Theme

A modern WordPress block theme for [International Documents Canada](https://www.idocscanada.ca).

## Requirements

- WordPress 6.4+
- PHP 7.4+
- Node.js v22 (see `.nvmrc`)
- Composer

## Setup

```bash
nvm use
npm install
composer install
```

## Development

Start all watchers (CSS + JS):

```bash
npm start
```

Build all assets for production:

```bash
npm run build
```

### Available Scripts

| Script | Description |
| --- | --- |
| `npm start` | Watch all source files for changes |
| `npm run build` | Clean and compile all assets |
| `npm run build:css` | Compile main stylesheet |
| `npm run build:editor` | Compile editor stylesheet |
| `npm run build:blocks` | Compile block-specific styles |
| `npm run build:js` | Bundle JavaScript with esbuild |
| `npm run clean` | Remove compiled CSS and JS |

### PHP Tools

| Script | Description |
| --- | --- |
| `composer lint` | Run PHPCS code standards check |
| `composer format` | Auto-fix code standards with PHPCBF |

## Theme Structure

```
idc-block-theme/
├── assets/              # Compiled assets (do not edit directly)
│   ├── css/             # Compiled stylesheets
│   │   └── blocks/      # Per-block styles (auto-registered)
│   ├── fonts/           # Web fonts (Inter)
│   ├── images/          # Static images
│   └── js/              # Bundled JavaScript
├── classes/             # PHP classes (PSR-4 autoloaded)
├── parts/               # Template parts (header, footer)
├── src/                 # Source files
│   ├── css/
│   │   ├── tokens.css   # Design tokens
│   │   ├── base.css     # Base styles
│   │   ├── layout.css   # Layout utilities
│   │   ├── utilities.css
│   │   └── blocks/      # Block-specific source styles
│   └── js/              # JavaScript source
├── styles/              # Block style variations
│   └── buttons/         # Button variants (e.g., secondary)
├── templates/           # Full page templates
├── theme.json           # Global settings and styles
├── functions.php        # Theme initialization
└── style.css            # Theme metadata
```

## Build Pipeline

- **CSS:** PostCSS with `postcss-import` and `cssnano` for minification
- **JS:** esbuild for bundling and minification
- **Fonts:** Inter (woff2, weights 200/300/600)
- **PHP:** Composer autoloading with WPCS for linting

## Templates

- `index.html` — Default/post template
- `page.html` — Page template

## Template Parts

- `header.html` — Sticky site header with logo, title, and navigation
- `footer.html` — Site footer with CTA section and multi-column layout

## Color Palette

| Name | Hex |
| --- | --- |
| Primary Dark | `#14253D` |
| Primary | `#1F3A5B` |
| Primary Light | `#2862A1` |
| Primary Pale | `#C7DAF0` |
| Secondary Dark | `#796155` |
| Secondary Medium | `#C6BAAB` |
| Secondary | `#DCD6CC` |
| Secondary Light | `#EEEBE6` |
| Secondary Pale | `#F5F3F0` |
| Black | `#191919` |
| Grey Dark | `#4F4F4F` |
| Grey | `#6D6D6D` |
| Grey Light | `#D1D1D1` |
| White | `#FFFFFF` |

## Typography

- **Headings:** Playfair Display (serif)
- **Body:** Inter (sans-serif), weight 300, line-height 1.6
- **Fluid typography** enabled with 10 custom font sizes

## License

GPL-2.0-or-later
