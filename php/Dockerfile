FROM php:8.3-fpm

RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip libonig-dev libxml2-dev libicu-dev git curl \
    && docker-php-ext-install pdo pdo_mysql mbstring zip intl

RUN docker-php-ext-install mysqli pdo pdo_mysql

WORKDIR /var/www/html

# Instala o Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
