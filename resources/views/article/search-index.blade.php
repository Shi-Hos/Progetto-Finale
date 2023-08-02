<x-layout>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 mt-5">
              <fieldset>
                <h1 class="display-1 borderY text-center">HAI CERCATO:  {{$query}}</h1>
              </fieldset>
            </div>
        </div>
    </div>

    <article class="card">
        <img
          class="card__background"
          src="https://picsum.photos/300"
          alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
          width="1920"
          height="2193"
        />
        <div class="card__content | flow">
          <div class="card__content--container | flow">
            @foreach ($articles as $article)
            <h4 class="card__title">{{$article->title}}</h4>
            <p class="card__description mt-3">
              {{$article->subtitle}}
            </p>
            <p class="card-text">{{$article->body}}</p>
                <div><a href="{{route('article.search' , ['category' => $article->category->id])}}" class="small fst-italic text-capitalize card-text">{{$article->category->name}}</a>
                </div>  
                <div class="mt-1 card-footer d-flex justify-content-between align-items-center card-text">
                  Redatto il {{$article->created_at->format('d/m/Y')}} da <a href="{{route('article.user' , ['user' => $article->user->id])}}" class="text-decoration-none card-text">{{$article->user->name}}</a>
                </div>
                <div class="mt-1"><a href="{{route('article.show' , compact('article'))}}" class="btn btn-primary">DETTAGLIO</a></div>
                @endforeach
          </div>
        </div>
      </article>
</x-layout>