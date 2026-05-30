# ==========================================
# STAGE 1: Build Frontend Assets (Vite)
# ==========================================
FROM node:22 AS frontend

WORKDIR /app

COPY package*.json ./

RUN npm install

COPY . .

RUN npm run build


# ==========================================
# STAGE 2: Build Production PHP-FPM Image
# ==========================================
FROM php:8.4-fpm

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    libzip-dev \
    libicu-dev \
    && docker-php-ext-install pdo pdo_mysql intl zip

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

COPY --from=frontend /app/public/build ./public/build

# Inject custom PHP-FPM pool configuration to raise max_children to 50
COPY www.conf /usr/local/etc/php-fpm.d/www.conf

RUN composer install --no-dev --optimize-autoloader

RUN chown -R www-data:www-data storage bootstrap/cache

EXPOSE 9000

CMD ["php-fpm"]
CMD ["php-fpm"]
