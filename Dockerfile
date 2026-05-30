FROM php:8.3-fpm

RUN apt-get update && apt-get install -y \
    git unzip zip libzip-dev libicu-dev \
    && docker-php-ext-install pdo pdo_mysql intl zip

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

RUN composer install --no-dev --optimize-autoloader

CMD ["php-fpm"]
