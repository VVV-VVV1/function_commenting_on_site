FROM php:8.1-fpm

RUN docker-php-ext-install mysqli

RUN docker-php-ext-install pdo pdo_mysql

WORKDIR /var/www/html
