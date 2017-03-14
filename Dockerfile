FROM php:7.1-apache

RUN apt-get update \
 && apt-get install -y git zlib1g-dev mysql-client vim libmcrypt-dev \
 && docker-php-ext-install zip opcache mysqli pdo pdo_mysql mcrypt \
 && a2enmod rewrite \
 && sed -i 's!/var/www/html!/var/www!g' /etc/apache2/apache2.conf \
 && sed -i 's!/var/www/html!/var/www!g' /etc/apache2/sites-available/000-default.conf

WORKDIR /var/www