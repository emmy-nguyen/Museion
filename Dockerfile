FROM php:8.4-fpm

RUN apt-get update -y && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    libzip-dev 

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
COPY composer.json composer.lock ./
RUN composer install --no-dev --no-scripts --no-autoloader
COPY . .

# COPY . /var/www/html

RUN chown -R www-data:www-data /var/www/html

# USER www-data

# RUN composer install

EXPOSE 9001

USER root

RUN sed -i 's/listen = 9000/listen = 9001/g' /usr/local/etc/php-fpm.d/www.conf

CMD ["php-fpm"]
