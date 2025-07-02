<x-master>
    {{-- START OF SECTION JUDUL PAGE --}}
    {{-- Judul Article --}}
    <div class="d-flex justify-content-center align-items-center pt-7 montserrat-bold text-5xl">Articles to<span class="ms-3 text-orenyedija">Read</span></div>

    {{-- Slogan Article --}}
    <div class="d-flex justify-content-center align-items-center mt-1 mb-5 nunito-regular text-lg">Read more, be smarter!</div>
    {{-- END OF SECTION JUDUL PAGE --}}

    {{-- div gede, ini untuk nampung semua article --}}
    <div class="container mb-5">
        {{-- div baris pertama, loop 3 articles --}}
        <div class="container align-items-center d-flex flex-row justify-content mb-5">
            @foreach($articles->reverse()->slice(0, 3) as $article)
                <div class="ms-3 shadow rounded-4 custom-card pt-3">
                    <a href="{{ route('article.detail', ['slug' => $article->slug]) }}">
                        <img src="{{ asset($article->thumbnail) }}" alt="{{ $article->title }}">
                    </a>
                    <div class="d-flex mb-4 container ms-2">
                        <a href="{{ route('article.detail', ['slug' => $article->slug]) }}" class="text-decoration-none text-dark">
                            <p class="nunito-extrabold text-xl align-items-center">{{ $article->title }}</p>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        
        <div class="container align-items-center d-flex flex-row justify-content">
            @foreach($articles->reverse()->slice(3, 3) as $article)
                <div class="ms-3 shadow rounded-4 custom-card pt-3">
                    <a href="{{ route('article.detail', ['slug' => $article->slug]) }}">
                        <img src="{{ asset($article->thumbnail) }}" alt="{{ $article->title }}">
                    </a>
                    <div class="d-flex mb-4 container ms-2">
                        <a href="{{ route('article.detail', ['slug' => $article->slug]) }}" class="text-decoration-none text-dark">
                            <p class="nunito-extrabold text-xl align-items-center">{{ $article->title }}</p>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</x-master>