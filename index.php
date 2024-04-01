<?php
require_once 'vendor/autoload.php';
use League\CommonMark\CommonMarkConverter;

$converter = new CommonMarkConverter();

$renderedContent = $converter->convert(file_get_contents('content.md'));
$renderedFooter = $converter->convert(file_get_contents('footer.md'));
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Fête villageoise des Ponts-de-Martel</title>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap"
            rel="stylesheet"
        />
        <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@beta/bundled/locomotive-scroll.min.js"></script>
        <link rel="stylesheet"  href="locomotive-scroll.css" />
        <link rel="stylesheet" href="style.css" />
        <link rel="icon" href="moon.svg">
    </head>
    <body>
        <main data-scroll-section>
            <header
                data-scroll
                data-scroll-speed="-0.1"
            >
                <h1>
                    <div>Fête</div>
                    <div>villageoise</div>
                    <div>des Ponts-de-Martel</div>
                </h1>
            </header>
            <img
                id="garland-right"
                src="garland-right.svg"
                class="absolute z3"
                data-scroll
                data-scroll-speed=".4"
            />
            <img
                id="garland-left"
                src="garland-left.svg"
                class="absolute z1"
                data-scroll
                data-scroll-speed=".1"
            />
            <div class="spacer"></div>
            <div data-scroll data-scroll-speed="-0.15">
                <img id="trees-left" src="trees-left.svg" class="absolute z1" />
                <img id="trees-right" src="trees-right.svg" class="absolute z1" />
                <img id="floor-1" src="floor-1.svg" class="relative z0" />
            </div>
            <div id="main-content" class="relative">
                <img id="front-tree-left" src="front-tree-left.svg" class="absolute z0" />
                <div id="inner" class="relative z2">
                    <img id="owl" src="owl.svg" />
                    <img id="owl-feets" src="owl-feets.svg" class="z3" />
                    <article class="content relative"><?= $renderedContent ?></article>
                </div>
                <img id="boar" src="boar-date.svg" class="absolute z2" />
            </div>
            <img id="bottom" src="bottom.svg" class="relative z3" />
            <footer class="relative z3 content"><?= $renderedFooter ?></footer>
        </main>
        <script>
            const scroll = new LocomotiveScroll({
                lenisOptions: {
                    smoothTouch: true,
                }
            });
        </script>
    </body>
</html>
