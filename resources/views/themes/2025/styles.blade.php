<style>
    :root {
        color-scheme: dark;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        --aspect-ratio: 0.2;
        --bg-img: url(svg/2025/bg-0.2.svg);
        --font-size: 1rem;
        --main-padding: 4vw;
        --article-padding: 1em;
        --header-padding: 6vw;
        --header-font-size: 7vw;
        --spacer-aspect-ratio: 1;
    }

    @media (min-width: 600px) {
        :root {
            --aspect-ratio: 0.3;
            --bg-img: url(svg/2025/bg-0.3.svg);
            --font-size: 1.15rem;
            --main-padding: 10vw;
            --article-padding: 1.5em;
            --header-padding: 6vw;
            --header-font-size: 5vw;
        }
    }

    @media (min-width: 900px) {
        :root {
            --aspect-ratio: 0.4;
            --bg-img: url(svg/2025/bg-0.4.svg);
            --font-size: 1.2rem;
            --main-padding: 10vw;
            --article-padding: 1.5em;
            --header-padding: 6vw;
            --header-font-size: 5vw;
        }
    }

    @media (min-width: 1200px) {
        :root {
            --aspect-ratio: 0.8;
            --bg-img: url(svg/2025/bg-0.8.svg);
            --font-size: 1.25rem;
            --main-padding: 2vw;
            --article-padding: 1.5em;
            --header-padding: 6vw;
            --header-font-size: 3.6vw;
            --spacer-aspect-ratio: 0;
        }

        main {
            flex-direction: row !important;
        }

        main header,
        main .content {
            width: 100%;
        }

        main .content {
            justify-content: flex-start;
            padding-top: 6vw;
            gap: 4em;
        }
    }

    @media (min-width: 1500px) {
        :root {
            --font-size: 1.4rem;
            --main-padding: 4vw;
            --article-padding: 1.5em;
        }
    }

    /* Reset */
    body {
        margin: 0;
        padding: 0;
        overflow-x: hidden;
        background-color: #3b3a97;
        font-family: system-ui;
        font-size: var(--font-size);
    }

    main :is(p, ul, h1, h2, h3, h4) {
        margin: 0;
    }

    a,
    summary {
        color: #6a50c6;
        cursor: pointer;
    }

    /* Main */
    main {
        aspect-ratio: var(--aspect-ratio);
        background-image: var(--bg-img);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: bottom;
        display: flex;
        flex-direction: column;
    }

    main>* {
        padding: var(--main-padding);
    }

    /* Header  */
    header {
        padding-top: var(--header-padding);
        font-size: var(--header-font-size);
    }

    header :is(h1, h2, h3, h4) {
        font-family: "Modak", system-ui;
        font-weight: 400;
        margin: 0;
        line-height: 1;
    }

    header h1 {
        font-size: 2.57em;
    }

    header h2 {
        font-size: 1.57em;
    }

    header h3 {
        font-size: 1.2em;
    }

    header h4 {
        font-size: 1em;
    }

    /* Content */
    .content {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
        gap: 3em;
    }

    .content .spacer {
        aspect-ratio: var(--spacer-aspect-ratio);
    }

    .content article {
        line-height: 1.6;
        background-color: white;
        color: #322251;
        padding: var(--article-padding);
        position: relative;
    }

    .content article h1:first-child {
        position: absolute;
        top: -1.3em;
        color: white;
        font-family: "Modak", system-ui;
        font-weight: 400;
        font-size: 2em;
        white-space: nowrap;
    }

    /* Footer */
    footer {
        color: #1e1e20;
        background-color: white;
        text-align: center;
        font-size: 1.1em;
        padding: 2em 0;
    }
</style>
