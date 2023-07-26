<div class="container-fluid mt-5">
  <div class="row">
      <div class="col-12 col-md-4">
        <div class="card" style="width: 18rem;">
          {{-- QUESTA L'HO INSERITA DI DEFAULT SENNO' DAVA ERRORE, SENZA L'IMMAGINE NON MI PASSAVA L'ARTICOLO, POI LO IMPLEMENTEREMO --}}
          <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="immagine articolo">
          <div class="card-body">
            <h3 class="card-title">{{$article->title}}</h3>
            <h5 class="card-text">{{$article->body}}</h5>
          <div><a href="" class="small text-muted fst-italic text-capitalize">{{$article->category->name}}</a>
          </div>
          <div class="mt-1 card-footer text-muted d-flex justify-content-between align-items-center">
            Redatto il {{$article->created_at->format('d/m/Y H:i:s')}} da <a href="" class="text-decoration-none">{{$article->author}}</a>
          </div>
          <div class="mt-1"><a href="{{route('article.show' , compact('article'))}}" class="btn btn-primary">DETTAGLIO</a></div>
          </div>
        </div>
      </div>
  </div>
</div>

    

