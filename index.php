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
        <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.4/dist/locomotive-scroll.min.js"></script>
        <link
            href="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.4/dist/locomotive-scroll.min.css"
            rel="stylesheet"
        />
        <link rel="stylesheet" href="style.css" />
        <link rel="icon" href="moon.svg">
    </head>
    <body>
        <main data-scroll-section>
            <header
                data-scroll
                data-scroll-speed="-1"
                data-scroll-position="top"
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
                data-scroll
                data-scroll-speed="4"
                data-scroll-position="top"
            />
            <img
                id="garland-left"
                src="garland-left.svg"
                data-scroll
                data-scroll-speed="1"
                data-scroll-position="top"
            />
            <div class="spacer"></div>
            <div data-scroll data-scroll-speed="-2">
                <img id="trees-left" src="trees-left.svg" />
                <img id="trees-right" src="trees-right.svg" />
                <img id="floor-1" src="floor-1.svg" />
            </div>
            <div id="content">
                <img id="front-tree-left" src="front-tree-left.svg" />
                <div id="inner">
                    <img id="owl" src="owl.svg" />
                    <img id="owl-feets" src="owl-feets.svg" />
                    <article><?= $renderedContent ?></article>
                </div>
                <img id="boar" src="boar-date.svg" />
            </div>
            <img id="bottom" src="bottom.svg" />
            <footer><?= $renderedFooter ?></footer>
        </main>
        <script>
            const scroll = new LocomotiveScroll({
                el: document.body,
                smooth: true,
                tablet: { breakpoint: 0, smooth: true },
            });
            setTimeout(() => {
                scroll.update();
            }, 1000);
        </script>
    </body>
</html>
