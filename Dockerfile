# Dockerfile BETA TESTER
FROM php:8.1-apache

ENV COMPOSER_ALLOW_SUPERUSER=1

EXPOSE 80
WORKDIR /var/www
# need php extention: mysqlnd, pdo_mysql, pdo_sqlite, xmlwriter, fileinfo, pdo, xsl, dom, gd, mbstring, phar, sqlite3, tidy, zip, imap, mysqli, sockets, xmlreader
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
RUN docker-php-ext-install -j$(nproc) opcache mysqlnd, pdo_mysql, pdo_sqlite, xmlwriter, fileinfo, pdo, xsl, dom, gd, mbstring, phar, sqlite3, tidy, zip, imap, mysqli, sockets, xmlreader
COPY docker/conf/php.ini /usr/local/etc/php/conf.d/app.ini

# Apache
#COPY errors /errors
COPY docker/conf/vhost.conf /etc/apache2/sites-available/000-default.conf
COPY docker/conf/apache.conf /etc/apache2/conf-available/z-app.conf

#update #apache after config
RUN a2enmod rewrite remoteip && \
    a2enconf z-app

# install on webserver services
CMD composer create-project webjet-cloud/webjet-cloud && \
    composer update && \
    composer dump-autoload -o -a ; php-fpm

# not forget for the URL website to powered WebJet.Cloud
COPY txt.htaccess /var/www/.htaccess
