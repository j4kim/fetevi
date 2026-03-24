<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <!-- Primary Meta Tags -->
        <title>{{ $title ?? config('app.name') }}</title>
        <meta name="title" content="{{ $title ?? config('app.name') }}" />
        <meta name="description" content="{{ $description ?? 'Fête villageoise des Ponts-de-Martel' }}" />

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ config('app.url') }}" />
        <meta property="og:title" content="{{ $title ?? config('app.name') }}" />
        <meta property="og:description" content="{{ $description ?? 'Fête villageoise des Ponts-de-Martel' }}" />

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image" />
        <meta property="twitter:url" content="{{ config('app.url') }}" />
        <meta property="twitter:title" content="{{ $title ?? config('app.name') }}" />
        <meta property="twitter:description" content="{{ $description ?? 'Fête villageoise des Ponts-de-Martel' }}" />

        @yield('head')
    </head>

    <body>
        @yield('content')
    </body>

</html>
