FROM php:7.2-apache
WORKDIR /var/www/html/
RUN apt-get update \
  && apt-get install -y postgresql postgresql-contrib \
  && apt-get install sudo \
  && apt-get install -y libpq-dev \
  && docker-php-ext-install pdo pdo_pgsql \
  && apt-get clean \
  && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* \
  && docker-php-ext-install pgsql
RUN apt-get update \
  && apt-get install -y zlib1g-dev libzip-dev unzip \
  && docker-php-ext-install zip
COPY ./ .
RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer 
RUN composer install