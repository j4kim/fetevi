# fetevi.ch

Petit site pour la fête villageoise des Ponts-de-Martel.

## Mise à jour du contenu

Le contenu provient de trois fichiers [Markdown](https://fr.wikipedia.org/wiki/Markdown) dans ce dépôt:
- [header.md](header.md): les titres.
- [content.md](content.md): le contenu principal, est divisé en rectangles blancs en utilisant le séparateur `---`.
- [footer.md](footer.md): le pied de page. Qui contient un pavé de code HTML pour afficher les boutons pour les réseaux sociaux, mais du texte peut-être ajouté au dessus.

Pour modifier le contenu, cliquer sur le bouton crayon "Edit this file" depuis la page du fichier.
Le fichier est ouvert dans un éditeur Markdown. Le bouton "Preview" permet de voir comment ce sera rendu.
Vous pouvez modifier le contenu puis cliquer sur le bouton "Commit changes...", laisser les options par défaut et cliquer sur "Commit changes".

Le fichier [JSON](https://fr.wikipedia.org/wiki/JSON) [meta.json](meta.json) peut aussi être modifié pour adapter les informations affichées dans l'aperçu du site lors du partage par lien ou sur Google.

## Développement

### Installer les dépendances PHP

    composer install

### Lancer sur un serveur local

    php -S localhost:4000

### Déployer

Le déploiement est fait par GitHub qui envoie un appel par webhook au script `webhook-target.php`.

Tous les événements push sur la branche main déclenchent une mise à jour.

La fonction php `shell_exec` doit être activée sur la config du site sur Infomaniak.
