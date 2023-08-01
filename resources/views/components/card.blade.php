{{-- <div class="container-fluid mt-5">
  <div class="row">
      <div class="col-12 col-md-4">
        <div class="card" style="width: 18rem;">
          <img src="https://picsum.photos/300" class="card-img-top" alt="immagine articolo">
          <div class="card-body">
            <h4 class="card-title">{{$article->title}}</h4>
            <h5 class="card-title text-truncate">{{$article->subtitle}}</h5>
            <h5 class="card-text">{{$article->body}}</h5>
          <div><a href="{{route('article.category' , ['category' => $article->category->id])}}" class="small text-muted fst-italic text-capitalize">{{$article->category->name}}</a>
          </div>
          
          <div class="mt-1 card-footer text-muted d-flex justify-content-between align-items-center">
            Redatto il {{$article->created_at->format('d/m/Y H:i:s')}} da <a href="{{route('article.user' , ['user' => $article->user->id])}}" class="text-decoration-none">{{$article->user->name}}</a>
          </div>
          <div class="mt-1"><a href="{{route('article.show' , compact('article'))}}" class="btn btn-primary">DETTAGLIO</a></div>
          </div>
        </div>
      </div>
  </div>
</div> --}}

    


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
      <h4 class="card__title">{{$article->title}}</h4>
      <p class="card__description mt-3">
        {{$article->subtitle}}
      </p>
      <p class="card-text">{{$article->body}}</p>
          <div><a href="{{route('article.category' , ['category' => $article->category->id])}}" class="small fst-italic text-capitalize card-text">{{$article->category->name}}</a>
          </div>  
          <div class="mt-1 card-footer d-flex justify-content-between align-items-center card-text">
            Redatto il {{$article->created_at->format('d/m/Y')}} da <a href="{{route('article.user' , ['user' => $article->user->id])}}" class="text-decoration-none card-text">{{$article->user->name}}</a>
          </div>
          <div class="mt-1"><a href="{{route('article.show' , compact('article'))}}" class="btn btn-primary">DETTAGLIO</a></div>
    </div>
  </div>
</article>