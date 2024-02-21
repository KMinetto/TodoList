# Stage 1: PHP and Apache
FROM php:8.2-apache

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf 

# Packages updates and installations
RUN apt-get update
RUN apt-get install -y --no-install-recommends locales apt-utils git libicu-dev g++ libpng-dev libxml2-dev libzip-dev libonig-dev libxslt-dev unzip
RUN apt-get clean
RUN rm -rf /var/lib/apt/lists/*

# Locales configuration
RUN echo "en_US.UTF-8 UTF-8" > /etc/locale.gen
RUN echo "fr_FR.UTF-8 UTF-8" >> /etc/locale.gen
RUN locale-gen

# Composer installation
RUN curl -sS https://getcomposer.org/installer | php --
RUN mv composer.phar /usr/local/bin/composer

# Extension configuration and installation
RUN docker-php-ext-configure intl
RUN docker-php-ext-install pdo pdo_mysql opcache zip calendar dom mbstring gd xsl intl

# APCu installation
RUN pecl install apcu
RUN docker-php-ext-enable apcu

WORKDIR /var/www/
