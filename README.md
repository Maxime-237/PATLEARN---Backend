# Patlearn

API Laravel pour la plateforme d’apprentissage **Patlearn** (cours → leçons → exercices → questions → réponses) avec gestion des inscriptions et progression, plus un back-office admin.

## Fonctionnalités

- Authentification via **register/login** + sessions/token **Sanctum**
- Consultation publique des **cours**
- Gestion (auth) :
    - Inscriptions aux cours
    - Récupération des leçons d’un cours
    - Récupération des exercices d’une leçon
    - Récupération des questions d’un exercice
    - Envoi des réponses
    - Suivi des progressions
- Gestion (admin) : CRUD complet sur Cours / Leçons / Exercices / Questions

## URL de l’API

Dans `routes/api.php`, les endpoints sont exposés sous :

- `POST /api/register`
- `POST /api/login`
- `GET /api/cours`

> Selon ta config locale, l’URL complète peut être du type `http://localhost:8000/api/...`.

## CORS

Le CORS est configuré dans `config/cors.php` :

- `allowed_origins`: `https://patlearn.vercel.app`
- `allowed_headers`: `*`

Si tu testes depuis un autre domaine, ajuste `allowed_origins`.

## Prérequis

- PHP 8.3+
- Composer
- Node.js + npm (pour Vite)
- Une base de données (MySQL/SQLite/Postgres selon ton `.env`)

## Installation (local)

1. Installer les dépendances PHP

```bash
composer install
```

2. Copier / configurer l’environnement

```bash
cp .env.example .env
```

3. Générer la clé

```bash
php artisan key:generate
```

4. Lancer les migrations

```bash
php artisan migrate
```

5. Installer les dépendances front (Vite)

```bash
npm install
```

6. Construire / lancer le front (si besoin)

```bash
npm run dev
```

## Démarrage

```bash
php artisan serve
```

## Authentification

### Inscription (public)

- `POST /api/register`

### Login (public)

- `POST /api/login`

Après login, utilise le mécanisme Sanctum côté client pour accéder aux routes protégées.

### Me / Logout (protégé)

- `GET /api/me`
- `POST /api/logout`

## Endpoints API

### 1) Public

- `POST /api/register`
- `POST /api/login`
- `GET /api/cours`
- `GET /api/cours/{id}`

### 2) Protégé (`auth:sanctum`)

**Inscriptions**

- `GET /api/inscriptions`
- `POST /api/cours/{cours_id}/inscrire`
- `DELETE /api/cours/{cours_id}/desinscrire`

**Leçons**

- `GET /api/cours/{cours_id}/lecons`
- `GET /api/lecons/{id}`

**Exercices**

- `GET /api/lecons/{lecon_id}/exercises`
- `GET /api/exercises/{id}`

**Questions**

- `GET /api/exercises/{exercise_id}/questions`

**Réponses**

- `POST /api/questions/{question_id}/repondre`

**Progressions**

- `GET /api/progressions`
- `POST /api/lecons/{lecon_id}/progression`

### 3) Admin (`auth:sanctum` + `isAdmin`, préfixe `admin`)

**Cours**

- `POST /api/admin/cours`
- `PUT /api/admin/cours/{id}`
- `DELETE /api/admin/cours/{id}`

**Leçons**

- `POST /api/admin/cours/{cours_id}/lecons`
- `PUT /api/admin/lecons/{id}`
- `DELETE /api/admin/lecons/{id}`

**Exercices**

- `POST /api/admin/lecons/{lecon_id}/exercises`
- `PUT /api/admin/exercises/{id}`
- `DELETE /api/admin/exercises/{id}`

**Questions**

- `POST /api/admin/exercises/{exercise_id}/questions`
- `PUT /api/admin/questions/{id}`
- `DELETE /api/admin/questions/{id}`

## Modèle de données (principales entités)

- `Cours` : cours
- `Lecon` : leçon
- `Exercise` : exercice
- `Question` : question
- `Reponse` : réponse
- `Inscription` : inscription à un cours
- `Progression` : progression (ex : avancement par leçon)

## Tests

```bash
php artisan test
```

## License

Le projet est sous license **MIT** (via le socle Laravel).
