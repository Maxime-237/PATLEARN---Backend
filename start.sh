#!/bin/bash

# Générer la clé app si elle n'existe pas
php artisan key:generate --force

# Mettre en cache les configs
php artisan config:cache
php artisan route:cache

# Lancer les migrations
php artisan migrate --force 2>/dev/null || true

# Démarrer PHP-FPM en arrière-plan
php-fpm -D

# Démarrer Nginx
nginx -g "daemon off;"
