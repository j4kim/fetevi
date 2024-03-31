<?php
require_once 'vendor/autoload.php';
use League\CommonMark\CommonMarkConverter;

$converter = new CommonMarkConverter();
$md = file_get_contents('content.md');
$renderedContent = $converter->convert($md);
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
    </head>
    <body>
        <main data-scroll-section>
            <!-- Header -->
            <header
                class="absolute z2"
                style="padding: 10vw"
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
            <!-- Garland right, hover text -->
            <img
                src="garland-right.svg"
                class="absolute block z3"
                style="width: 70vw; height: 35vw; top: -4vw; right: -10vw"
                data-scroll
                data-scroll-speed="4"
                data-scroll-position="top"
            />
            <!-- Garland left -->
            <img
                src="garland-left.svg"
                class="absolute block z1"
                style="width: 90vw; height: 61.48vw; top: -10vw; left: -5vw"
                data-scroll
                data-scroll-speed="-3"
                data-scroll-position="top"
            />
            <div style="height: 20vw"></div>
            <div data-scroll data-scroll-speed="-2">
                <!-- Trees left -->
                <img
                    src="trees-left.svg"
                    class="absolute block z1"
                    style="width: 42vw; left: -13vw; top: -15vw"
                />
                <!-- Trees right -->
                <img
                    src="trees-right.svg"
                    class="absolute block z1"
                    style="width: 55vw; right: -20vw; top: -6vw"
                />
                <img src="floor-1.svg" class="bg-img" style="height: 50vw" />
            </div>
            <!-- Content -->
            <div
                class="relative"
                style="
                    min-height: 100vw;
                    background-image: url(floor-2-3-4.svg);
                    background-size: cover;
                    background-position: center;
                "
            >
                <img
                    src="front-tree-left.svg"
                    class="absolute block z0"
                    style="width: 56vw; left: -8vw; top: -36vw"
                />
                <div
                    class="relative z2"
                    style="padding: 0 10vw 32vw; top: -15vw"
                >
                    <img
                        src="owl.svg"
                        style="
                            width: 25vw;
                            position: relative;
                            bottom: -11vw;
                            left: -6vw;
                        "
                    />
                    <img
                        class="z3"
                        src="owl-feets.svg"
                        style="
                            width: 7vw;
                            position: relative;
                            bottom: -4vw;
                            left: -25vw;
                        "
                    />
                    <div class="sheet relative">
                        <?= $renderedContent ?>
                    </div>
                </div>
                <img
                    src="boar-date.svg"
                    class="absolute block z2"
                    style="width: 100vw; bottom: -14vw; right: -10vw"
                />
            </div>
            <img
                src="bottom.svg"
                class="relative z3"
                style="width: 110vw; left: -5vw"
            />
            <footer
                class="relative z3"
                style="
                    background-color: white;
                    color: #1e1e20;
                    padding: 5vw 20vw;
                    text-align: center;
                "
            >
                <p>Souvez nous sur nos réseaux:</p>
                <p style="display: flex; gap: 36px; justify-content: center">
                    <a
                        target="_blank"
                        href="https://www.facebook.com/fetevipdm/"
                    >
                        <svg
                            width="36"
                            height="36"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512"
                        >
                            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path
                                d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"
                            />
                        </svg>
                    </a>
                    <a
                        target="_blank"
                        href="https://www.instagram.com/fete_vi_pdm/"
                    >
                        <svg
                            width="36"
                            height="36"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512"
                        >
                            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path
                                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
                            />
                        </svg>
                    </a>
                </p>
                <p>
                    <small>
                        Site créé avec ❤️ par
                        <a
                            href="https://3sdl.ch"
                            style="color: initial"
                            target="_blank"
                            >3sdl.ch</a
                        >
                    </small>
                </p>
            </footer>
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
