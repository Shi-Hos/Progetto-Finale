



<article class="card">
    <img class="card__background" src="https://picsum.photos/300"
        alt="Photo of Cartagena's cathedral at the background and some colonial style houses" width="1920"
        height="2193" />
    <div class="card__content | flow">
        <div class="card__content--container | flow">
            <h4 class="card__title">{{ $article->title }}</h4>
            <p class="card__description mt-3 text-truncate">
                {{ $article->subtitle }}
            </p>
            <p class="card-text text-truncate">{{ $article->body }}</p>
            <div><a href="{{ route('article.category', ['category' => $article->category->id]) }}"
                    class="small fst-italic text-capitalize card-text">{{ $article->category->name }}</a>
            </div>
            <div class="text-light">
                Redatto il {{ $article->created_at->format('d/m/Y') }} da
                <a href="{{ route('article.user', ['user' => $article->user->id]) }}"
                    class="w-50 text-decoration-none card-text text-truncate">{{ $article->user->name }}</a>
            </div>

            <p class="small fst-italic text-capitalize">
                @foreach ($article->tags as $tag)
                    #{{$tag->name}}
                @endforeach
            </p>


            @if($article->category)
            <a href="{{route('article.byCategory' , ['category' => $article->category->id])}}" class="small fst-italic text-capitalize">{{$article->category->name}}</a>
            @else
            <p class="small fst-italic text-capitalize">Non categorizzato</p>
            @endif
            <div class="mt-1 "><a href="{{ route('article.show', compact('article')) }}"
                    class="btn btn-primary">DETTAGLIO</a></div>
        </div>
    </div>
</article>
