<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <!-- Primary Meta Tags -->
        <title>{{ $title }}</title>
        <meta name="title" content="{{ $title }}" />
        <meta name="description" content="{{ $description }}" />

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ config('app.url') }}" />
        <meta property="og:title" content="{{ $title }}" />
        <meta property="og:description" content="{{ $description }}" />

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image" />
        <meta property="twitter:url" content="{{ config('app.url') }}" />
        <meta property="twitter:title" content="{{ $title }}" />
        <meta property="twitter:description" content="{{ $description }}" />

        @yield('head')
    </head>

    <body>
        @yield('content')
    </body>

</html>
