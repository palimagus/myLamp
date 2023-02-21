# Path: myLamp\charts\mysql\Dockerfile
FROM php:8.2.1-apache

RUN docker-php-ext-install mysqli pdo pdo_mysql

COPY src/ /var/www/html/

EXPOSE 80