# -------------------------
# Base image
# -------------------------
    FROM php:8.3-apache

    ENV COMPOSER_MEMORY_LIMIT=-1
    
    # -------------------------
    # Install system deps + PHP extensions + Node
    # -------------------------
    RUN apt-get update && apt-get install -y \
        git curl zip unzip libpng-dev libonig-dev libxml2-dev libzip-dev sqlite3 libsqlite3-dev libicu-dev \
        nodejs npm \
        && docker-php-ext-install pdo_mysql pdo_sqlite mbstring bcmath gd zip exif intl \
        && docker-php-ext-enable exif intl \
        && apt-get clean && rm -rf /var/lib/apt/lists/*
    
    # Enable Apache mod_rewrite
    RUN a2enmod rewrite

    WORKDIR /var/www/html
    
    # -------------------------
    # Copy Laravel project
    # -------------------------
    COPY . .
    
    # Ensure SQLite exists
    RUN touch database/database.sqlite
    
    # -------------------------
    # Set permissions
    # -------------------------
    RUN chown -R www-data:www-data storage bootstrap/cache database public \
        && chmod -R 775 storage bootstrap/cache database public
    
    # -------------------------
    # Build Tailwind/Vite assets
    # -------------------------
    RUN npm install
    RUN npm run build
    
    # Expose port
    EXPOSE 80
    
    # Start Apache
    CMD ["apache2-foreground"]
    