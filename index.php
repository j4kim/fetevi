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
        <title>Fête villageoise des Ponts-de-Martel</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Modak&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css" />
        <link rel="icon" href="svg/moon.svg">
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
        <footer><?= $renderedFooter ?></footer>
    </body>
</html>
