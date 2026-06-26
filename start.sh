#!/bin/bash

# Générer la clé app si elle n'existe pas
php artisan key:generate --force

# Mettre en cache les configs
php artisan config:cache
php artisan route:cache

# Lancer les migrations
php artisan migrate --force 2>/dev/null || true

# Lancer les seeders seulement si la table cours est vide
php artisan tinker --execute="
if (\App\Models\Cours::count() === 0) {
    \Artisan::call('db:seed', ['--force' => true]);
    echo 'Seeders lancés';
} else {
    echo 'Données déjà présentes';
}
"

# Démarrer PHP-FPM en arrière-plan
php-fpm -D

# Démarrer Nginx
nginx -g "daemon off;"
