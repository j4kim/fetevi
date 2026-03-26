@extends('base')

@section('head')
    <link rel="icon" href="{{ asset('svg/logo-simple.svg') }}">

    <meta property="og:image" content="{{ asset('svg/logo.svg') }}" />
    <meta property="twitter:image" content="{{ asset('svg/logo.svg') }}" />
    @vite(['resources/views/themes/2026/app.css', 'resources/views/themes/2026/app.js'])
@endsection

@section('content')
    <main>
        <header>
            {!! str($header)->markdown()->sanitizeHtml() !!}
        </header>
        <div class="content">
            @foreach ($articles as $article)
                <article>
                    <h1>{{ $article['title'] }}</h1>
                    {!! str($article['content'])->markdown() !!}
                </article>
            @endforeach
            <div class="spacer"></div>
        </div>
    </main>
    <footer>
        <img src="svg/logo.svg" width="100px" />
        {!! str($footer)->markdown() !!}
    </footer>
@endsection
