FROM php:8.3-apache

# Install PHP extensions (including sqlite, intl, exif)
RUN apt-get update && apt-get install -y \
    git curl zip unzip libpng-dev libonig-dev libxml2-dev libzip-dev sqlite3 libsqlite3-dev libicu-dev \
    && docker-php-ext-install pdo_mysql pdo_sqlite mbstring bcmath gd zip exif intl \
    && docker-php-ext-enable exif intl

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set Apache DocumentRoot to Laravel public folder
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

WORKDIR /var/www/html

# Copy composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader --no-interaction --no-progress

# Copy the rest of Laravel project
COPY . .

# Ensure database and permissions
RUN touch database/database.sqlite \
 && chown -R www-data:www-data storage bootstrap/cache database

EXPOSE 80
CMD ["apache2-foreground"]
