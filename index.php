<?php
require_once 'vendor/autoload.php';
use League\CommonMark\CommonMarkConverter;

$converter = new CommonMarkConverter();

$renderedHeader = $converter->convert(file_get_contents('header.md'))->getContent();
$renderedContent = $converter->convert(file_get_contents('content.md'))->getContent();
$articles = explode('<hr />', $renderedContent);
$renderedFooter = $converter->convert(file_get_contents('footer.md'))->getContent();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Modak&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css" />
        <link rel="icon" href="svg/logo.svg">

        <!-- Primary Meta Tags -->
        <title>FÊTE VI' Les Ponts de Martel</title>
        <meta name="title" content="FÊTE VI' Les Ponts de Martel" />
        <meta name="description" content="Fête villageoise des Ponts-de-Martel, les 20 et 21 juin 2025 à la salle du Bugnon." />

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://fetevi.ch" />
        <meta property="og:title" content="FÊTE VI' Les Ponts de Martel" />
        <meta property="og:description" content="Fête villageoise des Ponts-de-Martel, les 20 et 21 juin 2025 à la salle du Bugnon." />
        <meta property="og:image" content="svg/logo.svg" />

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image" />
        <meta property="twitter:url" content="https://fetevi.ch" />
        <meta property="twitter:title" content="FÊTE VI' Les Ponts de Martel" />
        <meta property="twitter:description" content="Fête villageoise des Ponts-de-Martel, les 20 et 21 juin 2025 à la salle du Bugnon." />
        <meta property="twitter:image" content="svg/logo.svg" />
    </head>
    <body>
        <main>
            <header>
                <?= $renderedHeader ?>
            </header>
            <div class="content">
                <?php foreach($articles as $article): ?>
                    <article><?= $article ?></article>
                <?php endforeach; ?>
                <div class="spacer"></div>
            </div>
        </main>
        <footer>
            <img src="svg/logo.svg" width="100px"/>
            <?= $renderedFooter ?>
        </footer>
    </body>
</html>
