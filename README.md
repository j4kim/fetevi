# fetevi.ch

Petit site pour la fête villageoise des Ponts-de-Martel.

## Install dependencies

    composer install

## Run locally

    php -S localhost:4000

## Deploy

Deployment is made by github sending a webhook call to `webhook-target.php`.

All pushes to branch main triggers an update.

`shell_exec` php function must be enabled on Infomaniak config for the site.
