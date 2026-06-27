#!/bin/bash

# Créer le fichier .env s'il n'existe pas
if [ ! -f /var/www/.env ]; then
    cp /var/www/.env.example /var/www/.env
fi

php artisan key:generate --force
php artisan config:cache
php artisan route:cache

# Migrations avec gestion des tables existantes
php artisan migrate --force --graceful 2>/dev/null || true

# Seeder avec vérification
php artisan tinker --execute="
try {
    if (\App\Models\Cours::count() === 0) {
        \Artisan::call('db:seed', ['--class' => 'CoursSeeder', '--force' => true]);
        echo 'Cours seedés' . PHP_EOL;
        \Artisan::call('db:seed', ['--class' => 'LeconSeeder', '--force' => true]);
        echo 'Lecons seedées' . PHP_EOL;
        \Artisan::call('db:seed', ['--class' => 'ExerciseSeeder', '--force' => true]);
        echo 'Exercises seedés' . PHP_EOL;
    } else {
        echo 'Cours déjà présents' . PHP_EOL;
    }

    if (\App\Models\Question::count() === 0) {
        \Artisan::call('db:seed', ['--class' => 'QuestionDualaSeeder', '--force' => true]);
        echo 'Questions Duala seedées' . PHP_EOL;
        \Artisan::call('db:seed', ['--class' => 'QuestionEwondoSeeder', '--force' => true]);
        echo 'Questions Ewondo seedées' . PHP_EOL;
        \Artisan::call('db:seed', ['--class' => 'QuestionMedumbaSeeder', '--force' => true]);
        echo 'Questions Médumba seedées' . PHP_EOL;
    } else {
        echo 'Questions déjà présentes' . PHP_EOL;
    }

    if (\App\Models\User::where('role', 'admin')->count() === 0) {
        \App\Models\User::create([
            'username' => 'Admin',
            'email'    => 'admin@pattlearn.com',
            'password' => bcrypt('admin123'),
            'role'     => 'admin',
        ]);
        echo 'Admin créé' . PHP_EOL;
    } else {
        echo 'Admin déjà présent' . PHP_EOL;
    }
} catch (Exception \$e) {
    echo 'Erreur: ' . \$e->getMessage() . PHP_EOL;
}
"

php-fpm -D
nginx -g "daemon off;"
