FROM php:8.2.0-fpm

RUN docker-php-ext-install pdo pdo_mysql