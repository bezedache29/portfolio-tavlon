# Portfolio Sébastien Joublot

Mise en place d'un portfolio pour le monteur vidéaste Sébastien Joublot. Fondateur d'exode effects

![portfolio-ee-min](https://user-images.githubusercontent.com/23324161/205933663-a19207c3-ad4f-4230-ba46-6133cca838c2.png)

## Demo

### Front (Responsive)

![2022-12-06-15-15-35 (1)](https://user-images.githubusercontent.com/23324161/205943155-95b815b4-9522-4466-8850-7ced893ca048.gif)

### Back-office

![2022-12-06-15-51-38](https://user-images.githubusercontent.com/23324161/205945863-fc8c8fa3-2727-489e-bf28-fc58ef513a60.gif)

## Pour commencer

Sébastien avait besoins d'une page web pour montrer et expliquer ses projets ainsi que d'exposer ses compétences à ses clients

### Pré-requis

Il faut une page vitrine qui présente et montre les projets, les compétences ainsi qu'un formulair de contact email

-   Utilisation du template Blade php coupler avec Livewire
-   Utilisation du framework css TailwindCss
-   Utilisation de la libraire backpack / laravel pour générer un back-office
-   Utilisation de MySQL pour stocker les données en base de données
-   Utilisation de Notifications pour envoie de mail depuis le formulaire de contact

### Stacks utilisées

-   Laravel 9
-   Livewire
-   TailwindCSS
-   BackPack 5 (Back-office)
-   Notifications
-   Webpack (Laravel-mix)
-   Storage

### Installation de Laravel et Livewire

Installer Laravel 9 avec Vite par default
Insstaller Livewire

```bash
   composer require livewire/livewire
```

Insérer les balises styles et scripts de livewire sur la page ou il y aura des composants livewire

```bash
   ...
    @livewireStyles
  </head>
  <body>
    ...

    @livewireScripts
  </body>
  </html>
```

### Installation de Backpack/Laravel

Installation de BackPack/Laravel

```bash
  composer require backpack/crud
  composer require --dev backpack/generators
  composer require --dev laracasts/generators
```

Lancer la commande

```bash
  php artisan backpack:install --no-interaction
```

### Remplacer Vite par Laravel-mix (webpack)

Installation de laravel-mix

```bash
  npm install --save-dev laravel-mix
```

Créer un fichier `webpack.mix.js` à la racine et y coller :

```bash
  const mix = require('laravel-mix');
  const tailwindcss = require('tailwindcss'); /* Add this line at the top */

  mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .options({
        postCss: [ tailwindcss('./tailwind.config.js') ],
    })
    .version();
```

Modifier le `package.json` en remplacant les commandes du script

```bash
  "scripts": {
    "dev": "npm run development",
    "development": "mix",
    "watch": "mix watch",
    "watch-poll": "mix watch -- --watch-options-poll=1000",
    "hot": "mix watch --hot",
    "prod": "npm run production",
    "production": "mix --production"
  }
```

Modifier le .env pour supprimer les variables VITE et les remplacer par

```bash
  MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
  MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```

Dans le fichier `home.blade.php` remplacer

```bash
  @viteReactRefresh
  @vite('resources/js/app.js')

  // par

  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <script src="{{ mix('js/app.js') }}" defer></script>
```

Supprimer le plugin vite

```bash
  npm remove vite laravel-vite-plugin
```

Supprimer le fichier de configuration vite

```bash
  rm vite.config.js
```

### Installer et configurer TailwindCSS

Installer la librairie

```bash
  npm install -D tailwindcss@latest postcss@latest autoprefixer@latest
```

Renommer `ressources/css` en `ressources/sass`  
Dans le dossier `ressources/sass` renommer le fichier `app.css` en `app.scss`  
Dans le fichier `app.scss`

```bash
  /* ./resources/sass/app.scss */
  @tailwind base;
  @tailwind components;
  @tailwind utilities;
```

Lancer la commande

```bash
  npm run watch

  // Pour build en prod
  npm run production
```

## Déploiement

Pour déployer le projet sur O2Switch

-   Se connecter sur le Panel O2Switch
    -   Créer un sous-domaine
    -   Créer une base de donnée
    -   Remplir les informations dans le .env
    ```bash
      DB_CONNECTION=mysql
      DB_HOST=localhost
      DB_PORT=3306
      DB_DATABASE=DB_NAME
      DB_USERNAME=DB_USERNAME
      DB_PASSWORD=DB_PASSWORD
    ```
    -   Lancer la commande dans le terminal en local
    ```bash
      php artisan optimize:clear
      npm run production
    ```
    -   Lancer la commande dans le terminal d'O2Switch pour installer Laravel et ses dépendances
    ```bash
      composer install
    ```
    -   Lancer la commande dans le terminal d'O2Switch pour migrer la base de donnée avec les seeders
    ```bash
      php artisan migrate:fresh --seed
    ```
    -   Lancer la commande dans le terminal d'O2Switch pour link les images stocker avec le dossier public
    ```bash
      php artisan storage:link
    ```

## Authors

-   [@bezedache29](https://www.github.com/bezedache29)
