@extends('base')

@section('head')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Modak&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('svg/logo-simple.svg') }}">

    <meta property="og:image" content="{{ asset('svg/logo.svg') }}" />
    <meta property="twitter:image" content="{{ asset('svg/logo.svg') }}" />
    @include('themes.2025.styles')
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
