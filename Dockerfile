# ==========================================
# STAGE 1: Build the Frontend Assets (Vite)
# ==========================================
FROM node:22 AS frontend

WORKDIR /app

# Copy dependency configurations first to leverage Docker layer caching
COPY package*.json ./

RUN npm install

# Copy the rest of the application files and build static assets
COPY . .
RUN npm run build

# ==========================================
# STAGE 2: Build the Production PHP-FPM Image
# ==========================================
FROM php:8.3-fpm

# Install system dependencies and PHP extensions required by Laravel
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    libzip-dev \
    libicu-dev \
    && docker-php-ext-install pdo pdo_mysql intl zip

# Pull the official Composer binary from the Composer image
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy the entire application code over to the PHP workspace
COPY . .

# Copy the compiled production assets from the frontend build stage
COPY --from=frontend /app/public/build ./public/build

# Install PHP production dependencies and optimize the autoloader map
RUN composer install --no-dev --optimize-autoloader

# Safely compile and cache Laravel configuration during the build phase.
# Mock variables ensure it boots cleanly without a live EKS database connection.
RUN DB_CONNECTION=mysql \
    APP_KEY=base64:wbppsWtDE/r9GFKAQtlf5TPDDl+nn3/MA6kL67+bePg= \
    php artisan config:cache

# Set strict production permissions for storage and caching layers
RUN chown -R www-data:www-data storage bootstrap/cache

EXPOSE 9000

CMD ["php-fpm"]
