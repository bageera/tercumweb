# Tercum LLC — Corporate Website

The official website for Tercum LLC, an Orlando, Florida-based services firm
supporting commercial, government, environmental, and development-focused
organizations with coordinated logistics, maritime, procurement,
architectural, and urban development support.

Site: [tercumllc.com](https://tercumllc.com)

## Tech Stack

- **Backend:** Laravel 12 (PHP 8.4)
- **Frontend:** Tailwind CSS 4, Vite 7, Bootstrap 5
- **Database:** SQLite (dev), MySQL/PostgreSQL (prod)
- **Container:** Docker Compose (PHP-FPM Alpine)

## Project Structure

```
resources/views/
  pages/          Page templates (home, about, services, contact)
  partials/       Reusable partials (header, footer, services, CTA)
  layouts/        Base layout (app.blade.php)
public/
  assets/transland/   Images, CSS, fonts
  build/              Compiled Vite assets (generated)
```

## Getting Started

### Prerequisites

- PHP 8.4+
- Composer
- Node.js + npm
- Docker (optional, for containerized dev)

### Installation

```bash
make install          # composer install + npm install
cp .env.example .env  # configure environment
php artisan key:generate
php artisan migrate --force
```

### Development

```bash
make dev              # start Vite dev server
make up               # start Docker containers
make logs             # tail container logs
make shell            # shell into app container
```

### Build & Test

```bash
make build            # compile frontend assets (Vite production build)
make test             # run PHPUnit test suite
make fresh            # migrate:fresh --seed
```

### Deployment

```bash
make optimize         # cache config, routes, events, views
make clean            # clear all cached artifacts
```

## Makefile Targets

Run `make` or `make help` to see all available targets:

| Target    | Description                          |
|-----------|--------------------------------------|
| `up`      | Start Docker containers              |
| `down`    | Stop Docker containers               |
| `rebuild` | Rebuild and start Docker containers  |
| `logs`    | Tail app logs                        |
| `shell`   | Shell into the app container         |
| `install` | Install PHP and JS dependencies      |
| `build`   | Build frontend assets (Vite)         |
| `dev`     | Start Vite dev server                |
| `test`    | Run the test suite                   |
| `fresh`   | Migrate fresh and seed               |
| `optimize`| Cache config, routes, events, views |
| `clean`   | Clear all cached artifacts           |

The Makefile auto-detects host PHP/Composer and falls back to Docker
when not available locally.

## Capability Statement

The public root contains `tercum_capability_statement_uploaded_layout_filled.pdf`
with verified company data including UEI, CAGE, NAICS codes, and ISO
certifications. Services page content is sourced from this document.

## License

MIT — See [LICENSE](LICENSE) for details.