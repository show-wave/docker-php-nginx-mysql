# Use the official PHP-FPM image as a parent image
FROM php:8.1-fpm

# Set the working directory
WORKDIR /var/www/html

# Install dependencies
RUN apt-get update && apt-get install -y \
  git \
  curl \
  zip \
  unzip \
  && apt-get clean

# Install php related dependencies
RUN docker-php-ext-install pdo pdo_mysql

# Allow super user
ENV COMPOSER_ALLOW_SUPERUSER=1 

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY ./app/composer.* ./







