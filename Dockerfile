FROM php:8.1-apache

WORKDIR /var/www/html

RUN a2enmod rewrite

RUN apt-get update -y && apt-get install -y\
    libicu-dev\
    libmariadb-dev\
    unzip zip\
    zlib1g-dev\
    libpng-dev\
    libjpeg-dev\
    libfreetype6-dev\
    libjpeg62-turbo-dev\
    libpng-dev\
    libonig-dev\
    libzip-dev\
    libssl-dev\
    pkg-config\
    autoconf\
    curl\
&& apt-get update -y


COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 4Mongo
RUN composer require jenssegers/mongodb
RUN composer install  
RUN docker-php-ext-install gettext intl pdo_mysql gd
RUN pecl install mongodb\
    && echo "extension=mongodb.so" >> /usr/local/etc/php/conf.d/mongodb.ini
RUN docker-php-ext-configure gd --enable-gd --with-freetype --with-jpeg\
    && docker-php-ext-install -j$(nproc) gd

# 4 MySQL
RUN docker-php-ext-install bcmath mbstring intl opcache
RUN docker-php-ext-install pdo pdo_mysql mysqli