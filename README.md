# fetevi.ch

Petit site pour la fête villageoise des Ponts-de-Martel.

## Mise à jour du contenu

Le contenu provient de deux fichiers [Markdown](https://fr.wikipedia.org/wiki/Markdown) dans ce dépôt:
- [content.md](content.md): le contenu principal, dans le rectangle blanc.
- [footer.md](footer.md): le pied de page. Qui contient un pavé de code HTML pour afficher les boutons pour les réseaux sociaux, mais du texte peut-être ajouté au dessus.

Pour modifier le contenu, cliquer sur le bouton crayon "Edit this file" depuis la page du fichier.
Le fichier est ouvert dans un éditeur Markdown. Le bouton "Preview" permet de voir comment ce sera rendu.
Vous pouvez modifier le contenu puis cliquer sur le bouton "Commit changes...", laisser les options par défaut et cliquer sur "Commit changes".

## Développement

### Installer les dépendances PHP

    composer install

### Lancer sur un serveur local

    php -S localhost:4000

### Déployer

Le déploiement est fait par GitHub qui envoie un appel par webhook au script `webhook-target.php`.

Tous les événements push sur la branche main déclenche une mise à jour.

La fonction php `shell_exec` doit être activée sur la config du site sur Infomaniak.
