FROM php:8.0-fpm

RUN apt-get update && apt-get install -y libpq-dev libicu-dev ssh lsof mariadb-client libpng-dev libjpeg-dev libwebp-dev libfreetype6-dev libjpeg62-turbo-dev libzip-dev zip libxml2-dev libxslt1-dev \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-install soap \
    && docker-php-ext-configure gd --with-jpeg --with-webp \
    && docker-php-ext-install gd \
    && docker-php-ext-configure xsl \
    && docker-php-ext-install xsl \
    && docker-php-ext-install zip

WORKDIR /var/www
