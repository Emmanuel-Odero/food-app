FROM php:7.3.3-apache
RUN apt-get update && apt-get install -y
Run docker-php-ext-install mysqli
EXPOSE 80