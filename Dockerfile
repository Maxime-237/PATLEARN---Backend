FROM php:8.3-fpm

# Installer les dépendances système
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libpq-dev \
    zip \
    unzip \
    nginx

# Installer les extensions PHP
RUN docker-php-ext-install pdo pdo_pgsql pgsql mbstring exif pcntl bcmath gd

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Définir le répertoire de travail
WORKDIR /var/www

# Copier les fichiers du projet
COPY . .

# Installer les dépendances Laravel
RUN composer install --no-dev --optimize-autoloader

# Copier la config Nginx
COPY nginx.conf /etc/nginx/sites-available/default

# Permissions
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache
RUN chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Exposer le port
EXPOSE 8000

# Script de démarrage
COPY start.sh /start.sh
RUN chmod +x /start.sh

CMD ["/start.sh"]
