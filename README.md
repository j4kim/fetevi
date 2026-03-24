# fetevi.ch

Petit site pour la fête villageoise des Ponts-de-Martel.

## Mise à jour du contenu

Le contenu est géré depuis une console d'administration sur https://fetevi.ch/admin.

## Développement

### Installer les dépendances et configurer

    composer run setup

### Créer des données de test

    php artisan db:seed

### Lancer un serveur local

    composer run dev

Ouvrir http://localhost:8000/admin et se connecter avec `test@example.com`/`password`.
