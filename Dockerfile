FROM php:7.4-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    libzip-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy composer files
COPY composer.json ./

# Configure composer plugins and install dependencies
RUN composer config --no-plugins allow-plugins.symfony/flex true && \
    composer config --no-plugins allow-plugins.symfony/thanks true && \
    composer install --no-dev --optimize-autoloader --no-scripts --ignore-platform-reqs

# Copy application code
COPY . .

# Create necessary directories first
RUN mkdir -p var/cache var/log && \
    chown -R www-data:www-data /var/www/html && \
    chmod -R 775 var

# Expose port
EXPOSE 9000

# Start PHP-FPM
CMD ["php-fpm"]