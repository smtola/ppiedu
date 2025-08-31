FROM php:8.3-apache

# Install system deps and PHP extensions
RUN apt-get update && apt-get install -y \
    git curl zip unzip libpng-dev libonig-dev libxml2-dev libzip-dev sqlite3 libsqlite3-dev libicu-dev \
    && docker-php-ext-install pdo_mysql pdo_sqlite mbstring bcmath gd zip exif intl \
    && docker-php-ext-enable exif intl

# Enable Apache mod_rewrite
RUN a2enmod rewrite

WORKDIR /var/www/html

# Copy composer binary
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy composer files for caching
COPY composer.json composer.lock ./

# Install PHP dependencies (with platform check off just in case)
RUN composer install --no-dev --optimize-autoloader --no-interaction --no-progress --ignore-platform-req=ext-intl --ignore-platform-req=ext-exif || true

# Copy rest of app
COPY . .

# Ensure sqlite db exists
RUN touch /var/www/html/database/database.sqlite \
 && chown -R www-data:www-data storage bootstrap/cache database

EXPOSE 80
CMD ["apache2-foreground"]
