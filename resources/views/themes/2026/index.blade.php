@extends('base')

@section('head')
    <link rel="icon" href="{{ asset('svg/logo-simple.svg') }}">

    <meta property="og:image" content="{{ asset('svg/logo.svg') }}" />
    <meta property="twitter:image" content="{{ asset('svg/logo.svg') }}" />

    @vite(['resources/views/themes/2026/app.css', 'resources/views/themes/2026/app.js'])
@endsection

@section('content')
    <main>
        <header class="bg-[url(fetevi2026-06-3-1--40-notext.webp)] bg-contain text-white aspect-3/1">
            {!! str($header)->markdown()->sanitizeHtml() !!}
        </header>
        <div class="p-12 flex gap-12 bg-sky-950 justify-evenly items-start">
            @foreach ($articles as $article)
                <article class="w-1/2 bg-white p-6 max-w-lg">
                    <h1>{{ $article['title'] }}</h1>
                    {!! str($article['content'])->markdown() !!}
                </article>
            @endforeach
        </div>
    </main>
    <footer class="flex flex-col items-center gap-4 my-12">
        <img src="svg/logo.svg" class="size-25" />
        {!! str($footer)->markdown() !!}
    </footer>
@endsection
