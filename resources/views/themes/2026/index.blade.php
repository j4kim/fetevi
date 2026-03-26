@extends('base')

@section('head')
    <link rel="icon" href="{{ asset('svg/logo-simple.svg') }}">

    <meta property="og:image" content="{{ asset('svg/logo.svg') }}" />
    <meta property="twitter:image" content="{{ asset('svg/logo.svg') }}" />

    @vite(['resources/views/themes/2026/app.css', 'resources/views/themes/2026/app.js'])
@endsection

@section('content')
    <main>
        <header
            class="bg-[url(fetevi2026-06-1-1--40-notext.webp)] bg-contain text-white aspect-square  text-shadow-sm md:aspect-3/1 md:bg-[url(fetevi2026-06-3-1--40-notext.webp)]">
            {!! str($header)->markdown()->sanitizeHtml() !!}
        </header>
        <div
            class="p-6 md:p-12 py-16 md:py-20 xl:py-28 flex-col flex md:flex-row gap-12 text-[#124d7e] justify-evenly items-start bg-[#f5fcfc]">
            @foreach ($articles as $article)
                <article class="w-full md:w-1/2 p-4 md:p-6 md:max-w-xl shadow-lg border-[#3cacc3] rounded-4xl bg-white">
                    <h1 class="text-3xl xl:text-5xl">{{ $article['title'] }}</h1>
                    <div class="prose lg:prose-lg xl:prose-xl">
                        {!! str($article['content'])->markdown() !!}
                    </div>
                </article>
            @endforeach
        </div>
    </main>
    <footer class="flex flex-col items-center gap-4 py-20 bg-linear-to-b from-[#124d7e] to-[#3cacc3] text-white">
        <img src="svg/logo.svg" class="size-25" />
        {!! str($footer)->markdown() !!}
    </footer>
@endsection
