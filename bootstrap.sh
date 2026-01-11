#!/usr/bin/env bash
set -euo pipefail

APP_NAME=${APP_NAME:-laravel-app}
LARAVEL_VERSION=${LARAVEL_VERSION:-"^11.0"}

if [ -f artisan ]; then
  echo "❌ Laravel already initialized in this directory."
  exit 1
fi

echo "🚀 Bootstrapping Laravel project: ${APP_NAME}"
echo "📦 Laravel version: ${LARAVEL_VERSION}"

# --------------------------------------------------
# 1. Create Laravel project using Composer container
# --------------------------------------------------
docker run --rm \
  -u "$(id -u):$(id -g)" \
  -v "$(pwd):/app" \
  -w /app \
  composer:2 \
  create-project laravel/laravel . "${LARAVEL_VERSION}"

# --------------------------------------------------
# 2. Environment setup
# --------------------------------------------------
cp -n .env.example .env

# --------------------------------------------------
# 3. Generate application key (inside container)
# --------------------------------------------------
docker run --rm \
  -u "$(id -u):$(id -g)" \
  -v "$(pwd):/app" \
  -w /app \
  php:8.3-cli-alpine \
  php artisan key:generate

# --------------------------------------------------
# 4. Create basic Docker structure
# --------------------------------------------------
mkdir -p docker/php docker/nginx docker/supervisor

cat > docker/php/Dockerfile <<'EOF'
FROM php:8.3-fpm-alpine

WORKDIR /var/www/html

RUN apk add --no-cache \
  bash curl git supervisor \
  icu-dev oniguruma-dev libzip-dev \
  libpng-dev libjpeg-turbo-dev freetype-dev

RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
 && docker-php-ext-install pdo pdo_mysql mbstring zip intl gd opcache

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
COPY . .

RUN chown -R www-data:www-data /var/www/html \
 && chmod -R 775 storage bootstrap/cache

EXPOSE 9000
CMD ["php-fpm"]
EOF

# --------------------------------------------------
# 5. Docker Compose (local)
# --------------------------------------------------
cat > docker-compose.yml <<'EOF'
version: "3.9"

services:
  app:
    build:
      context: .
      dockerfile: docker/php/Dockerfile
    container_name: laravel_app
    env_file: .env
    volumes:
      - .:/var/www/html
    ports:
      - "9000:9000"
EOF

# --------------------------------------------------
# 6. Git initialization
# --------------------------------------------------
if [ ! -d .git ]; then
  git init
  git add .
  git commit -m "Initial Laravel scaffold (container-ready)"
fi

# --------------------------------------------------
# 7. Final output
# --------------------------------------------------
echo "✅ Laravel bootstrap complete"
echo ""
echo "Next steps:"
echo "  docker compose up -d --build"
echo "  Visit app via reverse proxy or php-fpm upstream"

