@extends('base')

@section('head')
    <link rel="icon" href="{{ asset('svg/logo-simple.svg') }}">

    <meta property="og:image" content="{{ asset('svg/logo.svg') }}" />
    <meta property="twitter:image" content="{{ asset('svg/logo.svg') }}" />

    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    @vite(['resources/views/themes/2026/app.css', 'resources/views/themes/2026/app.js'])
@endsection

@section('content')
    <main>
        <header
            class="text-shadow-sm md:aspect-3/1 aspect-square bg-[url(fetevi2026-06-1-1--40-notext.webp)] bg-contain text-white md:bg-[url(fetevi2026-06-3-1--40-notext.webp)]">
            {!! str($header)->markdown()->sanitizeHtml() !!}
        </header>
        <div class="bg-[#f5fcfc] p-6 py-16 text-[#124d7e] md:p-12 md:py-20 xl:py-28 masonry-grid">
            @foreach (array_splice($articles, 0, 2) as $article)
                <article
                    class="rounded-4xl w-full border-[#3cacc3] bg-white p-4 shadow-lg md:w-1/2 md:max-w-xl md:p-6 masonry-item">
                    <h1 class="text-3xl xl:text-5xl">{{ $article['title'] }}</h1>
                    <div class="prose lg:prose-lg xl:prose-xl">
                        {!! str($article['content'])->markdown() !!}
                    </div>
                </article>
            @endforeach
        </div>
    </main>
    <div class="h-16 bg-[#f5fcfc]"></div>
    <footer class="bg-linear-to-b flex flex-col items-center gap-4 from-[#124d7e] to-[#3cacc3] pb-20 text-white">
        <img src="svg/logo.svg"
            class="-mt-14 mb-12 size-28 rounded-full border border-[#f5fcfc] bg-[#f5fcfc] xl:-mt-20 xl:size-40" />
        {!! str($footer)->markdown() !!}
    </footer>
@endsection
