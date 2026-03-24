@extends('base')

@section('head')
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet" />
    <script src="{{ asset('js/locomotive/locomotive-scroll.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/locomotive/locomotive-scroll.css') }}" />
    <link rel="icon" href="{{ asset('svg/moon.svg') }}">
    @include('2024.styles')
@endsection

@section('content')
    <main data-scroll-section>
        <header data-scroll data-scroll-speed="-0.1">
            {!! str($header)->markdown() !!}
        </header>
        <img
            id="garland-right"
            src="{{ asset('svg/2024/garland-right.svg') }}"
            class="z3 absolute"
            data-scroll
            data-scroll-speed=".4" />
        <img
            id="garland-left"
            src="{{ asset('svg/2024/garland-left.svg') }}"
            class="z1 absolute"
            data-scroll
            data-scroll-speed=".1" />
        <div class="spacer"></div>
        <div data-scroll data-scroll-speed="-0.15">
            <img
                id="trees-left"
                src="{{ asset('svg/2024/trees-left.svg') }}"
                class="z1 absolute" />
            <img
                id="trees-right"
                src="{{ asset('svg/2024/trees-right.svg') }}"
                class="z1 absolute" />
            <img
                id="floor-1"
                src="{{ asset('svg/2024/floor-1.svg') }}"
                class="z0 relative" />
        </div>
        <div id="main-content" class="relative">
            <img
                id="front-tree-left"
                src="{{ asset('svg/2024/front-tree-left.svg') }}"
                class="z0 absolute" />
            <div id="inner" class="z2 relative">
                <img id="owl" src="{{ asset('svg/2024/owl.svg') }}" />
                <img
                    id="owl-feets"
                    src="{{ asset('svg/2024/owl-feets.svg') }}"
                    class="z3" />
                <article class="content relative">
                    @foreach ($articles as $article)
                        <h1>{{ $article['title'] }}</h1>
                        {!! str($article['content'])->markdown() !!}
                        @if (!$loop->last)
                            <hr>
                        @endif
                    @endforeach
                </article>
            </div>
            <img
                id="boar"
                src="{{ asset('svg/2024/boar-date.svg') }}"
                class="z2 absolute" />
        </div>
        <img
            id="bottom"
            src="{{ asset('svg/2024/bottom.svg') }}"
            class="z3 relative" />
        <footer class="z3 content relative">
            {!! str($footer)->markdown() !!}
        </footer>
    </main>
    <script>
        const scroll = new LocomotiveScroll({
            lenisOptions: {
                smoothTouch: true,
            }
        });
    </script>
@endsection
