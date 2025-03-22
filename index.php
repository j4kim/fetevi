<?php
require_once 'vendor/autoload.php';
use League\CommonMark\CommonMarkConverter;

$converter = new CommonMarkConverter();

$renderedContent = $converter->convert(file_get_contents('content.md'))->getContent();
$articles = explode('<hr />', $renderedContent);
$renderedFooter = $converter->convert(file_get_contents('footer.md'))->getContent();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title>Fête villageoise des Ponts-de-Martel</title>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Modak&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css" />
        <link rel="icon" href="svg/moon.svg">
    </head>
    <body>
        <main>
            <header>
                <h1 class="uppercase">Fête Vi’</h1>
                <h3 class="uppercase">Les Ponts-de-Martel</h3>
                <h2 class="uppercase">20-21 juin 2025</h2>
                <h4>Salle du Bugnon</h4>
            </header>
            <?php foreach($articles as $article): ?>
                <article><?= $article ?></article>
            <?php endforeach; ?>
            <footer><?= $renderedFooter ?></footer>
        </main>
    </body>
</html>
