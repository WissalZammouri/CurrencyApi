FROM php:7.2.1-apache
RUN apt-get update && apt-get install -y libxml2-dev libmcrypt-dev php-pear
RUN docker-php-ext-install soap
RUN docker-php-ext-install pdo pdo_mysql 
RUN pecl install mcrypt-1.0.1



COPY . /var/www/
