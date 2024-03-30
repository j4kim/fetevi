<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fête villageoise des Ponts-de-Martel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.4/dist/locomotive-scroll.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.4/dist/locomotive-scroll.min.css" rel="stylesheet" />
    <style>
        :root {
            --sky: #272455;
            --floor-1: #538931;
            --floor-2: #8a6614;
            --floor-3: #4e3716;
            --floor-4: #2f110e;
        }

        body,
        html,
        h1 {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: "Roboto Slab", serif;
            font-optical-sizing: auto;
            font-weight: 900;
            color: white;
        }

        main {
            background-color: var(--sky);
            background-image: linear-gradient(var(--sky) 50%,
                    var(--floor-4) 50%);
        }

        .absolute {
            position: absolute;
        }

        .relative {
            position: relative;
        }

        .relative {
            display: block;
        }

        .z1 {
            z-index: 1;
        }

        .z2 {
            z-index: 2;
        }

        .z3 {
            z-index: 3;
        }

        .bg-img {
            width: 100vw;
            height: 71.428vw;
            display: block;
            position: relative;
            object-fit: cover;
            object-position: top;
        }
    </style>
</head>

<body>
    <main data-scroll-section>
        <!-- Content -->
        <div class="absolute z2" style="padding: 10vw; font-size: 3vw">
            <h1>Fête villageoise<br />des Ponts-de-Martel</h1>
            <h1>7 & 8 juin 2024</h1>
            <h2>Revenez un peu plus tard, le site n'est pas prêt 😬</h2>
        </div>
        <?php include('garland-left.html') ?>
        <!-- Garland right, hover text -->
        <img src="garland-right.svg" class="absolute block z3" style="width: 70vw; height: 35vw; top: -4vw; right: -10vw" data-scroll data-scroll-speed="4" data-scroll-position="top" />
        <!-- Background -->
        <div class="relative">
            <div style="height: 20vw"></div>
            <div data-scroll data-scroll-speed="-4">
                <!-- Trees left -->
                <img src="trees-left.svg" class="absolute block z1" style="width: 42vw; left: -13vw; top: -15vw" />
                <!-- Trees right -->
                <img src="trees-right.svg" class="absolute block z1" style="width: 55vw; right: -20vw; top: -6vw" />
                <img src="floor--1.svg" class="bg-img" />
            </div>
            <div data-scroll data-scroll-speed="-2" style="top: -5vw" class="relative">
                <img src="front-tree-left.svg" class="absolute block z1" style="width: 56vw; left: -8vw; top: -36vw" />
                <img class="bg-img" src="floor--2.svg" />
            </div>
            <img class="bg-img" src="floor--3.svg" data-scroll data-scroll-speed="-1" style="top: -10vw" />
            <img class="bg-img" src="floor--4.svg" data-scroll data-scroll-speed="0" style="top: -15vw; height: 22vw" />
        </div>
    </main>
    <script>
        const scroll = new LocomotiveScroll({
            el: document.body,
            smooth: true,
            tablet: {
                breakpoint: 0,
                smooth: true
            },
        });
    </script>
</body>

</html>