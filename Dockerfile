# Dockerfile BETA TESTER
FROM php:8.1-apache

ENV COMPOSER_ALLOW_SUPERUSER=1

EXPOSE 80
WORKDIR /app

# git, unzip & zip are for composer
RUN apt-get update -qq && \
    apt-get install -qy \
    git \
    gnupg \
    unzip \
    zip && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
    apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# PHP Extensions
RUN docker-php-ext-install -j$(nproc) opcache
COPY conf/php.ini /usr/local/etc/php/conf.d/app.ini

# Apache
COPY errors /errors
COPY conf/vhost.conf /etc/apache2/sites-available/000-default.conf
COPY conf/apache.conf /etc/apache2/conf-available/z-app.conf
COPY index.php /app/index.php

RUN a2enmod rewrite remoteip && \
    a2enconf z-app
#RUN apk --update --no-cache add git
#COPY --from=composer /usr/bin/composer /usr/bin/composer
#WORKDIR /var/www
#CMD composer install ;  php-fpm
#EXPOSE 9000